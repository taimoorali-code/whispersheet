<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StripeController;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopifyController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::post('/webhook/stripe', [StripeController::class, 'handleWebhook']);

Route::get('/payment', function () {
    return view('payment');
})->name('payment');

Route::post('/checkout', [StripeController::class, 'checkout'])->name('checkout');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware('auth')->name('dashboard');

Route::get('/payment-success', function (Request $request) {
    $user = User::where('email', $request->email)->first();
    if ($user) {
        Auth::login($user);
        return redirect()->route('dashboard')->with('success', 'Payment Successful, Welcome!');
    }
    return "Payment Successful!";
})->name('payment.success');


Route::get('/shopify/add', [ShopifyController::class, 'showAddStoreForm'])->name('shopify.add');
Route::post('/shopify/request', [ShopifyController::class, 'requestAuthorization'])->name('shopify.request');
Route::get('/shopify/callback', [ShopifyController::class, 'handleCallback'])->name('shopify.callback');


require __DIR__.'/auth.php';
