<?php

    require_once '../model/model.php';
    
    if (isset($_POST['classroom_number'])) {
        
        $classroom_number = $_POST['classroom_number'];
        $classroom_size = $_POST['classroom_size'];
        $sacrament_id = $_POST['sacrament_id'];
        $catechist_id = $_POST['catechist_id'];
           
        $classroom = new ClassroomModel($classroom_number, $classroom_size, $sacrament_id, $catechist_id);
        $classroom->insert();
        
        
        $obj = new ClassroomListModel();
        $obj->selectAll($catechist_id);
        $classroom_list = $obj->classroomList;
        
        session_start();
        $_SESSION['classroom_list'] = $classroom_list;
    }
    
    header('Location: ../controller/classroom_list_controller.php');
    
    exit();

?>