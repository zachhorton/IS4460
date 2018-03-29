<?php

    require_once '../model/model.php';
    
    $obj = new ParentListModel();
    $obj->selectAll();
    $parent_list = $obj->parentList;
    
    session_start();
    $_SESSION['parent_list'] = $parent_list;
    
    header("Location: ../view/parent_list_view.php");
    
    exit();

?>