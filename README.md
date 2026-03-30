# Portfolio Website (Laravel)

This repository contains a personal portfolio website built with Laravel.

## Features

- Single-page portfolio layout
- Sections for About, Skills, Projects, Education, Query, and Contact
- Static assets served from the public directory
- Blade template rendering through Laravel routes

## Tech Stack

- PHP (Laravel)
- Blade templating
- HTML and CSS
- MySQL (available for future form persistence)

## Project Structure

- `resources/views/portfolio.blade.php` : Main portfolio page
- `public/css/style.css` : Main stylesheet
- `public/assets/` : Images and icons
- `routes/web.php` : Web routes

## Requirements

- PHP 8.x
- Composer
- MySQL (if database features are used)

## Setup

1. Install dependencies
	composer install

2. Copy environment file
	copy .env.example .env

3. Generate app key
	php artisan key:generate

4. Configure database in .env (optional if not using DB features yet)

5. Start the application
	php artisan serve

6. Open in browser
	http://127.0.0.1:8000

## Notes About Assets

- Keep CSS in `public/css`
- Keep images/icons in `public/assets`
- In Blade, use Laravel URL helpers for assets so paths work across environments

## Future Improvements

- Store query/contact submissions in database
- Add admin panel to review messages
- Add form validation feedback and flash messages
- Improve SEO metadata and social preview tags

## License

This project is for personal portfolio use.
