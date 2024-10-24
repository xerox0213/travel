# Flight Management System

This project is a web application built with Laravel, designed to allow users to search for available flights between two airports and manage their favorite flights. It was developed under exam conditions, with a focus on delivering clean and efficient backend code using Laravel.

## Features

- **Flight Search**: Users can search for available flights between two airports based on departure and destination.
- **User Authentication**: The system includes secure user registration and login features.
- **Favorites Management**: Logged-in users can save flights to their favorites for future reference.
- **Secure and Optimized Backend**: The application focuses on providing a well-structured, secure, and efficient backend built with Laravel.

## Technologies Used

- **Backend**: Laravel 11
- **Frontend**: Blade templating engine, basic CSS for UI styling
- **Authentication**: Laravel’s built-in authentication system

## Installation

1. Clone the repository to your local machine:
   ```bash
   git clone https://github.com/xerox0213/travel
   ```

2. Navigate to the project directory:
   ```bash
   cd travel
   ```

3. Install the required dependencies using Composer:
   ```bash
   composer install
   ```

4. Set up your environment by copying the `.env.example` file to `.env` and adjusting the database credentials:
   ```bash
   cp .env.example .env
   ```

5. Generate the application key:
   ```bash
   php artisan key:generate
   ```

6. Run the migrations to create the necessary database tables:
   ```bash
   php artisan migrate
   ```

7. Run the development server:
   ```bash
   php artisan serve
   ```

## Acknowledgments

This project was developed as part of an exam. The focus was on demonstrating solid Laravel backend development skills within a limited time frame. Please note that the original database provided during the exam is not available, and as such, the project may not be fully functional without it. However, the codebase reflects the quality and functionality expected.
