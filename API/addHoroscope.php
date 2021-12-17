<?php
session_start();
require("./horoscopeArray.php");

if($_SERVER['REQUEST_METHOD']) {

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // ex. 2021-12-04
        if($_POST['date']) {
         
            
            if(!$_SESSION["horoscope"]) {
                
                // ex. 2021-12-04
                $horoscope = getHoroscope($_POST['date']); 
                $_SESSION["horoscope"] = serialize($horoscope);           
                echo json_encode(true);
                exit;
            } else {
                echo json_encode(false);
                exit;
            }

        } else {
            echo json_encode("Felaktiga Värden");
        }

    } else {   
        echo json_encode("fel POST metod");
        exit;
    }

} else {
    echo json_encode("Inte giltig begäran");
    exit;
}
?>