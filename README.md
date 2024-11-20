## About Project

It is a Laravel project that automatically updates data in the MySQL database from an XML file every minute, or allows manual updates with the press of a button.

## Requirements

- PHP >= 8.x
- Composer
- Node.js (which includes NPM)
- Laravel 10.x (or higher)
- MySQL 8.0 (or higher)

## Project Setup

To get started, follow these steps:

**1. Create the environment file:**
   - Copy the contents of `.env.example` to a new file named `.env`.
   - Update the database credentials in the `.env` file to match your MySQL setup:
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=your_database_name
     DB_USERNAME=your_username
     DB_PASSWORD=your_password
     ```

**2. Install dependencies:**
   - Run the following commands in your terminal:
     - `composer update`
     - `php artisan key:generate`
     - `npm install`

**3. Run migrations:**
   - Execute the migrations to set up the database tables:
     - `php artisan migrate`

**4. Run the project:**
   - Start the Laravel server by running:
     - `php artisan serve`
   - Start the development server with Vite by running:
     - `npm run dev`

**5. The project is now ready to use.**

## License

This project is licensed under the **Samuel Šteiner License**.

- **Free for personal and educational use.**
- **Not allowed for commercial use or redistribution as a part of any product.**
- **May not be used as a base for proprietary projects.**

If you'd like to contribute or use it for commercial purposes, please contact the author.

---

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
