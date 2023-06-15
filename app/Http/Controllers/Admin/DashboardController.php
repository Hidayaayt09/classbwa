<?php

namespace App\Http\Controllers\Admin;

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

        $checkout = Checkout::with('camp')->get();
        // return $checkout;
        return view('admin.dashboard', [
            'checkout' => $checkout
        ]);
        
    }
}
