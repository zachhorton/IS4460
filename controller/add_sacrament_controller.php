<?php

    require_once '../model/model.php';
    
    if (isset($_POST['sacrament'])) {
        
        $sacrament_name = $_POST['sacrament'];
        $meeting_time = $_POST['meeting_time'];

           
        $sacrament = new SacramentModel($sacrament_name, $meeting_time);   
        $sacrament->insert();
        
        
        $obj = new SacramentListModel();
        $obj->selectAll();
        $sacrament_list = $obj->sacramentList;
        
        session_start();
        $_SESSION['sacrament_list'] = $sacrament_list;
    }
    
    header('Location: ../controller/sacrament_list_controller.php');
    
    exit();

?>