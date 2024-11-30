# Laravel 11 CRUD OPERATION

A simple CRUD (Create, Read, Update, Delete) application built with Laravel 11. This project allows users to manage products with features such as viewing the product list, creating a product, editing a product, and deleting a product. The products can include images that are uploaded and displayed along with the product information.

## Features

- **Product List**: Displays a list of all products with their ID, SKU, Name, Price, and Creation Date.
- **Create Product**: Allows users to create new products with the name, SKU, price, description, and an image upload.
- **Edit Product**: Enables editing of existing products with pre-filled data and image update.
- **Delete Product**: Provides functionality to delete a product.
- **Image Upload**: Allows images to be uploaded and displayed for each product.

## Prerequisites

Before running this project, make sure you have the following installed:

- [PHP 8.1 or higher](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org/)
- [Laravel 11](https://laravel.com/docs/11.x)
- [MySQL](https://www.mysql.com/)

## Installation

1. **Clone the repository**:

 ```
   https://github.com/JahidRana/Laravel-11-CRUD.git
   cd Laravel-11-CRUD
 ```
2. **Install Dependencies**:
Next, install the required PHP dependencies using Composer. Run the following command inside the project directory:

```
   composer install
```
This will download all the necessary packages for your Laravel application.


3. **Set Up Environment File**:
Copy the .env.example file to .env to create the environment configuration file. You can do this by running:

```
 cp .env.example .env
```

4. **Generate Application Key**:

Laravel requires an application key, which can be generated using the Artisan command:
 
```
  php artisan key:generate
```

This will set the APP_KEY in your .env file.

5. **Set Up Database**:

Create a new MySQL database for the project. You can do this via the MySQL shell or a GUI like phpMyAdmin.

Open the .env file and update the following database configurations with your MySQL database details:

```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
```

 6. **Run Database Migrations**:

To create the necessary tables for the project, run the Laravel migrations:  
```
 php artisan migrate
```
7. **Run the Application**:
Finally, start the Laravel development server by running:

```
 php artisan serve
```
The application should now be running at http://localhost:8000. 



