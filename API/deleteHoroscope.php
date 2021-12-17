<?php
session_start();

if($_SERVER['REQUEST_METHOD']) {
    if($_SERVER['REQUEST_METHOD'] === 'DELETE') {

        if($_SESSION["horoscope"]) {
            session_destroy();
            echo json_encode(true);
        } else {
            echo json_encode(false);
        }
    } else {
        echo json_encode("Ej en DELETE metod");
    }
} else {
   echo json_encode("EJ en REQ metod");
}
?>