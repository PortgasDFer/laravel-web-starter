<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $settings = \App\Models\Setting::first();

        if (!$settings || !$settings->is_configured) {
            return redirect()->route('setup');
        }

        return view('admin.dashboard');
    }
}
