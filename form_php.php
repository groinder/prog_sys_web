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

<form action="wyniki.php" method="post">
    Imię:<br/>
    <input type="text" name="imie"/><hr>
    Nazwisko<br/>
    <input type="text" name="nazwisko"/><hr>
    Płeć:<br/>
    K <input type="radio" name="plec"/>
    M <input type="radio" name="plec"/>
    Jeszcze nie wiem <input type="radio" name="plec"/><hr>
    Nr Telefonu:<br/>
    <input type="text" name="telefon"/><hr>
    E-mail<br />
    <input type="text" name="email" /><hr>
    Kraj pochodzenia: <br />
    <select name="country">
        <option>Polska</option>
        <option>Niemcy</option>
        <option>Francja</option>
        <option>Inny</option>
    </select><hr>
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
    <input type="hidden" name="version" value="formularz 1.0" /><hr>
    <input type="submit" value="Wyślij">
</form>


</body>

</html>
