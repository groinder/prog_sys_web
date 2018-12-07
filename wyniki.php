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





define('MIN_WIEK', 18);




if($dane["wiek"]< MIN_WIEK){
    echo "Jesteś zbyt młody by brać udział w tej ankiecie<br />";
    ;
}

if (!preg_match("/[A-Z]{1}[a-z]+/", $dane["imie"])) {
    echo "Źle podano imię. Imie powinno Zaczynać się z dużej litery i zawierać conajmniej dwa znaki<br />";


}
if (!preg_match("/[A-Z]{1}[a-z]+/", $dane["nazwisko"])) {
    echo "Źle podano nazwisko. Nazwisko powinno Zaczynać się z dużej litery i zawierać conajmniej dwa znaki<br />";

}
if (!preg_match("/[0-9a-z]+@[0-9a-z]+.pl/", $dane["email"])) {
    echo "Źle podano email, prawidłowy format to nazwa@domena.pl<br />";

}

if (!preg_match("/^[0-9]{3} [0-9]{3} [0-9]{3}/", $dane["telefon"])) {
    echo "Źle podano numer telefonu, prawidłowy format to 000 000 000<br />";
    koniec();
}


foreach($dane as $index => $value){
    echo "Podane $index to $value <br />";
}


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

?>



</body>
</html>