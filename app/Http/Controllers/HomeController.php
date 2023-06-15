<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Checkout;
use App\Models\Camps;
use App\Models\User;
use Auth;

class HomeController extends Controller
{
    public function dashboard()
    {

        switch (Auth::User()->is_admin) {
            case true:
                return redirect(route('admin.dashboard'));
                break;
            
            default:
                return redirect(route('user.dashboard'));
                break;
        }

    }
}



        // $checkout = Checkout::with('camp')->whereUserId(Auth::id())->get();
        // // return $checkout;
        // return view('user.dashboard', [
        //     'checkout' => $checkout
        // ]);