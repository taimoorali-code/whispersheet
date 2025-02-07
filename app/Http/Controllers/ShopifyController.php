<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopifyController extends Controller
{
    //

    public function showAddStoreForm()
    {
        return view('shopify.add_store');
    }

    public function requestAuthorization(Request $request)
    {
        $request->validate([
            'shop' => 'required|string',
        ]);
    
        $shop = $request->input('shop');
    
        // Normalize the shop domain
        $shop = strtolower(trim($shop)); // Convert to lowercase and trim spaces
    
        // Remove protocol (https:// or http://) if present
        $shop = preg_replace('/^https?:\/\//', '', $shop);
    
        // Remove trailing slashes if any
        $shop = rtrim($shop, '/');
    
        // If the domain doesn't end with '.myshopify.com', append it
        if (!str_ends_with($shop, '.myshopify.com')) {
            $shop .= '.myshopify.com';
        }
    
        $scopes = env('SHOPIFY_SCOPES', 'read_products,write_orders'); // Fetch scopes from .env
        $redirectUri = route('shopify.callback');
        $clientId = env('SHOPIFY_API_KEY');
    
        $installUrl = "https://{$shop}/admin/oauth/authorize?client_id={$clientId}&scope={$scopes}&redirect_uri={$redirectUri}";
    
        return redirect($installUrl);
    }
    
    

    public function handleCallback(Request $request)
    {
        try {
            $shop = $request->query('shop');
            $code = $request->query('code');
    
            if (!$shop || !$code) {
                throw new \Exception('Missing shop or code parameter.');
            }
    
            $clientId = env('SHOPIFY_API_KEY');
            $clientSecret = env('SHOPIFY_API_SECRET');
    
            $response = Http::post("https://{$shop}/admin/oauth/access_token", [
                'client_id' => $clientId,
                'client_secret' => $clientSecret,
                'code' => $code,
            ]);
    
            if (!$response->successful()) {
                throw new \Exception('Failed to retrieve access token from Shopify.');
            }
    
            $data = $response->json();
    
            if (!isset($data['access_token'])) {
                throw new \Exception('Access token not found in response.');
            }
    
            $accessToken = $data['access_token'];
    
            // Store the shop details and access token
            Shop::create([
                'user_id' => Auth::id(),
                'shop_name' => $shop,
                'shop_url' => "https://{$shop}",
                'access_token' => $accessToken,
            ]);
    
            return redirect()->route('dashboard')->with('success', 'Shop added successfully!');
        } catch (\Exception $e) {
            return redirect()->route('dashboard')->with('error', $e->getMessage());
        }
    }
    

}
