<?php

define('MIN_WIEK', 18);


$messeages = array();


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $messeages = validate();
    if(is_array($messeages)){
        require_once('form.php');
    }
    else{
        require_once ('podsumowanie.php');
    }

}
else{
    require_once('form.php');
}



    function validate()
    {
        $wal_imie = function($value, $fieldName) {

            if (!preg_match("/[A-Z]{1}[a-z]+/", $value)) {
                return "Źle podano ".$fieldName." ".$fieldName." powinno Zaczynać się z dużej litery i zawierać conajmniej dwa znaki<br />";


            }
        };

        $wal_wiek = function($value, $fieldName){
            if($value< MIN_WIEK){
                return "Twój ".$fieldName." jest zbyt mały<br />";

            }
        };

        $wal_email= function($value, $fieldName){

            if (!preg_match("/[0-9a-z]+@[0-9a-z]+.pl/", $value)) {
                return "Źle podano ".$fieldName.", prawidłowy format to nazwa@domena.pl<br />";
            }
        };

        $wal_telefon= function($value, $fieldName){


            if (!preg_match("/^[0-9]{3} [0-9]{3} [0-9]{3}/", $value)) {
                return "Źle podano ".$fieldName." ,prawidłowy format to 000 000 000<br />";

            }
        };

        $require = function($value, $fieldName){

            if((empty($value))){
                return "Musisz zaznaczyć ".$fieldName;
            }

        };



        $form = array(
            "imie" => $wal_imie,
            "nazwisko" => $wal_imie,
            "wiek" => $wal_wiek,
            "email" => $wal_email,
            "telefon" => $wal_telefon,
            "plec" => $require,
            "kraj" => $require,

        );

        $messeages = array();
        $isValid = true;
        foreach ($form as $fieldName => $walidator) {
            $messeages[$fieldName] = $walidator($_POST[$fieldName], $fieldName);
            if($messeages[$fieldName]){
                $isValid = false;
            }
        }
        return $isValid? true:$messeages;
    }



?>
