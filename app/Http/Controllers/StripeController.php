<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Payment;
use Stripe\Stripe;
use Stripe\Charge;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Stripe\PaymentLink;
use Stripe\Webhook;


class StripeController extends Controller
{
    public function checkout(Request $request)
    {
        // Validate user data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'stripeToken' => 'required'
        ]);

        try {
            // Set Stripe API key
            Stripe::setApiKey(env('STRIPE_SECRET'));

            // Charge user
            $charge = Charge::create([
                'amount' => 49500, // 495.00 in cents
                'currency' => 'usd',
                'description' => 'Lifetime License for TypeCart',
                'source' => $request->stripeToken,
            ]);

            // Store user in database
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'is_paid' => true,
            ]);

            // Store payment details
            Payment::create([
                'user_id' => $user->id,
                'stripe_payment_id' => $charge->id,
                'amount' => 495.00,
            ]);

            // Log in user
            Auth::login($user);

            // Redirect to dashboard
            return redirect()->route('dashboard')->with('success', 'Payment Successful, Welcome!');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

public function createPaymentLink()
{
    Stripe::setApiKey(env('STRIPE_SECRET')); // Set your Stripe Secret Key

    $paymentLink = PaymentLink::create([
        'line_items' => [[
            'price_data' => [
                'currency' => 'usd',
                'product_data' => [
                    'name' => 'Divi Lifetime Access Key',
                ],
                'unit_amount' => 49500, // Amount in cents ($495)
            ],
            'quantity' => 1,
        ]],
        'after_completion' => [
            'type' => 'redirect',
            'redirect' => ['url' => route('payment.success')],
        ],
    ]);

    return redirect($paymentLink->url); // Redirect user to Stripe checkout
}

public function handleWebhook(Request $request)
{
    Stripe::setApiKey(env('STRIPE_SECRET'));

    // Get Stripe payload
    $payload = $request->getContent();
    $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'] ?? null;
    $endpoint_secret = env('STRIPE_WEBHOOK_SECRET');

    try {
        // Verify webhook signature (ensure security)
        $event = Webhook::constructEvent($payload, $sig_header, $endpoint_secret);

        // Handle checkout success
        if ($event->type == 'checkout.session.completed') {
            $session = $event->data->object;

            // Retrieve user email from session
            $email = $session->customer_details->email;

            // Check if user exists, if not, create a new one
            $user = User::firstOrCreate(
                ['email' => $email],
                [
                    'name' => $session->customer_details->name ?? 'Guest User',
                    'password' => bcrypt('random_password'), // Generate a random password
                    'is_paid' => true,
                ]
            );

            // Store payment details
            Payment::create([
                'user_id' => $user->id,
                'stripe_payment_id' => $session->payment_intent,
                'amount' => $session->amount_total / 100, // Convert from cents
            ]);

            Log::info("Payment successful for user: " . $user->email);
        }

        return response()->json(['status' => 'success']);
    } catch (\Exception $e) {
        Log::error('Stripe Webhook Error: ' . $e->getMessage());
        return response()->json(['status' => 'error'], 400);
    }
}

}
