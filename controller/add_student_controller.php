<?php

    require_once '../model/model.php';
    
    if (isset($_POST['student_first_name'])) {
        
        $first_name = $_POST['student_first_name'];
        $middle_name = $_POST['student_middle_name'];
        $last_name = $_POST['student_last_name'];
        $spoken_language = $_POST['language'];
        $date_of_birth = $_POST['date_of_birth'];
        $baptism_certificate = $_POST['baptism_certificate'];
        $parent_id = $_POST['parent_id'];
        $sacrament_id = $_POST['sacrament_id'];
        
        
        $student = new StudentModel($first_name, $middle_name, $last_name, $spoken_language, $date_of_birth, $baptism_certificate, $parent_id, $sacrament_id);
        $student->insert();
        
        
        $obj = new StudentListModel();
        $obj->selectAll();
        $student_list = $obj->studentList;
        
        session_start();
        $_SESSION['student_list'] = $student_list;
    }
    
    header('Location: ../view/student_list_view.php');
    
    exit();

?>