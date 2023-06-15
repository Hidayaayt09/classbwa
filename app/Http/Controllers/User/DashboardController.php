<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {

        $checkout = Checkout::with('camp')->whereUserId(Auth::id())->get();
        // return $checkout;
        return view('user.dashboard', [
            'checkout' => $checkout
        ]);
        
    }
    }
