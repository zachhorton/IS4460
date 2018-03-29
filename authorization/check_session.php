<?php

    session_start();
    
    if(!isset($_SESSION['username'])) {
        header("Location: ../authorization/sign_on.php");
        exit();
    }

?>