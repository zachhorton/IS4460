<?php

    require_once '../model/model.php';
    
    if (isset($_POST['parent_first_name'])) {
        
        $first_name = $_POST['parent_first_name'];
        $middle_name = $_POST['parent_middle_name'];
        $last_name = $_POST['parent_last_name'];
        $street_address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip_code = $_POST['zip_code'];
        $phone_number = $_POST['phone_number'];
        $e_mail = $_POST['email'];
        $payment = $_POST['payment'];
        
        $parent = new ParentModel($first_name, $middle_name, $last_name, $street_address, $city, $state, $zip_code, $phone_number, $e_mail, $payment);
        
        $parent->insert();
        
        $obj = new ParentListModel();
        $obj->selectAll();
        $parent_list = $obj->parentList;
        
        session_start();
        $_SESSION['parent_list'] = $parent_list;
    }
    
    header('Location: ../view/parent_list_view.php');
    
    exit();

?>