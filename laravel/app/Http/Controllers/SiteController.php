<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('site.about');
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function web()
    {
        return view('site.web');
    }

    public function pricingWeb()
    {
        return view('site.pricing-web');
    }
}
