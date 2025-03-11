# HR Management Tool

## Description
This project is a test implementation of an HR management system using Laravel. It allows users to manage employee data and schedule future changes to employee records (e.g., address, job title, etc.). The system is designed to be scalable and user-friendly.

## Features
- **Employee Management**: CRUD operations for employee data (name, email, telephone, address, job title).
- **Future Changes**: Schedule changes to employee data that will take effect on a specific date.

## Technologies Used
- **Backend**: Laravel (PHP framework)
- **Frontend**: HTML, CSS, JavaScript, Bootstrap
- **Database**: MySQL
- **Version Control**: Git, GitHub

## Installation
Follow these steps to set up the project locally:

1. **Clone the repository**
   ```bash
   git clone https://github.com/OlaRefai/hrpuls-test.git
   cd hrpuls-test

2. **Install dependencies:**
    ```bash
    composer install
    npm install

3. **Set up the environment:**
- Copy `.env.example` to `.env` and update the database credentials:
    ```bash
    cp .env.example .env
- Generate an application key:
    ```bash
    php artisan key:generate
4. **Run migrations and seed the database:**
    ```bash
    php artisan migrate --seed
5. **Start the Laravel scheduler:**
    ```bash
    php artisan schedule:work
- This will run the scheduler locally and process any scheduled tasks (e.g., future employee data changes).
6. **Start the development server:**
    ```bash
    php artisan serve
7. **Access the application:**
Open your browser and navigate to http://localhost:8000.

