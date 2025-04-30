# Cybersecurity Career Roadmap - Laravel Application

This is a Laravel port of the Cybersecurity Career Roadmap application, featuring:

## Features

- Interactive dashboard showing progress in different cybersecurity career paths
- Multi-language support (English/Japanese)
- Dynamic content loading for different career paths
- Modern, cyberpunk-inspired UI with responsive design

## Setup Instructions

1. Clone the repository
2. Install dependencies:
   ```
   composer install
   npm install && npm run dev
   ```
3. Copy `.env.example` to `.env` and configure your environment
4. Generate application key:
   ```
   php artisan key:generate
   ```
5. Run migrations (if applicable):
   ```
   php artisan migrate
   ```
6. Start the development server:
   ```
   php artisan serve
   ```

## Directory Structure

- `app/Http/Controllers/RoadmapController.php` - Main controller for the application
- `resources/views/layouts/app.blade.php` - Common layout template
- `resources/views/roadmap/index.blade.php` - Main dashboard view
- `resources/views/roadmap/paths/` - Individual career path views
- `resources/lang/` - Language translations
- `public/css/style.css` - Custom styling
- `public/js/app.js` - Front-end functionality

## Translation Support

The application supports English and Japanese languages. You can add more languages by:

1. Creating a new language file in `resources/lang/[lang_code]/messages.php`
2. Adding the language to the available locales in the RoadmapController

## Asset Management

All images and assets are stored in the `public/images/` directory, organized by section.