<?php

    require_once '../model/model.php';
    
    $obj = new StudentListModel();
    $obj->selectAll();
    $student_list = $obj->studentList;
    
    session_start();
    $_SESSION['student_list'] = $student_list;
    
    header("Location: ../view/student_list_view.php");
    
    exit();
    
?>