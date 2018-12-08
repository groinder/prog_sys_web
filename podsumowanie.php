<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">

    <title>Formularz</title>
    <meta name="description" content="Formularz">
    <meta name="keywords" content="formularz, osobowy">
    <meta name="author" content="Maksymilian Galbierczyk">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>
<h1>Dziękujemy za udział w ankiecie</h1>
<h2>Twoje wprowadzone dane:</h2>
<?php
    echo "Imię: ".preg_replace("/[a]{1}/", "b", $_POST['imie'])."<br />";
    echo "Nazwisko: ".$_POST['nazwisko']."<br />";
    echo "Wiek: ".$_POST['wiek']."<br />";
    echo "Telefon: ".$_POST['telefon']."<br />";
    echo "Email: ".$_POST['email']."<br />";
    echo "Plec: ".$_POST['plec']."<br />";






if(isset($_POST["intrests"])) {
    $intrests = (array)$_POST["intrests"];
    echo "Masz " . count($intrests) . " zainteresowania<br />Są to: <br />";
    for($i=0; $i< count($intrests); $i++){
        echo "-". $intrests[$i]."<br />";
    }
}



if(isset($_POST["film"])) {
    echo "<br />Zanaczyłeś filmy o jakości: <br />";
    $films = (array)$_POST["film"];

   do {
        echo key($films)."<br />";

    } while( next($films));
}

echo "<br />Uczestniczyłeś w ankiecie w werjsji: ".+$_POST['version'];
$adres = $_SERVER["REMOTE_ADDR"];
echo "<br />Twój adres IP to $adres ";
echo '<br /><a href="form_php.php">Wróć do wypełniania ankiety</a>';

?>

</body>

</html>
