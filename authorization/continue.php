<?php

    require_once '../model/model.php';
    require '../authorization/check_session.php';
    
    $page_roles = "admin";
    
    session_start();
    
    if (isset($_SESSION['username'])) {
        
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        $user = new UserRole($username);
        $user_roles = $user->get_roles();
        
        $found = 0;
        
        if ($page_roles == $user_roles) {
            $found = 1;
        }
        
        if (!$found) {
            header("Location: unauthorized.php");
        }
        else {
            header("Location: ../php/add_record.php");
        }
        
    }



?>