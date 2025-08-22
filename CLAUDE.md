# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a Laravel 10 web application for ACD Corporate Services, a business organization that promotes international networking and excellence awards. The application manages events, candidatures, reservations, and contacts with multilingual support (French, English, Spanish).

## Development Commands

### Backend (Laravel)
- `php artisan serve` - Start the development server
- `composer install` - Install PHP dependencies
- `php artisan migrate` - Run database migrations
- `php artisan migrate:fresh --seed` - Fresh migration with seeders
- `php artisan cache:clear` - Clear application cache
- `php artisan config:clear` - Clear configuration cache
- `php artisan route:list` - View all routes
- `php artisan tinker` - Interactive shell

### Frontend (Vite + Laravel Mix)
- `npm install` - Install Node.js dependencies
- `npm run dev` - Start Vite development server
- `npm run build` - Build assets for production
- `npm run watch` - Watch for file changes (deprecated, use `npm run dev`)

### Testing
- `php artisan test` - Run PHPUnit tests
- `./vendor/bin/phpunit` - Alternative test command

## Architecture Overview

### Core Models
- **User**: Standard Laravel authentication with role-based access
- **ImpactFemininCandidature**: Candidatures for women's impact awards
- **Reservation**: Event/place reservations
- **Candidature**: General candidature system
- **Contact**: Contact form submissions
- **RencontreInscription2026**: B2B meeting registrations for 2026

### Key Features
- **Multilingual Support**: Uses mcamara/laravel-localization for French/English/Spanish
- **PDF Generation**: barryvdh/laravel-dompdf for candidature documents
- **Email Notifications**: Comprehensive email system for forms and admin notifications
- **Admin Panel**: Separate admin area for managing submissions and candidatures
- **Role-based Access**: Custom role system with User-Role relationships

### Route Structure
- **Public Routes**: Prefixed with locale (fr/en/es) for multilingual support
- **Admin Routes**: `/admin` prefix with authentication middleware
- **Auth Routes**: Standard Laravel Breeze authentication

### Frontend Stack
- **Vite**: Module bundler and development server
- **Tailwind CSS**: Utility-first CSS framework
- **Bootstrap 5**: Used in admin dashboard (Material Dashboard theme)
- **Alpine.js**: Lightweight JavaScript framework
- **Sass**: CSS preprocessing

### Database Structure
Key migrations show the evolution from basic contact/forum system (2023) to current features like Impact Féminin and B2B meetings (2025).

### File Storage
- **Candidatures**: Stored in `storage/app/candidatures/`
- **Public Assets**: `public/assets/` for images, CSS, JS
- **Admin Assets**: `public/admin/assets/` for dashboard theme

## Important Configuration Notes

- Application uses Laravel Localization middleware for all public routes
- Email notifications are sent to `acdnotif@gmail.com` for admin notifications
- PDF generation is configured for candidature downloads
- The application has both a public-facing site and an admin dashboard
- Session-based authentication is used throughout the application