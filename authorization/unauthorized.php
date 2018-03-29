<?php

    require_once '../authorization/check_session.php';
    
    echo "You are not logged in as an admin! <br>";
    echo "Redirecting back to Student List";
    header("Refresh: 5; url=../controller/student_list_controller.php");
?>
