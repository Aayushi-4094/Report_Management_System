
# Report_Management_System


This project demonstrates the creation of a simple HTML form using CSS, HTML, and PHP. The form allows users to submit their details, including a health report in PDF format. The user details and PDF file are then inserted into a MySQL database using PHP. Additionally, a separate PHP code is provided to fetch and display the user's health report based on their email ID.



## Features

User-friendly HTML form with fields for name, age, weight, email ID, and health report upload.

CSS styling for an attractive and responsive form layout.

PHP code for inserting user details and PDF file into a MySQL database.

PHP code for fetching and displaying the user's health report based on their email ID.



## Prerequisites

To run this project, you will need the following:

XAMPP server (or any other web server software that supports PHP and MySQL)

MySQL database

Web browser



## Getting Started

Download and install XAMPP server from https://www.apachefriends.org.

Clone or download the project files and place them in the appropriate directory (htdocs folder in XAMPP).

Start the XAMPP control panel and ensure that Apache and MySQL services are running.

Open your web browser and type localhost/index.php to access the form.



## Project Structure

index.php: HTML form with CSS styling.

connection.php: PHP code to establish a connection between the frontend and the backend (MySQL database).

display.php: PHP code to fetch and display the user's health report based on their email ID.



## Database Setup

Open phpMyAdmin by typing localhost/phpmyadmin in your web browser.

Create a new database and name it form_data.

Within the form_data database, create a table named users with the following columns:

id (INT, auto-increment, primary key)

name (VARCHAR)

age (INT)

weight (FLOAT)

email (VARCHAR)

health_report (VARCHAR)

Adjust the database connection details (host, username, password) in connection.php to match your database configuration.



## Usage

Open your web browser and type localhost/index.php to access the form.

Fill in the required fields (Name, Age, Weight, Email ID) and select a health report file (PDF format).

Click the "Submit" button to submit the form.

The user details and the health report file will be inserted into the users table in the form_data database.

To view the stored data, open your web browser and type localhost/display.php.

Enter the user's email ID in the input field and click the "Submit" button.

The health report associated with the provided email ID will be displayed.



## Troubleshooting

Ensure that you have a working internet connection.

Verify that the XAMPP services (Apache and MySQL) are running properly.

Check the database connection details in connection.php and make sure they are correct.



### **Note**
**This project is for demonstration purposes only and may not adhere to all security best practices. It is recommended to implement proper security measures before deploying it in a production environment.Feel free to modify and customize the project according to your requirements.**

### **Disclaimer: Use this code at your own risk. Make sure to review and test it thoroughly before deploying it in a production environment. I am not responsible for any damage or loss caused by the usage of this code.**

