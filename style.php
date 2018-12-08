<?php

$time = time()+15*60;

    foreach($_POST as $item => $value){
        setcookie($item, $value, $time);
    }

    header("Location: ".$_SERVER['HTTP_REFERER']);




?>