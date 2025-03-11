# HR Management Tool

## Description
This project is a test implementation of an HR management system using Laravel. It allows users to manage employee data and schedule future changes to employee records (e.g., address, job title, etc.). The system is designed to be scalable and user-friendly.

## Features
- **Employee Management**: CRUD operations for employee data (name, email, telephone, address, job title).
- **Future Changes**: Schedule changes to employee data that will take effect on a specific date.

## Technologies Used
- **Backend**: Laravel 11 (PHP framework)
- **Frontend**: HTML, CSS, JavaScript, Bootstrap
- **Database**: MySQL
- **Version Control**: Git, GitHub

## Installation
Follow these steps to set up the project with Docker:

1. **Clone the repository**
   ```bash
   git clone https://github.com/OlaRefai/hrpuls-test.git
   cd hrpuls-test

2. **Install Docker and Docker Compose** if you haven't already:
    -   Follow the instructions on the [Docker website](https://www.docker.com/get-started/).

3. **Build and start the containers**
    ```bash
    docker-compose up -d --build
4. **Set up the environment:**
    - Copy `.env.example` to `.env` and update the database credentials:
    ```bash
    cp .env.example .env
    ```
    - Generate an application key:
    ```bash
    docker exec -it laravel_app php artisan key:generate
5. **Run migrations and seed the database inside the Docker container:**
    ```bash
    docker exec -it laravel_app php artisan migrate --seed
6. **Start the Laravel scheduler inside the Docker container:**
    ```bash
    docker exec -it laravel_app php artisan schedule:work
    ```
    - This will run the scheduler inside the Docker container and process any scheduled tasks (e.g., future employee data changes).
7. **Start the development server:**
    - Open your browser and navigate to http://localhost:8000.

