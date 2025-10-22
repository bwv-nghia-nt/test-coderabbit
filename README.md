# intern-php-source

## Overview

This project is a full-stack application built with Laravel. It includes an backend handler with PHP and client-side integration with javascript.

## Technology Stack

### Backend

-   **Laravel**: Web application framework with expressive, elegant syntax.
-   **MySQL**: A relational database management system.

### Frontend

-   **jQuery**: A fast, small, and feature-rich JavaScript library.
-   **Tabler.io**: HTML Dashboard UI Kit built on Bootstrap.

## Project Structure

View more at [Directory Structure](https://laravel.com/docs/12.x/structure)

### Installation

1. Setup

Clone this repository:

```
git clone <repository-url>
cd intern-php-source
```

2. Install dependencies for backend

```
composer i
```

3. Install dependencies for frontend

```
npm i
```

4. Set up the database
   To configure the database connection, create or update the `.env` file in the root directory with the following variables

| Variable      | Description                               | Example                  |
| ------------- | ----------------------------------------- | ------------------------ |
| `DB_USERNAME` | The username for your database connection | `your_database_user`     |
| `DB_PASSWORD` | The password for your database user       | `your_database_password` |
| `DB_HOST`     | The host where your database is running   | `localhost`              |
| `DB_PORT`     | The port where your database is running   | `3306`                   |
| `DB_DATABASE` | The name of your database                 | `your_database_name`     |

Example `.env` file:

```env
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=your_database_name
```

5. Run the database migrations

To apply the database migrations, run the following command:

```
php artisan migrate
```

Run seeder:

```
php artisan db:seed
```

6. Generate `APP_KEY`

```
php artisan key:generate
```

7. Run project

```
// Start PHP’s built-in server
php artisan serve

// Run the Vite development server
npm run dev
```

### Format code

```
// Check lint errors
composer lint

// Check & fix lint error
composer lint-and-fix
```
