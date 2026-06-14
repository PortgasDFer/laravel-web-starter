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
        $request->validate([
            'site_name'        => 'required|max:255',
            'site_description' => 'nullable|max:1000',

            'email'            => 'required|email|max:255',
            'phone'            => 'nullable|max:50',
            'whatsapp'         => 'nullable|max:50',
            'address'          => 'nullable|max:500',

            'facebook'         => 'nullable|max:255',
            'instagram'        => 'nullable|max:255',
            'linkedin'         => 'nullable|max:255',
            'youtube'          => 'nullable|max:255',

            'google_maps'      => 'nullable|max:1000',
        ]);

        $settings = Setting::first();

        if (!$settings) {

            $settings = new Setting();

            $settings->site_name = $request->site_name;
            $settings->site_description = $request->site_description;
            $settings->phone = $request->phone;
            $settings->email = $request->email;
            $settings->whatsapp = $request->whatsapp;
            $settings->address = $request->address;
            $settings->facebook = $request->facebook;
            $settings->instagram = $request->instagram;
            $settings->linkedin = $request->linkedin;
            $settings->youtube = $request->youtube;
            $settings->google_maps = $request->google_maps;
            $settings->is_configured = true;

            $settings->save();

        } else {

            $settings->update([
                'site_name' => $request->site_name,
                'site_description' => $request->site_description,
                'phone' => $request->phone,
                'email' => $request->email,
                'whatsapp' => $request->whatsapp,
                'address' => $request->address,
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
                'linkedin' => $request->linkedin,
                'youtube' => $request->youtube,
                'google_maps' => $request->google_maps,
                'is_configured' => true,
            ]);

        }
        return redirect('/dashboard')
            ->with('success', 'Configuración guardada correctamente.');
    }

}
