# Laravel Web Base – SEO & Performance

Base profesional en Laravel enfocada en:
- SEO técnico correcto
- Alto rendimiento
- Arquitectura limpia
- Escalabilidad

## 🚀 Requisitos
- PHP 8.3+
- Composer
- Redis (opcional)
- MySQL / PostgreSQL

## ⚙️ Instalación
```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate

## 🧱 Arquitectura

Este proyecto sigue una arquitectura orientada a:
- código limpio
- SEO técnico
- alto rendimiento
- escalabilidad

### Controllers
📍 `app/Http/Controllers/Web`

- Solo orquestan flujo
- NO contienen lógica de negocio
- Reciben Requests y devuelven Responses

### Services
📍 `app/Services`

- Contienen queries y reglas de negocio
- Reutilizables (Web, API, Sitemap, etc.)
- No dependen de vistas

### ViewModels
📍 `app/ViewModels`

- Preparan datos para las vistas
- Centralizan SEO (title, description, canonical)
- Evitan lógica en Blade

### Views
📍 `resources/views`

- Solo renderizado
- Sin lógica compleja
- Sin queries
