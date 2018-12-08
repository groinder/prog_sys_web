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

<body style="background-color: <?php echo $_COOKIE["bckg"]?>; color: <?php echo $_COOKIE["text"] ?>; font-family: <?php echo $_COOKIE["font"] ?>;">




<h1>Znowu formularz</h1>
<form action="style.php" method="post">
    <select name="bckg">
        <option value="" selected disabled>Kolor tła</option>
        <option value="black">Czarny</option>
        <option value="red">Czerwony</option>
        <option value="blue">Niebieski</option>
    </select>
    <select name="text">
        <option value="" selected disabled>Kolor czcionki</option>
        <option value="yellow">Żółty</option>
        <option value="green">Zielony</option>
        <option value="white">Biały</option>
    </select>
    <select name="font">
        <option value="" selected disabled>Rodzaj czcionki</option>
        <option value="Arial">Arial</option>
        <option value="Tahoma">Tahoma</option>
        <option value="Times New Roman">Times New Roman</option>
    </select>
        <button type="submit" >Zatwierdź</button>
</form>
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
    <input type="checkbox" name="film[super][]" value="Interstellar"> Interstellar
    <input type="checkbox" name="film[meh][]" value="Django"> Django
    <input type="checkbox" name="film[super][]" value="Venom"> Venom
    <input type="checkbox" name="film[meh][]" value="Titanic"> Titanic
    <input type="checkbox" name="film[meh][]" value="Avatar"> Avatar
    <input type="checkbox" name="film[super][]" value=Gladiator"> Gladiator
    <input type="hidden" name="version" value="1.0" /><hr>
    <input type="submit" value="Wyślij">
</form>


</body>

</html>
