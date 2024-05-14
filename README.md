# Simple Create, Read, Update, Delete (CRUD) in PHP & MySQL

This is a basic CRUD (Create, Read, Update, Delete) system implemented in PHP and MySQL. It allows you to add, edit, delete, and view user data.

## Prerequisites

Before running this project, ensure you have the following installed:

- PHP
- MySQL
- A web server (e.g., Apache)

## Setup

1. Import the `database.sql` file to create the necessary database and tables.
2. Configure the database connection in `dbConnection.php` by updating the following variables:
    - `$databaseHost`: Hostname of your MySQL server
    - `$databaseName`: Name of the database
    - `$databaseUsername`: MySQL username
    - `$databasePassword`: MySQL password
3. Place all PHP files (`add.php`, `addAction.php`, `delete.php`, `edit.php`, `editAction.php`, `index.php`) and `dbConnection.php` in your web server's directory.

## Usage

- Access `index.php` through your web browser to view the list of users.
- From the homepage, you can:
    - **Add New Data**: Add a new user to the database.
    - **Edit**: Edit existing user data.
    - **Delete**: Delete a user from the database.

## Files

- `add.php`: Form to add new user data.
- `addAction.php`: PHP script to handle adding user data.
- `delete.php`: PHP script to delete user data.
- `edit.php`: Form to edit existing user data.
- `editAction.php`: PHP script to handle updating user data.
- `index.php`: Homepage displaying a list of users.
- `dbConnection.php`: PHP script to establish a connection with the MySQL database.

## Note

- This project uses MySQLi for database operations.
- It is recommended to sanitize and validate user inputs before performing database operations to prevent SQL injection and other security vulnerabilities.
