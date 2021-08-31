<?php
session_start();
$servername = $_SESSION['servername'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$database = $_SESSION['database'];

$country = $_GET['country'];
echo $country.": ";
$connDb = new mysqli($servername, $username, $password, $database);
$result = $connDb->query("SELECT DISTINCT city FROM cities WHERE `countryid` = (SELECT id FROM countries WHERE `country` = '".$country."');");

$array    = $result->fetch_all(MYSQLI_ASSOC);

foreach($array as $key => $city){
    echo " ".$array[$key]['city'];
}
$connDb->close();

?>