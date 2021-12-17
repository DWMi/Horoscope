<?php
session_start();
if($_SERVER['REQUEST_METHOD']) {
    
    if($_SERVER['REQUEST_METHOD'] === 'GET') {
       
        if($_SESSION["horoscope"]) {           
            $horoscope = unserialize($_SESSION["horoscope"]);
            echo json_encode($horoscope);
        }else{
            
            echo json_encode("Fyll i ditt ⬆️ Födelsedatum ovanför");
        }
    } else {
        echo json_encode("Metoden är ej GET");
    }
} else {
    echo json_encode("Saknas REQ Metod");
}

// FRÅGA OM ECHO
?>
