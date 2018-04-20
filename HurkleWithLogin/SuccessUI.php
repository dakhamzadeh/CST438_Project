<?php

/**
 * @author lolkittens
 * @copyright 2018
 */
 class SuccessUI {
    function __construct() {
        session_start();
       
       $_SESSION['logedin'] = 'done';
        echo "<script>document.location.replace('/Login/Hurkle/main.php')</script>";
    }
}



?>