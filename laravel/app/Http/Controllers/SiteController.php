<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
public function index()
{
    seo([
        'title' => 'AAF Desarrollo Digital | Desarrollo Web, Software y Soluciones Digitales',

        'description' => 'Diseñamos y desarrollamos sitios web, aplicaciones, software y soluciones digitales para empresas que buscan crecer, mejorar sus procesos y fortalecer su presencia digital.',

        'keywords' => 'desarrollo web, diseño web, desarrollo de software, aplicaciones móviles, soluciones empresariales, branding digital, agencia digital México',

        'image' => asset('images/seo/desarrollo-digital.jpg'),

        'type' => 'website',

        'breadcrumbs' => [
            [
                'name' => 'Inicio',
                'url' => url('/'),
            ],
        ],
    ]);

    return view('welcome');
}

    public function about()
    {
        seo([
            'title' => 'Sobre Nosotros | AAF Desarrollo Digital',

            'description' => 'Conoce más sobre nuestra agencia de desarrollo digital y cómo podemos ayudarte a alcanzar tus objetivos en línea.',

            'keywords' => 'sobre nosotros, agencia digital, desarrollo web, branding, soluciones digitales',

            'image' => asset('images/seo/sobre-nosotros.jpg'),

            'type' => 'website',

            'breadcrumbs' => [
                [
                    'name' => 'Inicio',
                    'url' => url('/'),
                ],

                [
                    'name' => 'Sobre Nosotros',
                    'url' => url('/sobre-nosotros'),
                ],
            ],
        ]);

        return view('site.about');
    }

    public function contact()
    {
        seo([
            'title' => 'Contacto | AAF Desarrollo Digital',

            'description' => 'Contáctanos para obtener más información sobre nuestros servicios de desarrollo digital y cómo podemos ayudarte a alcanzar tus objetivos en línea.',

            'keywords' => 'contacto, agencia digital, desarrollo web, branding, soluciones digitales',

            'image' => asset('images/seo/contacto.jpg'),

            'type' => 'website',

            'breadcrumbs' => [
                [
                    'name' => 'Inicio',
                    'url' => url('/'),
                ],

                [
                    'name' => 'Contacto',
                    'url' => url('/contacto'),
                ],
            ],
        ]);

        return view('site.contact');
    }

    public function web()
    {
        seo([
            'title' => 'Desarrollo Web | AAF Desarrollo Digital',

            'description' => 'Diseñamos y desarrollamos sitios web profesionales, rápidos y optimizados para buscadores, adaptados a las necesidades de cada negocio.',

            'keywords' => 'desarrollo web, diseño web, páginas web, desarrollo web México',

            'image' => asset('images/seo/desarrollo-web.jpg'),

            'type' => 'service',

            'service' => [
                'name' => 'Desarrollo Web',

                'description' => 'Diseño y desarrollo de sitios web profesionales y soluciones digitales adaptadas a las necesidades de cada negocio.',
            ],

            'breadcrumbs' => [
                [
                    'name' => 'Inicio',
                    'url' => url('/'),
                ],

                [
                    'name' => 'Desarrollo Web',
                    'url' => url('/desarrollo-web'),
                ],
            ],
        ]);

        return view('site.web');
    }

    public function pricingWeb()
{
    seo([
        'title' => 'Precios de Desarrollo Web | AAF Desarrollo Digital',

        'description' => 'Conoce nuestros planes y precios de desarrollo web. Creamos sitios web profesionales, responsivos y optimizados para SEO, con dominio, hosting y soporte inicial.',

        'keywords' => 'precios desarrollo web, costo página web, diseño web precio, desarrollo web México, páginas web económicas, planes desarrollo web',

        'image' => asset('images/seo/desarrollo-web.jpg'),

        'type' => 'website',

        'breadcrumbs' => [
            [
                'name' => 'Inicio',
                'url' => url('/'),
            ],
            [
                'name' => 'Desarrollo Web',
                'url' => url('/desarrollo-web'),
            ],
            [
                'name' => 'Precios de Desarrollo Web',
                'url' => url('/desarrollo-web-inversion'),
            ],
        ],
    ]);

    return view('site.pricing-web');
}

    public function branding()
    {
        seo([
            'title' => 'Branding | AAF Desarrollo Digital',

            'description' => 'Desarrollamos estrategias de branding efectivas para ayudarte a construir una marca fuerte y memorable en el mercado digital.',

            'keywords' => 'branding, agencia digital, desarrollo web, soluciones digitales',

            'image' => asset('images/seo/branding.jpg'),

            'type' => 'website',

            'breadcrumbs' => [
                [
                    'name' => 'Inicio',
                    'url' => url('/'),
                ],

                [
                    'name' => 'Branding',
                    'url' => url('/branding'),
                ],
            ],
        ]);

        return view('site.branding');
    }

    public function pricingBranding()
    {
        return view('site.pricing-branding');
    }

    public function enterpriseSolutions()
{
    seo([
        'title' => 'Soluciones Empresariales | AAF Desarrollo Digital',

        'description' => 'Desarrollamos soluciones empresariales a la medida para automatizar procesos, optimizar operaciones y mejorar la gestión de tu empresa mediante tecnología.',

        'keywords' => 'soluciones empresariales, software empresarial, automatización de procesos, sistemas empresariales, desarrollo de software empresarial, soluciones digitales para empresas, software a medida México',

        'image' => asset('images/seo/soluciones-empresariales.jpg'),

        'type' => 'service',

        'service' => [
            'name' => 'Soluciones Empresariales',

            'description' => 'Desarrollo de soluciones empresariales a la medida para automatizar procesos, optimizar operaciones y mejorar la gestión mediante tecnología.',
        ],

        'breadcrumbs' => [
            [
                'name' => 'Inicio',
                'url' => url('/'),
            ],
            [
                'name' => 'Soluciones Empresariales',
                'url' => url('/soluciones-empresariales'),
            ],
        ],
    ]);

    return view('site.enterprise-solutions');
}

    public function pricingEnterpriseSolutions()
    {
        return view('site.pricing-enterprise-solutions');
    }

    public function softwareApps()
    {
        seo([
            'title' => 'Software y Apps | AAF Desarrollo Digital',

            'description' => 'Desarrollamos software a medida y aplicaciones móviles para empresas que buscan digitalizar procesos, mejorar su operación y ofrecer mejores experiencias a sus usuarios.',

            'keywords' => 'desarrollo de software, aplicaciones móviles, apps móviles, software a medida, desarrollo de aplicaciones, React Native, software empresarial, desarrollo de apps México',

            'image' => asset('images/seo/software-apps.jpg'),

            'type' => 'service',

            'service' => [
                'name' => 'Software y Aplicaciones',

                'description' => 'Desarrollo de software a medida y aplicaciones móviles para digitalizar procesos, optimizar operaciones y crear soluciones adaptadas a las necesidades de cada empresa.',
            ],

            'breadcrumbs' => [
                [
                    'name' => 'Inicio',
                    'url' => url('/'),
                ],
                [
                    'name' => 'Software y Apps',
                    'url' => url('/software-apps'),
                ],
            ],
        ]);

        return view('site.software-apps');
    }

    public function projects()
    {
        seo([
            'title' => 'Proyectos | AAF Desarrollo Digital',

            'description' => 'Conoce algunos de nuestros proyectos de desarrollo web, software, aplicaciones y soluciones digitales creadas para empresas y negocios.',

            'keywords' => 'proyectos de desarrollo web, portafolio web, proyectos de software, aplicaciones móviles, proyectos digitales, desarrollo web México',

            'image' => asset('images/seo/proyectos.jpg'),

            'type' => 'website',

            'breadcrumbs' => [
                [
                    'name' => 'Inicio',
                    'url' => url('/'),
                ],
                [
                    'name' => 'Proyectos',
                    'url' => url('/proyectos'),
                ],
            ],
        ]);

        return view('site.projects');
    }

    public function customDevelopment()
    {
        seo([
            'title' => 'Desarrollo a Medida | AAF Desarrollo Digital',

            'description' => 'Desarrollamos software y soluciones digitales a la medida de las necesidades de tu empresa, desde sistemas internos hasta plataformas y aplicaciones personalizadas.',

            'keywords' => 'desarrollo a medida, software a medida, desarrollo de software personalizado, sistemas a medida, aplicaciones personalizadas, soluciones digitales a medida, software empresarial México',

            'image' => asset('images/seo/desarrollo-a-medida.jpg'),

            'type' => 'service',

            'service' => [
                'name' => 'Desarrollo a Medida',

                'description' => 'Desarrollo de software y soluciones digitales personalizadas para resolver las necesidades específicas de cada empresa y optimizar sus procesos.',
            ],

            'breadcrumbs' => [
                [
                    'name' => 'Inicio',
                    'url' => url('/'),
                ],
                [
                    'name' => 'Desarrollo a Medida',
                    'url' => url('/desarrollo-a-medida'),
                ],
            ],
        ]);

        return view('site.medida');
    }

    public function technologia()
    {
        seo([
            'title' => 'Tecnologías | AAF Desarrollo Digital',

            'description' => 'Conoce las tecnologías y herramientas que utilizamos para desarrollar sitios web, software, aplicaciones móviles y soluciones digitales modernas.',

            'keywords' => 'tecnologías desarrollo web, tecnologías de software, Laravel, PHP, React Native, JavaScript, MySQL, desarrollo móvil, tecnologías web México',

            'image' => asset('images/seo/tecnologias.jpg'),

            'type' => 'website',

            'breadcrumbs' => [
                [
                    'name' => 'Inicio',
                    'url' => url('/'),
                ],
                [
                    'name' => 'Tecnologías',
                    'url' => url('/tecnologias'),
                ],
            ],
        ]);

        return view('site.tecnologias');
    }

    public function highPerformance()
    {
        seo([
            'title' => 'Alto Rendimiento | AAF Desarrollo Digital',
            'description' => 'Nuestros sitios web y aplicaciones están optimizados para ofrecer el mejor rendimiento posible, garantizando una experiencia rápida y eficiente para los usuarios.',
            'keywords' => 'alto rendimiento, velocidad web, optimización de sitio web, desarrollo web rápido, experiencia de usuario, rendimiento digital, AAF Desarrollo Digital',
            'image' => asset('images/seo/rendimiento.jpg'),
            'type' => 'website',
            'breadcrumbs' => [
                [
                    'name' => 'Inicio',
                    'url' => url('/'),
                ],
                [
                    'name' => 'Alto Rendimiento',
                    'url' => url('/rendimiento'),
                ],
            ],
        ]);

        return view('site.rendimiento');
    }

    public function responsive()
    {
        seo([
            'title' => 'Diseño Responsivo | AAF Desarrollo Digital',
            'description' => 'Nuestros diseños son completamente responsivos y se adaptan a cualquier dispositivo, garantizando una excelente experiencia de usuario en todos los entornos.',
            'keywords' => 'diseño responsivo, diseño web adaptable, desarrollo web móvil, experiencia de usuario, responsive design, AAF Desarrollo Digital',
            'image' => asset('images/seo/responsive.jpg'),
            'type' => 'website',
            'breadcrumbs' => [
                [
                    'name' => 'Inicio',
                    'url' => url('/'),
                ],
                [
                    'name' => 'Diseño Responsivo',
                    'url' => url('/responsive'),
                ],
            ],
        ]);

        return view('site.responsive');
    }

    public function seoOptimization()
    {
        seo([
            'title' => 'Optimización SEO | AAF Desarrollo Digital',
            'description' => 'Optimizamos tu sitio web para mejorar su visibilidad en los motores de búsqueda y aumentar el tráfico orgánico.',
            'keywords' => 'optimización SEO, posicionamiento web, marketing digital, desarrollo web, AAF Desarrollo Digital',
            'image' => asset('images/seo/seo.jpg'),
            'type' => 'website',
            'breadcrumbs' => [
                [
                    'name' => 'Inicio',
                    'url' => url('/'),
                ],
                [
                    'name' => 'Optimización SEO',
                    'url' => url('/seo'),
                ],
            ],
        ]);

        return view('site.seo');
    }

    public function support()
    {
        seo([
            'title' => 'Soporte | AAF Desarrollo Digital',
            'description' => 'Ofrecemos soporte técnico y asistencia para garantizar el correcto funcionamiento de tus sitios web y aplicaciones.',
            'keywords' => 'soporte técnico, asistencia web, desarrollo web, AAF Desarrollo Digital',
            'image' => asset('images/seo/soporte.jpg'),
            'type' => 'website',
            'breadcrumbs' => [
                [
                    'name' => 'Inicio',
                    'url' => url('/'),
                ],
                [
                    'name' => 'Soporte',
                    'url' => url('/soporte'),
                ],
            ],
        ]);

        return view('site.soporte');
    }

    public function personalizedService()
    {
        seo([
            'title' => 'Atención Personalizada | AAF Desarrollo Digital',
            'description' => 'Ofrecemos un servicio de atención personalizada para garantizar la satisfacción de nuestros clientes y resolver cualquier duda o problema que puedan tener.',
            'keywords' => 'atención personalizada, servicio al cliente, soporte web, AAF Desarrollo Digital',
            'image' => asset('images/seo/atencion-personalizada.jpg'),
            'type' => 'website',
            'breadcrumbs' => [
                [
                    'name' => 'Inicio',
                    'url' => url('/'),
                ],
                [
                    'name' => 'Atención Personalizada',
                    'url' => url('/atencion-personalizada'),
                ],
            ],
        ]);

        return view('site.atencion-personalizada');
    }

    public function faq()
    {
        seo([
            'title' => 'Preguntas Frecuentes | AAF Desarrollo Digital',

            'description' => 'Encuentra respuestas a las preguntas más frecuentes sobre nuestros servicios de desarrollo web, branding, software, aplicaciones y soluciones digitales.',

            'keywords' => 'preguntas frecuentes, FAQ, desarrollo web, branding, software, aplicaciones móviles, soluciones digitales, soporte, AAF Desarrollo Digital',

            'image' => asset('images/seo/faq.jpg'),

            'type' => 'website',

            'breadcrumbs' => [
                [
                    'name' => 'Inicio',
                    'url' => url('/'),
                ],
                [
                    'name' => 'Preguntas Frecuentes',
                    'url' => url('/preguntas-frecuentes'),
                ],
            ],
        ]);

        return view('site.faq');
    }

    public function money()
    {
        seo([
            'title' => 'Programa de Recompensas | AAF Desarrollo Digital',

            'description' => 'Recomienda AAF Desarrollo Digital a empresas y negocios que necesiten una página web, software o soluciones digitales y obtén recompensas por cada proyecto referido.',

            'keywords' => 'programa de recompensas, programa de referidos, recomendaciones, recompensas por recomendar, referidos desarrollo web, AAF Desarrollo Digital',

            'image' => asset('images/seo/recompensas.jpg'),

            'type' => 'website',

            'breadcrumbs' => [
                [
                    'name' => 'Inicio',
                    'url' => url('/'),
                ],
                [
                    'name' => 'Programa de Recompensas',
                    'url' => url('/programa-de-recomendaciones'),
                ],
            ],
        ]);

        return view('site.money');
    }
}
