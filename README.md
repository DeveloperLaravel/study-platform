# 📘 Laravel Study Platform
A modern educational platform built with Laravel, designed to simplify learning programming and delivering structured educational content through a clean, responsive, and user-friendly interface.

The project fully supports Arabic (RTL) layouts, Dark / Light Mode, and provides a RESTful API ready for mobile applications such as Flutter.

## 🚀 Features 

   - ✅ Fully Arabic interface (RTL support)

   - 🌙 Dark Mode & Light Mode with saved preference

   - 🎨 Modern UI using Tailwind CSS

   - 🧩 Clean architecture with Blade Components

   - 🧭 Responsive and dynamic Navbar

   - 📱 Mobile-friendly design

   - 🔐 Authentication system (Login & Register)

   - 🔑 API authentication using Laravel Sanctum

   - 📡 REST API ready for mobile apps

   - 🧑‍💻 Clean, scalable, and maintainable codebase


   ## 🛠️ Technologies Used

   - Laravel (Backend & API)

   - Blade (Frontend templating)

   - Tailwind CSS (Styling)

   - Alpine.js (Interactivity & Dark Mode)

   - Laravel Sanctum (API Authentication)

   - MySQL (Database)

   - Vite (Asset bundler)


   ### 📂 Project Structure (Overview)

```
app/
 └──Exceptions/Handler.php
    ├── 
    Http/
      └── Controllers/
        └── Api/
            └── AuthController.php
    └── Providers/AppServiceProvider.php
resources/
 └── views/
     ├── components/
     │   └── header/
     │       ├── navbar.blade.php
     │       └── footer.blade.php
     ├── layouts/
     │   └── app.blade.php
     └── pages/

routes/
 ├── web.php
 ├── auth.php
 └── api.php

lang/
 └── ar/

```

## 🔐 API Authentication
🔹 Login

POST /api/login
```
{
  "email": "user@example.com",
  "password": "password"
}


```

🔹 Response

```
{
  "token": "API_TOKEN",
  "user": {
    "id": 1,
    "name": "User Name",
    "email": "user@example.com"
  }
}


```


🔹 Register

POST /api/register

```
{
  "name": "User Name",
  "email": "user@example.com",
  "password": "password",
  "password_confirmation": "password"
}
```

### 🌙 Dark Mode

   - Controlled using Alpine.js

   - User preference is stored in localStorage

   - Automatically applied on page reload

   ### 📦 Installation & Setup

```
git clone https://github.com/your-repo/laravel-study-platform.git
cd laravel-study-platform

composer install
npm install
npm run build

cp .env.example .env
php artisan key:generate

php artisan migrate
php artisan serve


```


#### 👤 Personal Introduction

✍️ About the Developer

I am a developer passionate about teaching programming and building modern applications using Laravel and Flutter.

My goal is to create high-quality Arabic educational content that helps learners understand programming concepts in a clear, practical, and structured way.

   - I believe that knowledge becomes more powerful when shared,
   - and that programming is not just code, but a tool to build the future