# Livewire Poll App

A real-time polling application built with Laravel and Livewire. This application allows users to create polls and vote on them instantly without page reloads, demonstrating the power of the TALL stack ecosystem (Tailwind, Alpine.js, Laravel, Livewire).

## Features

- **Create Polls**: Users can create new polls with a question and multiple options.
- **Real-time Voting**: Votes are processed instantly using Livewire, updating results dynamically.
- **Dynamic Interfaces**: Smooth user experience without full page refreshes.
- **Validation**: Robust server-side validation for poll creation and voting.

## Tech Stack

- **Framework**: [Laravel 10.x](https://laravel.com/)
- **Frontend Interaction**: [Livewire 3.3](https://livewire.laravel.com/)
- **Language**: PHP 8.1+
- **Database**: MySQL
- **Asset Bundling**: Vite

## Installation and Setup

Follow these steps to set up the project locally:

1. **Clone the Repository**

    ```bash
    git clone https://github.com/aadhar41/livewire-poll-app.git
    cd livewire-poll-app
    ```

2. **Install PHP Dependencies**

    ```bash
    composer install
    ```

3. **Install Node Dependencies**

    ```bash
    npm install && npm run dev
    ```

4. **Environment Configuration**
    Copy the example environment file and generate the application key:

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5. **Database Configuration**
    - Create a database (e.g., `livewire_polls`) in your MySQL server.
    - Update the `.env` file with your database credentials:

        ```env
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=livewire_polls
        DB_USERNAME=root
        DB_PASSWORD=
        ```

6. **Run Migrations**

    ```bash
    php artisan migrate
    ```

7. **Start the Server**

    ```bash
    php artisan serve
    ```

    Access the application at `http://localhost:8000`.

## Usage

- Navigate to the home page to see existing polls or create a new one.
- Use the form to add a question and options (you can dynamically add/remove options).
- Click 'Vote' on any poll to see the results update in real-time.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
