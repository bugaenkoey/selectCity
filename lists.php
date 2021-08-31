<?php
$servername = $_SESSION['servername'];
$username   = $_SESSION['username'];
$password   = $_SESSION['password'];
$database   = $_SESSION['database'];

$connDb = new mysqli($servername, $username, $password, $database);

$countries = select($connDb);

function select($connDb)
{
    $sqlQuery = "SELECT country FROM countries ;";
    $result   = $connDb->query($sqlQuery);
    return $result->fetch_all(MYSQLI_ASSOC);
}

?>
<form>
    <select name='countri' onchange='showCities (this.value)'>
        <option selected disabled>Select countri</option>
        <?php foreach ($countries as $key => $value) : ?>
            <option value="<?php echo $countries[$key]['country'] ?>"> <?php echo $countries[$key]['country'] ?> </option>;
        <?php endforeach ?>
    </select>
<form>

<script>
    function showCities(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            // xmlhttp.open("GET","getCities.php?country="+str,true);
            xmlhttp.open("GET", "getCities.php?country=" + str);
            xmlhttp.send();
        }
    }
</script>
<div id="txtHint"></div>