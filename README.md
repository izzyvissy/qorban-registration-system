# Qorban Participant Registration System

A simple web-based CRUD system developed using Laravel for managing Qorban participant registration from BICS 2306 Group 1.

## Team Members

- Izzat 
- Hammad 
- Raden 
- Muizz - 
- Zhafri
- Yazid

## Technologies Used

- Laravel
- PHP
- MySQL
- Bootstrap
- Laragon
- GitHub

## Project Setup

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

- Backend: Name
- Frontend: Name
- Database: Name
- Documentation: Name

## Current Progress

- [x] Assignment 1 completed
- [ ] Database migration
- [ ] CRUD implementation
- [ ] Frontend UI