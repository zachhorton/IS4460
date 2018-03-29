<?php

    require_once '../model/model.php';
    
    if (isset($_POST['username'])) {
        
        $username = $_POST['username'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $password = $_POST['password'];
        $role = $_POST['role'];
           
        $user = new User($username, $first_name, $last_name, $password, $role);
        $user->add_user();
    }
    
    header('Location: ../controller/student_list_controller.php');
    
    exit();

?>