# GEMINI.md

## Project Overview

This is a Laravel web application that serves as a corporate website for "ACD Corporate Services". The application is multilingual, with French as the default locale. It features a public-facing website with information about the company, its services, and events. It also includes an admin panel for managing content and submissions.

### Key Technologies

*   **Backend:** PHP / Laravel
*   **Frontend:** Not explicitly defined, but likely Blade templates with some JavaScript.
*   **Database:** Not explicitly defined, but Laravel supports multiple databases.
*   **Key Packages:**
    *   `barryvdh/laravel-dompdf`: For generating PDFs.
    *   `spatie/laravel-permission`: For handling roles and permissions.
    *   `mcamara/laravel-localization`: For handling multilingual routes.

### Architecture

The application follows a standard Laravel MVC (Model-View-Controller) architecture.

*   **Models:** Located in `app/Models`, these define the database schema and relationships.
*   **Views:** Located in `resources/views`, these are the Blade templates that render the HTML.
*   **Controllers:** Located in `app/Http/Controllers`, these handle the application logic.
*   **Routes:** Defined in `routes/web.php`, these map URLs to controllers and actions.

## Building and Running

### Prerequisites

*   PHP >= 8.1
*   Composer
*   Node.js & npm
*   A database (e.g., MySQL, PostgreSQL)

### Installation

1.  **Clone the repository.**
2.  **Install PHP dependencies:**
    ```bash
    composer install
    ```
3.  **Install JavaScript dependencies:**
    ```bash
    npm install
    ```
4.  **Create a `.env` file:**
    ```bash
    cp .env.example .env
    ```
5.  **Generate an application key:**
    ```bash
    php artisan key:generate
    ```
6.  **Configure your `.env` file** with your database credentials and other environment-specific settings.
7.  **Run database migrations:**
    ```bash
    php artisan migrate
    ```

### Running the Application

*   **To start the development server:**
    ```bash
    php artisan serve
    ```
*   **To compile frontend assets:**
    ```bash
    npm run dev
    ```

### Testing

To run the test suite:

```bash
php artisan test
```

## Development Conventions

*   **Routing:** Routes are defined in `routes/web.php`. Public routes are grouped with the `LaravelLocalization` middleware to handle multilingual URLs. Admin routes are prefixed with `/admin` and have their own authentication.
*   **Controllers:** Controllers are organized by feature in `app/Http/Controllers`.
*   **Authentication:** The application uses Laravel's built-in authentication for the main application and a separate authentication for the admin panel.
*   **Permissions:** The `spatie/laravel-permission` package is used for managing roles and permissions.
*   **PDF Generation:** The `barryvdh/laravel-dompdf` package is used for generating PDFs from Blade views.
