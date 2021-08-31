<?php
// session_start();
$creaneDB = "CREATE DATABASE IF NOT EXISTS CountryCity";

$servername = "localhost";
$username = "root";
$password = "";
$database = "country_city";

$servername = $_SESSION['servername'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$database = $_SESSION['database'];

// Create connection
$connServer = new mysqli($servername, $username, $password);
// Check connection
if ($connServer->connect_error) {
  die("Connection failed: " . $connServer->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS " . $database;

if ($connServer->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$connServer->close();

$connDb = new mysqli($servername, $username, $password, $database);

function createTables($connDb)
{
  $countries = "CREATE TABLE IF NOT EXISTS `countries` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `country` varchar(64) NOT NULL,
    PRIMARY KEY (`id`)
    );";
  $result = $connDb->query($countries);

  echo $result == true ? "<p>create table countries</p>" : "<p>NO create table countries </p>";

  $cities = "CREATE TABLE IF NOT EXISTS `cities` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `city`varchar(64) NOT NULL,
    `countryid`int NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (countryid) REFERENCES countries (id)
    );";

  $result = $connDb->query($cities);

  echo $result == true ? "<p>create table cities</p>" : "<p>NO create table cities </p>";
 
}

// function insertToCountries($connDb)
// {
//   $result = $connDb->query("INSERT INTO `countries` (`country`) VALUES
//       ('Австралия'),
//       ('Великобритания'),
//       ('Германия'),
//       ('Грузия'),
//       ('Египет'),
//       ('Канада'),
//       ('Молдова'),
//       ('Польша'),
//       ('США'),
//       ('Турция'),
//       ('УКРАИНА');"
//       );
// }

$connDb->close();
