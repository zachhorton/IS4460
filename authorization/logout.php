<?php

    require_once '../authorization/check_session.php';

    session_start();
    
    if (isset($_SESSION['username'])) {
        destroy_session_and_data();
        
        header("Location: ../authorization/sign_on.php");
    }
    
    
    function destroy_session_and_data() {
        $_SESSION = array();
        setCookie(session_name(), '', time()-2592000, '/');
        session_destroy();
    }
?>