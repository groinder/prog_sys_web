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




<h1>Znowu formularz</h1>

<form action="form_php.php" method="post">
    Imię:<br/>
    <input type="text" name="imie"/>
    <?php
    echo $messeages['imie'];
    ?>
    <hr>
    Nazwisko<br/>
    <input type="text" name="nazwisko"/>
    <?php
    echo $messeages['nazwisko'];
    ?><hr>
    Wiek:<br/>
    <input type="text" name="wiek"/>
    <?php
    echo $messeages['wiek'];
    ?>
    <hr>
    Płeć:<br/>
    K <input type="radio" value='K' name="plec"/>
    M <input type="radio" value='M' name="plec"/>
    Jeszcze nie wiem <input type="radio" value='NWM' name="plec"/><br>
    <?php
    echo $messeages['plec'];
    ?><hr>
    Nr Telefonu:<br/>
    <input type="text" name="telefon"/>
    <?php
    echo $messeages['telefon'];
    ?><hr>
    E-mail<br />
    <input type="text" name="email" />
    <?php
    echo $messeages['email'];
    ?><hr>
    Kraj pochodzenia: <br />
    <select name="kraj[]">
        <option>Polska</option>
        <option>Niemcy</option>
        <option>Francja</option>
        <option>Inny</option>
    </select>
    <?php
    echo $messeages['kraj'];
    ?><hr>
    Zainteresowania:<br />
    <select name="intrests[]" multiple="'multiple">
        <option>Filmy</option>
        <option>Książki</option>
        <option>Sport</option>
        <option>Muzyka</option>
    </select><br /><hr>
    Filmy które widziałem:<br />
    <input type="checkbox" name="film_1"> Interstellar
    <input type="checkbox" name="film_2"> Django
    <input type="checkbox" name="film_3"> Venom
    <input type="checkbox" name="film_4"> Titanic
    <input type="checkbox" name="film_5"> Avatar
    <input type="checkbox" name="film_6"> Gladiator
    <input type="hidden" name="version" value="1.0" /><hr>
    <input type="submit" value="Wyślij">
</form>


</body>

</html>
