# Qorban Participant Registration System

A simple web-based CRUD system developed using Laravel for managing Qorban participant registration from BICS 2306 Group 1.

## Team Members

*   MUHAMMAD AMIRUL IZZAT BIN MAHIDZAR - 2320619
*   RADIN AYMAN NABIL BIN RADIN ARIFF TAQUIDDIN - 2322361
*   MUHAMMAD MUIZZ BIN IZARUDDIN - 2422559
*   MUHAMMAD ZHAFRI BIN NORHISHAM - 2412737
*   HAMMAD - 2211673
*   MUHAMMAD YAZID BIN MOHD YASIN - 2422887

## Technologies Used

- Laravel
- PHP (Requires Version 8.5.7)
- MySQL
- Bootstrap
- Laragon
- GitHub

## Project Setup

**Important:** Ensure you are using PHP version 8.5.7 before starting.

### Clone Repository
```bash
git clone <repo-url>
```

### Install Dependencies
```bash
composer install
```

### Create Environment File
```bash
cp .env.example .env
```

### Generate Application Key
```bash
php artisan key:generate
```

### Configure Database
Update `.env` file:
```env
DB_DATABASE=qorban_system
DB_USERNAME=root
DB_PASSWORD=
```

### Run Migration
```bash
php artisan migrate
```

### Run Server
```bash
php artisan serve
```

##API Testing Guide
Because the backend is built as a RESTful API, you can test the CRUD (Create, Read, Update, Delete) operations before using the frontend. Use PowerShell commands with Invoke-RestMethod to test the API endpoints.

## Important Folders

| Folder | Purpose |
|---|---|
| app/Http/Controllers | Backend logic |
| resources/views | Frontend pages |
| routes | Web routes |
| database/migrations | Database structure |

## GitHub Workflow

Before starting work:
```bash
git pull
```

After making changes:
```bash
git add .
git commit -m "describe changes"
git push
```

Do not edit the same file simultaneously.

## Team Responsibilities

- Report Compilation & Team Leader: Muhammad Amirul Izzat
- Class Diagram Designer: Radin Ayman Nabil
- Laravel Setup & Environment Technician: Hammad
- Backend Developer: Muhammad Yazid
- Frontend Developer: Muhammad Muizz
- Tester & Documentation Support: Muhammad Zhafri

## Current Progress

- [x] Assignment 1 completed
- [x] Database migration
- [x] CRUD implementation
- [x] Frontend UI
