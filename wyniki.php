<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Wyniki ankiety</title>
</head>
<body>
<?php


function koniec(){
    $adres = $_SERVER["REMOTE_ADDR"];
    echo "<br />Twój adres IP to $adres ";
    echo '<br /><a href="form_php.php">Wróć do wypełniania ankiety</a>';

    die();
}

$dane = array("imie" => $_POST["imie"],
    "nazwisko" => $_POST["nazwisko"],
    "wiek" => $_POST["wiek"],
    "telefon" => $_POST["telefon"],
    "email" => $_POST["email"]);















if(isset($_POST["intrests"])) {
    $intrests = (array)$_POST["intrests"];
    echo "Masz " . count($intrests) . " zainteresowania<br />Są to: <br />";
    for($i=0; $i< count($intrests); $i++){
        echo "-". $intrests[$i]."<br />";
    }
}

if(isset($_POST["country"])) {
    //$country = $_POST["country"];
    //echo "Twój kraj to: ".next($country);

}
//s
?>



</body>
</html>