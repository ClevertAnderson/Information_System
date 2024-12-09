# User Dashboard Information System

## Overview
This is a simple user dashboard information system that allows users to log in, view a personalized dashboard, and explore a collection of products (in this case, shoes). It includes user authentication (login and session management) and dynamic product display. The system is built using PHP, HTML, CSS, and is backed by a MySQL database.

## Features
- **User Authentication**: Users can log in with their credentials and access a personalized dashboard.
- **Personalized Dashboard**: After logging in, users can see their dashboard with a list of products (shoes) that they can explore.
- **Navigation**: The system includes a navigation bar that allows users to navigate to different pages like "Home", "Shop", "About", and "Contact".
- **Logout**: Users can log out from their account securely.

## Technologies Used
- **PHP**: Server-side scripting for handling the user authentication and dashboard functionality.
- **MySQL**: Used for storing user data (e.g., usernames, passwords, emails) in the database.
- **HTML**: Structure of the web pages.
- **CSS**: Styling for the front-end interface.
- **Session Management**: To track the user’s login status and personal data.

## File Structure
The project consists of the following files and directories:


## Installation

1. Clone or download the project to your local machine.
   
2. Set up a local development environment (e.g., using XAMPP or WAMP).

3. Create a new database in MySQL, then import the `users.sql` file to create the necessary tables.

    Example SQL command:
    ```sql
    CREATE DATABASE user_system;
    USE user_system;
    SOURCE users.sql;
    ```

4. Edit the database connection in the `user_login.php` file (if necessary), where the connection parameters (username, password, database name) are defined.

5. Launch the project by opening `index.php` in your browser.

## How to Use

1. **Sign Up**: Go to the signup page (`signup.php`) to create a new account. Provide a username, email, and password.
2. **Login**: After signing up, you can log in by navigating to the `login.php` page and entering your credentials.
3. **Dashboard**: Once logged in, you will be redirected to the `dashboard.php` page, where you can view your personalized product collection.
4. **Logout**: To log out, click the "Logout" button in the navigation bar, which will end your session and redirect you back to the `index.php` page.

## Database

The project uses a MySQL database named `user_system` with a table called `users`. Below is the structure of the `users` table:

### `users` Table Structure
```sql
CREATE TABLE `users` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(50) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

Future Improvements
Password Reset: Implement functionality for users to reset their passwords if they forget them.
Admin Dashboard: Add an admin section to manage users and products.
Product Management: Enable the addition, deletion, and editing of products in the shop.
Security Enhancements: Improve session management and add additional security layers, such as CSRF protection.
Contributing
If you'd like to contribute to this project, please fork the repository and submit a pull request with your changes.

License
This project is open source and available under the MIT License. See the LICENSE file for more information.

