group-5-22RP02865-22RP02363-hospital
Hospital Management System

A Laravel-based hospital management system that focuses on doctor management and user authentication. This system allows hospitals to efficiently manage their doctors' information and appointments.

Features

Authentication System
- User login and registration
- Password reset functionality
- Secure session management
- Protected routes

Doctor Management
- Doctor registration with detailed information
- Doctor profile viewing and editing
- List all doctors with their details
- Delete doctor records
- Doctor dashboard

Technical Requirements

- PHP >= 8.1
- MySQL >= 5.7
- Composer
- Node.js & NPM
- XAMPP (for local development)

Installation

1. Clone the project to your XAMPP htdocs folder:
```bash
cd C:/xampp/htdocs
git clone [repository-url] hospital
```

2. Install PHP dependencies:
```bash
cd hospital
composer install
```

3. Create and configure .env file:
```bash
cp .env.example .env
```

4. Configure your database in .env:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hospital
DB_USERNAME=root
DB_PASSWORD=
```

5. Generate application key:
```bash
php artisan key:generate
```

6. Run migrations:
```bash
php artisan migrate
```

7. Start the development server:
```bash
php artisan serve
```

Project Structure

```
hospital/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── DocterController.php
│   │       └── Auth/
│   │           ├── AuthenticatedSessionController.php
│   │           ├── RegisteredUserController.php
│   │           ├── PasswordResetLinkController.php
│   │           └── NewPasswordController.php
│   └── Models/
│       └── docter.php
├── resources/
│   └── views/
│       └── docters/
│           ├── index.blade.php
│           ├── edit.blade.php
│           └── retrieve.blade.php
└── routes/
    └── web.php
```
 Available Routes

Authentication Routes
- `/` - Login page
- `/register` - User registration
- `/forgot-password` - Password reset request
- `/reset-password` - Password reset form

Doctor Management Routes
- `/dashboard` - Doctor dashboard
- `/docter_form` - Doctor registration form
- `/showall` - List all doctors
- `/edit/{docter}/modify` - Edit doctor information

Database Schema

Doctors Table
```sql
CREATE TABLE docters (
    id bigint unsigned NOT NULL AUTO_INCREMENT,
    names varchar(255) NOT NULL,
    email varchar(255) NOT NULL UNIQUE,
    phone varchar(20) NOT NULL,
    address text NOT NULL,
    created_at timestamp NULL DEFAULT NULL,
    updated_at timestamp NULL DEFAULT NULL,
    PRIMARY KEY (id)
);
```

Features Implementation

Doctor Registration
- Collects doctor's basic information
- Validates input data
- Stores information securely
- Provides success/error feedback

 Doctor Management
- View all registered doctors
- Edit doctor information
- Delete doctor records
- Search and filter capabilities

User Interface
- Clean and responsive design
- Bootstrap 5 styling
- Form validation
- Success/error messages

 Security Features

- CSRF Protection
- Password Hashing
- Input Validation
- Session Security
- Protected Routes

 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

 License

This project is licensed under the MIT License.

Support

For support, please create an issue in the repository or contact the development team. 
