<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_destroy();
    setcookie('PHPSESSID', null, -1, '/');

    header("Location: ".$_SERVER['HTTP_REFERER']);
}
?>
