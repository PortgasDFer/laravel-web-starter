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

    public function branding()
    {
        return view('site.branding');
    }

    public function pricingBranding()
    {
        return view('site.pricing-branding');
    }

    public function enterpriseSolutions()
    {
        return view('site.enterprise-solutions');
    }

    public function pricingEnterpriseSolutions()
    {
        return view('site.pricing-enterprise-solutions');
    }

    public function softwareApps()
    {
        return view('site.software-apps');
    }

    public function pricingSoftwareApps()
    {
        return view('site.pricing-software-apps');
    }

    public function projects()
    {
        return view('site.projects');
    }

    public function customDevelopment()
    {
        return view('site.medida');
    }

    public function technologia()
    {
        return view('site.tecnologias');
    }

    public function highPerformance()
    {
        return view('site.rendimiento');
    }

    public function responsive()
    {
        return view('site.responsive');
    }

    public function seoOptimization()
    {
        return view('site.seo');
    }
    
    public function support()
    {
        return view('site.soporte');
    }

    public function personalizedService()
    {
        return view('site.atencion-personalizada');
    }

    public function faq()
    {
        return view('site.faq');
    }
}
