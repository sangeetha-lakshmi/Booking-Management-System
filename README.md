<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Booking Management System

This project is developed as part of **Interview Assignment for GYSZ Technologies**.  
It is a simple **Booking Management Web Application** built using **Laravel 10**, **MySQL**, and **Tailwind CSS**, implementing full **CRUD operations** and **authentication** via **Laravel Breeze**.

---

## 📘 Project Overview

The application allows users to:
- Add new bookings.
- View all bookings with pagination and search.
- Edit or delete existing bookings.
- Filter bookings by name or email.
- Manage booking statuses such as *Pending*, *Confirmed*, and *Cancelled*.
- Access the system securely through authentication.

---

## ⚙️ Tech Stack

| Category | Technologies Used |
|-----------|-------------------|
| **Backend** | Laravel 10 (PHP Framework) |
| **Frontend** | Blade Templates with Tailwind CSS |
| **Database** | MySQL |
| **Authentication** | Laravel Breeze |
| **Version Control** | Git & GitHub |
| **Hosting (Planned)** | AWS EC2 *(skipped due to payment verification issue)* |

---

## 🧩 Folder Structure

```
booking-app/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── BookingController.php
│   │   └── Requests/
│   │       └── BookingRequest.php
│   └── Models/
│       └── Booking.php
├── database/
│   └── migrations/
│       └── xxxx_create_bookings_table.php
├── resources/
│   └── views/
│       └── bookings/
│           ├── index.blade.php
│           ├── create.blade.php
│           └── edit.blade.php
├── routes/
│   └── web.php
└── README.md
```

---

## 🚀 Features Implemented

✅ User authentication (Login/Register) using Laravel Breeze  
✅ CRUD operations for bookings  
✅ Search by name or email  
✅ Status-based color badges (Pending, Confirmed, Cancelled)  
✅ Responsive design with Tailwind CSS  
✅ Pagination for bookings list  
✅ Validation via Form Request (`BookingRequest`)  

---

## 🧠 How to Run Locally

### 1. Clone the Repository
```bash
git clone https://github.com/yourusername/booking-app.git
cd booking-app bash
```
### 2. Install Dependencies
```bash
composer install
npm install
```
### 3. Copy and Configure Environment File
```bash
cp .env.example .env
php artisan key:generate
```
Then open .env and update:
```bash
DB_DATABASE=booking_app
DB_USERNAME=root
DB_PASSWORD=yourpassword
```
### 4. Run Database Migrations
```bash
php artisan migrate
```
### 5. Build and Run the Project
```bash
npm run dev
php artisan serve
```
Then open your browser and visit 👉 http://localhost:80

## Features

User authentication via Laravel Breeze

Add, edit, view, and delete bookings

Search bookings by name or email

Status color tags (Pending / Confirmed / Cancelled)

Responsive Tailwind CSS design

Pagination and validation included
---
## ⚙️ Tech Stack
| Layer             | Technology                                            |
| ----------------- | ----------------------------------------------------- |
| Backend           | Laravel 10 (PHP Framework)                            |
| Frontend          | Tailwind CSS                                          |
| Database          | MySQL                                                 |
| Authentication    | Laravel Breeze                                        |
| Version Control   | Git & GitHub                                          |
| Hosting (Planned) | AWS EC2 *(skipped due to payment verification issue)* |

## 👩‍💻 Test Credentials
Email: admin@example.com
Password: password123

## Developer Information
Name: Sangeetha Lakshmi  
Course: B.Tech – Computer Science and Engineering  
College: Achariya College of Engineering Technology  
Mail: sangeethalachu0@gmail.com  
