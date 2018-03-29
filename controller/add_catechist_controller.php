<?php

    require_once '../model/model.php';
    
    if (isset($_POST['catechist_first_name'])) {
        
        $first_name = $_POST['catechist_first_name'];
        $last_name = $_POST['catechist_last_name'];
        $spoken_language = $_POST['language'];
        $phone_number = $_POST['phone_number'];
        $e_mail = $_POST['email'];
           
        $catechist = new CatechistModel($first_name, $last_name, $spoken_language, $phone_number, $e_mail);
        $catechist->insert();
        
        
        $obj = new CatechistListModel();
        $obj->selectAll();
        $student_list = $obj->catechistList;
        
        session_start();
        $_SESSION['catechist_list'] = $catechist_list;
    }
    
    header('Location: ../controller/catechist_list_controller.php');
    
    exit();

?>