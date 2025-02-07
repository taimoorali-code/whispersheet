<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $shops = Auth::user()->shops; // Get all shops for logged-in user
        return view('dashboard', compact('shops'));
    }
}
