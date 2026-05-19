# SkillTrack LEMS

**SkillTrack LEMS** is a Laravel-based learner and employee management system for QR attendance, role-based access, OTP-secured registration, email announcements, and audit logs.

> Simple, professional, and responsive learner/employee management for schools and training teams.

---

## Features

- QR code-based learner attendance logging
- Role-based access control for Admin, Employee, and Learner users
- Email announcement system with filtering by users, grade level, and section
- OTP-secured registration flow
- Dashboard and user management
- Responsive and mobile-friendly screens
- Laravel 12 codebase with Breeze authentication and Spatie permissions

---

## Tech Stack

- Laravel 12
- PHP 8.2+
- MySQL
- Tailwind CSS
- Bootstrap 5
- Spatie Laravel Permission
- Laravel Breeze
- SweetAlert2

---

## Installation

```bash
git clone https://github.com/CodeByMan
cd skilltrack-lems
composer install
npm install
copy .env.example .env
php artisan key:generate
```

Create a MySQL database in phpMyAdmin:

```sql
CREATE DATABASE skilltrack_lems;
```

Then run:

```bash
php artisan migrate:fresh --seed
npm run dev
php artisan serve
```

For production assets:

```bash
npm run build
```

---

## Demo Credentials

| Role | Email | Password |
|---|---|---|
| Admin | `admin@skilltrack.test` | `password` |
| Employee | `employee@skilltrack.test` | `password` |
| Learner | `learner@skilltrack.test` | `password` |

---

## Screenshots

### Landing Page
![Landing Page](public/screenshots/landing_page.png)

### Login Page
![Login Page](public/screenshots/login.png)

### Register Page
![Register Page](public/screenshots/register.png)

### Admin Dashboard
![Admin Dashboard](public/screenshots/admin_dashboard.png)

---

## Author

**Muhammad Ali Nawaz**  
GitHub: [https://github.com/CodeByMan](https://github.com/CodeByMan)

---

## License

This project is open-sourced software licensed under the MIT license.
