<?php

namespace App\Http\Controllers;

use App\Models\Plans;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index()
    {
        $plans = Plans::with('features')->get();
        return view('layouts.model', compact('plans'));
    }
}
