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
    echo "Imię: ".$_POST['imie']."<br />";
    echo "Nazwisko: ".$_POST['nazwisko']."<br />";
    echo "Wiek: ".$_POST['wiek']."<br />";
    echo "Telefon: ".$_POST['telefon']."<br />";
    echo "Email: ".$_POST['email']."<br />";
    echo "Plec: ".$_POST['plec']."<br />";



    echo "Uczestniczyłeś w ankiecie w werjsji: ".+$_POST['version'];



?>

</body>

</html>
