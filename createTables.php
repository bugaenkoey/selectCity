<?php
session_start();
// $creaneDB = "CREATE DATABASE [IF NOT EXISTS] CountryCity";

$servername = "localhost";
$username = "root";
$password = "";
$database = "CountryCity";

// Create connection
$connServer = new mysqli($servername, $username, $password);
// Check connection
if ($connServer->connect_error) {
  die("Connection failed: " . $connServer->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS ". $database;
// echo $sql;
if ($connServer->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$connServer->close();

$connDb = new mysqli($servername, $username, $password, $database);

createTables($connDb);

function createTables($connDb)
{

/*Создайте в базе данных две связанные таблицы Countries и
Cities:
Countries
(
id int, //primary key
country varchar(64) //country name
)и
Cities
(
id int, //primary key
city varchar(64), //city name
countryid int //foreign key for relationship with Countries
)
*/

$countries="CREATE TABLE IF NOT EXISTS `countries` (
    `id` int,
    `country` varchar(64) NOT NULL,
    PRIMARY KEY (`id`)
    );";
$result = $connDb->query($countries);

echo $result==true? "<p>create table countries</p>":"<p>NO create table countries </p>";

$cities = "CREATE TABLE IF NOT EXISTS `cities` (
    `id`int,
    `city`varchar(64) NOT NULL,
    `countryid`int NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (countryid) REFERENCES countries (id)
    );";

$result = $connDb->query($cities);

echo $result==true? "<p>create table cities</p>":"<p>NO create table cities </p>";

$connDb->close();
}
