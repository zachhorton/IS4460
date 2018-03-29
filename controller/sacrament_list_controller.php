<?php

    require_once '../model/model.php';
    
    $obj = new SacramentListModel();
    $obj->selectAll();
    $sacrament_list = $obj->sacramentList;
    
    session_start();
    $_SESSION['sacrament_list'] = $sacrament_list;
    
    header("Location: ../view/sacrament_list_view.php");
    
    exit();

?>