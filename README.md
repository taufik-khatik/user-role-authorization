# Laravel User Role Authorization Project

This is a Laravel application focused on user role authorization using role-based access control (RBAC) with MySQL database.

## Description

The project includes functionality for managing users with different roles (admin and regular user). Admin users have access to admin-only routes, while regular users do not.

## Features

- User authentication and registration
- Role-based access control (RBAC)
- User management (create, edit, delete) with role selection
- Dashboard for admin and regular users

## Test Cases

1. **Admin Access Control:**
   - Login as an admin user and attempt to access an admin-only route.
   - Expected Result: Access granted.

2. **Regular User Access Control:**
   - Login as a regular user and attempt to access an admin-only route.
   - Expected Result: Access denied and redirected to the home page.

3. **Middleware Functionality:**
   - Verify the role of the user by attempting to access routes with different middleware settings.
   - Expected Result:
     - Admin user can access admin-only routes.
     - Regular user is redirected or denied access to admin-only routes.

4. **Seeder and Test Data:**
   - Use seeders to populate the database with test data for admin and regular users.
   - Test user creation, role assignment, and login functionality.

5. **Additional Test Cases:**
   - Test user edit and update functionality.
   - Test user deletion with proper role-based authorization.
   - Test for validation rules on user inputs (name, email, password, role).

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/laravel-user-role.git
   ```

2. Navigate to the project directory:
   ```bash
   cd laravel-user-role
   ```

3. Install dependencies:
   ```bash
   composer install
   ```  

4. Set up the environment file:
   ```bash
   cp .env.example .env
   ```
5. Generate application key:
   ```bash
   php artisan key:generate
   ```

6. Create a MySQL database and update .env file with database credentials.
Run database migrations:
   ```bash
   php artisan migrate
   ```

7. Seed the database with test data:
   ```bash
   php artisan db:seed --class=RolesSeeder
   ```

8. Start the development server:
   ```bash
   php artisan serve
   ```

8. Open http://localhost:8000 in your browser to view the application.


## Usage
Register as a new user or use the provided test data to log in.
Explore the user management features as an admin user (create, edit, delete users with different roles).
Test role-based access control by logging in with different user roles and accessing appropriate routes.


## Test Data

To facilitate testing and development, here are the details for the admin user:

Admin User:
- Username: admin@test.com
- Password: [123456789]

Regular User:
- Username: user@test.com
- Password: [123456789]


## Testing

To run the automated tests for this Laravel application, follow these steps:

1. Make sure your development environment is set up correctly and all dependencies are installed.

2. Open your terminal or command prompt and navigate to your Laravel project directory.

3. Run the PHPUnit test suite using the following command:
   ```bash
   php artisan test
   ```

4. Verify that the test suite passed all the tests.


## Dependencies 

Laravel version 10.0.0


## Author
[Taufik Khatik](https://github.com/taufik-khatik)


## License
This project is licensed under the MIT License.
