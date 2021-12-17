<?php
session_start();
require("./horoscopeArray.php");

if($_SERVER['REQUEST_METHOD']) {

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        if($_POST['date']) {

            if($_SESSION["horoscope"]) {
                $horoscope = getHoroscope($_POST['date']); 
                $_SESSION["horoscope"] = serialize($horoscope);           
                echo json_encode(true);
                exit;
            } else {
                echo json_encode(false);
                exit;
            }

        } else {
            echo json_encode("Inge date tillsatt");
        }

    } else {   
        echo json_encode("Ej POST metod");
        exit;
    }

} 

?>