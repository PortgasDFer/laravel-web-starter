<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function edit()
    {
        $setting = Setting::firstOrCreate(
            ['id' => 1],
            ['site_name' => 'Laravel Web Starter']
        );
        //dd($setting);   
        return view('admin.settings.edit', compact('setting'));
    }

    public function update(Request $request)
    {
        $setting = Setting::first();

        $setting->update($request->only([
            'site_name',
            'site_description',
            'phone',
            'email',
            'whatsapp',
            'address',
            'facebook',
            'instagram',
            'linkedin',
            'youtube',
            'google_maps'
        ]));

        return back()->with('success', 'Configuración actualizada');
    }
}