<?php 
function generate_pw($lenght) {
    $data = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!%&.;,-"@+*';

    if($lenght >= 1) {
        $random_pw = substr(str_shuffle($data), 0, $lenght);
        return $random_pw;
    } else {
        return $random_pw = "Errore!!! devi per forza inserire un numero maggiore di 0!!";
    }
}
?>