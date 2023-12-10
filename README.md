# Web Development Enrollment System with Laravel

This is a web enrollment system project developed in Laravel, a web application that allows managing student enrollment in web development courses. The system includes functionalities to manage users, students, courses, enrollments, teachers, and schedules.

## Requirements

Make sure you have the following requirements installed in your development environment:

- PHP >= 7.3
- Composer 2.6.6
- MySQL or any other database management system compatible with Laravel

## Project Setup

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/ruta-proyecto.git
   ```

2. **Install Dependencies:**
   ```bash
   composer install
   ```

3. **Configure the Environment File:**
   - Copy the `.env.example` file and rename it to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Open the `.env` file and configure the database connection and any other environment-specific settings.

4. **Run Migrations and Seed Data:**
   ```bash
   php artisan migrate --seed
   ```

5. **Start the Development Server:**
   ```bash
   php artisan serve
   ```

   The application will be available at [http://localhost:8000](http://localhost:8000).

## Database Structure

The system uses the following tables in the database:

- `users`: Stores user information, including roles.
- `students`: Detailed information about students.
- `courses`: Details of available courses.
- `enrollments`: Enrollments of students in courses.
- `teachers`: Information about teachers.
- `schedules`: Schedules of the courses.

## Using the System

1. Access the system through [http://localhost:8000](http://localhost:8000).
2. Log in with the credentials provided during the migration process.
3. Explore the different sections of the system to manage users, students, courses, enrollments, teachers, and schedules.

## Additional Notes

- Ensure your environment meets the requirements of the Laravel framework.
- Customize and extend the system according to your specific needs.
- For production environments, configure environment variables properly and use a more robust web server than `php artisan serve`.

Enjoy building your web development enrollment system with Laravel!

## Regarding the list of team members:
- Angel Patiño
- Brandon Bermello
- Laylin Bohorquez
- Nicolas Lara
