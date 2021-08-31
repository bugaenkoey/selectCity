<?php
session_start();
$servername = $_SESSION['servername'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$database = $_SESSION['database'];

$country = $_GET['country'];
// echo $country.": ";
$connDb = new mysqli($servername, $username, $password, $database);
$result = $connDb->query("SELECT DISTINCT city FROM cities WHERE `countryid` = (SELECT id FROM countries WHERE `country` = '".$country."');");

$array    = $result->fetch_all(MYSQLI_ASSOC);

// foreach($array as $key => $city){
//     echo " ".$array[$key]['city'];
// }
$connDb->close();

?>

<table border="1">
    <thead>
        <tr>
            <th><?php echo $country ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($array as $key => $city) :  ?>
            <tr>
                <td><?php echo $array[$key]['city']; ?></td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>