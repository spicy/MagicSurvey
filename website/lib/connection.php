<?php
$server_username = "root";
$server_password = "";
$server_host = "localhost";
$database = 'cpsc332-magic survey';

try {
    $conn = new PDO("mysql:host=$server_host;dbname=$database;charset=utf8mb4", $server_username, $server_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}


// CREATE DATABASE IF NOT EXISTS `cpsc332-magic survey` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
// USE `cpsc332-magic survey`;

// CREATE TABLE IF NOT EXISTS `users` (
//   `id` int(11) NOT NULL AUTO_INCREMENT,
//   `username` varchar(30) NOT NULL,
//   `password` varchar(30) NOT NULL,
//   `fistname` varchar(255) NOT NULL,
//   `lastname` varchar(255) NOT NULL,
//   `phone` varchar(255) NOT NULL,
//   `email` varchar(255) NOT NULL,
//   PRIMARY KEY (`id`)
// ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

