<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">

    <title>Logowanie</title>
</head>

<body>
<?php
$error = false;

$users = array(
    array(
        'login' => 'Maks',
        'haslo' => 'buk'
    ),
    array(
        'login' => 'Krzychu',
        'haslo' => 'polak'
    )
);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($users as $user) {
        if ($user['login'] == $_POST['login'] && $user['haslo'] == $_POST['haslo']) {

            $_SESSION['user'] = $_POST['login'];
        }

    }
    if (isset($_SESSION['user'])){
        $error = true;
    }
}


?>


<?php if(isset($_SESSION['user'])):?>
<?php require('user.php');
else:?>

<?php if($error){
    echo "Błędne dane logowania";
    }
?>
<form action="logowanie.php" method="post">
    Login:<input type="text" name="login"/><br>
    Haslo:<input type="password" name="haslo"/><br>
    <input type="submit" value="Zaloguj"/>

</form>
<?php endif ?>
</body>

</html>
