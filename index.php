<?php
session_start();

$_SESSION['servername']="localhost";
$_SESSION['username']="root";
$_SESSION['password']="";
$_SESSION['database']="CountryCity";

include_once("createTables.php");
require("lists.php");

?>