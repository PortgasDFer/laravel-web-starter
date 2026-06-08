<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SetupController extends Controller
{
    public function index()
    {
        return view('setup.index');
    }

    public function store(Request $request)
    {
        dd($request);
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

        $settings = Setting::firstOrCreate([]);

        $settings->update([
            'site_name'        => $request->site_name,
            'site_description' => $request->site_description,

            'email'            => $request->email,
            'phone'            => $request->phone,
            'whatsapp'         => $request->whatsapp,
            'address'          => $request->address,

            'facebook'         => $request->facebook,
            'instagram'        => $request->instagram,
            'linkedin'         => $request->linkedin,
            'youtube'          => $request->youtube,

            'google_maps'      => $request->google_maps,

            'is_configured'    => true,
        ]);

        return redirect('/dashboard')
            ->with('success', 'Configuración guardada correctamente.');
    }
}
