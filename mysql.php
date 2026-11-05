<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "5tia";

// Połączenie z serwerem MySQL
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";

// Tworzenie bazy danych (jeśli nie istnieje)
$sql = "CREATE DATABASE IF NOT EXISTS `$database` 
        CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn) . "<br>";
}

// Wybór bazy danych
if (mysqli_select_db($conn, $database)) {
    echo "Database selected successfully<br>";
} else {
    echo "Error selecting database: " . mysqli_error($conn) . "<br>";
}

$sql= "CREATE TABLE IF NOT EXISTS `users` (
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `first_name` VARCHAR(30) NOT NULL,
    `lastname` VARCHAR(30) NOT NULL,
    `email` VARCHAR(50) ,
    `reg_date` TIMESTAMP DEFAULT 
    CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
if (mysqli_query($conn, $sql)) {
    echo "Table 'users' created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}
$sql="insert into users (first_name, lastname, email) values ('John', 'Doe', 'john.doe@example.com'),
('Jane', 'Smith', 'jane.smith@example.com'),
('Alice', 'Johnson', 'alice.johnson@example.com'),
('Bob', 'Brown', 'bob.brown@example.com'),
('Charlie', 'Davis', 'charlie.davis@example.com'),
('Emily', 'Wilson', 'emily.wilson@example.com'),
('Frank', 'Miller', 'frank.miller@example.com'),
('Grace', 'Taylor', 'grace.taylor@example.com');";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . mysqli_error($conn) . "<br>";
}
?>