<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Support\Facades\Auth;

class SubscribeController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return [
            'auth'
        ];
    }

    public function showPlans()
    {

        $plans = Plan::get();

        return view('subscribe.plans', [
            'plans' => $plans
        ]);
    }

    public function checkoutPlan(Plan $plan)
    {
        $user = Auth::user();
        return view('subscribe.checkout', [
            'plan' => $plan,
            'user' => $user
        ]);
    }
}
