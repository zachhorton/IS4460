<?php

    require_once '../model/model.php';
    
    $obj = new CatechistListModel();
    $obj->selectAll();
    $catechist_list = $obj->catechistList;
    
    session_start();
    $_SESSION['catechist_list'] = $catechist_list;
    
    header("Location: ../view/catechist_list_view.php");
    
    exit();

?>