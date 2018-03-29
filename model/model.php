<?php 

    //Get DB Credentials
    require_once '../util/dbinfo.php';
    
    //Connect to Database
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->error) {
        die($conn->connect_error);
    }
    
    
    class ParentModel {
        
        public $first_name, $middle_name, $last_name, $street_address, $city, $state, $zip_code, $phone_number, $e_mail, $payment;
        
        function __construct($first_name, $middle_name, $last_name, $street_address, $city, $state, $zip_code, $phone_number, $e_mail, $payment) {
            $this->first_name = $first_name;
            $this->middle_name = $middle_name;
            $this->last_name = $last_name;
            $this->street_address = $street_address;
            $this->city = $city;
            $this->state = $state;
            $this->zip_code = $zip_code;
            $this->phone_number = $phone_number;
            $this->e_mail = $e_mail;
            $this->payment = $payment;
        }
        
        function insert() {
            global $conn;
            
            $first_name = $this->first_name;
            $middle_name = $this->middle_name;
            $last_name = $this->last_name;
            $street_address = $this->street_address;
            $city = $this->city;
            $state = $this->state;
            $zip_code = $this->zip_code;
            $phone_number = $this->phone_number;
            $e_mail = $this->e_mail;
            $payment = $this->payment;
            
            $query = "INSERT INTO `parent` (`parent_id`, `first_name`, `middle_name`, `last_name`, `street_address`, `city`, `state`, `zip_code`, `phone_number`, `e_mail`, `payment`) VALUES (NULL, '$first_name', '$middle_name', '$last_name', '$street_address', '$city', '$state', '$zip_code', '$phone_number', '$e_mail', '$payment')";
            
            
            $result = $conn->query($query);
            if (!$result) {
                die($connect->error);
            }
        }  
    }
    
    
    class ParentListModel {
        
        public $parentList = array();
        
        function selectAll() {
            
            global $parentList, $conn;
            
            $query = "SELECT * FROM parent";
            
            $result = $conn->query($query);
            if (!$result) {
                die($connect->error);
            }
            
            $rows = $result->num_rows;
            
            for ($j = 0; $j < $rows; $j++) {
                
                $result->data_seek($j);
                $row = $result->fetch_array(MYSQLI_NUM);
                
                $this->parentList[] = $row;
            }
            
            return $parentList;
        }
        
    }
    
    
    class StudentModel {
        
        public $first_name, $middle_name, $last_name, $spoken_language, $date_of_birth, $baptism_certificate, $parent_id, $sacrament_id;
        
        function __construct($first_name, $middle_name, $last_name, $spoken_language, $date_of_birth, $baptism_certificate, $parent_id, $sacrament_id) {
            $this->first_name = $first_name;
            $this->middle_name = $middle_name;
            $this->last_name = $last_name;
            $this->spoken_language = $spoken_language;
            $this->date_of_birth = $date_of_birth;
            $this->baptism_certificate = $baptism_certificate;
            $this->parent_id = $parent_id;
            $this->sacrament_id = $sacrament_id;
        }
        
        function insert() {
            global $conn;
            
            $first_name = $this->first_name;
            $middle_name = $this->middle_name;
            $last_name = $this->last_name;
            $spoken_language = $this->spoken_language;
            $date_of_birth = $this->date_of_birth;
            $baptism_certificate = $this->baptism_certificate;
            $parent_id = $this->parent_id;
            $sacrament_id = $this->sacrament_id;
            
            $query = "INSERT INTO `student` (`student_id`, `first_name`, `middle_name`, `last_name`, `spoken_language`, `date_of_birth`, `baptism_certificate`, `parent_id`, `sacrament_id`) VALUES (NULL, '$first_name', '$middle_name', '$last_name', '$spoken_language', '$date_of_birth', '$baptism_certificate', '$parent_id', '$sacrament_id')";
            
            $result = $conn->query($query);
            if (!$result) {
                die($connect->error);
            }
        }
    }
    

    class StudentListModel {
        
        public $studentList = array();
        
        function selectAll() {
            
            global $studentList, $conn;
            
            $query = "SELECT * FROM student_list";
            
            $result = $conn->query($query);
            if (!$result) {
                die($connect->error);
            }
            
            $rows = $result->num_rows;
            
            for ($j = 0; $j < $rows; $j++) {
                
                $result->data_seek($j);
                $row = $result->fetch_array(MYSQLI_NUM);
                
                $this->studentList[] = $row;
                
            }
            
            return $studentList;
        }
    }

    
    class CatechistModel {
        
        public $first_name, $last_name, $spoken_language, $phone_number, $e_mail;
        
        function __construct ($first_name, $last_name, $spoken_language, $phone_number, $e_mail) {
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->spoken_language = $spoken_language;
            $this->phone_number = $phone_number;
            $this->e_mail = $e_mail;
        }
        
        function insert() {
            global $conn;
            
            $first_name = $this->first_name;
            $last_name = $this->last_name;
            $spoken_language = $this->spoken_language;
            $phone_number = $this->phone_number;
            $e_mail = $this->e_mail;
            
            $query = "INSERT INTO `catechist` (`catechist_id`, `first_name`, `last_name`, `spoken_language`, `phone_number`, `e_mail`) VALUES (NULL, '$first_name', '$last_name', '$spoken_language', '$phone_number', '$e_mail')";
            
            $result = $conn->query($query);
            if (!$result) {
                die($connect->error);
            }
        } 
    }
    
    
    class CatechistListModel {
        
        public $catechistList = array();
        
        function selectAll() {
            
            global $catechistList, $conn;
            
            $query = "SELECT * FROM catechist";
            
            $result = $conn->query($query);
            if (!$result) {
                die($connect->error);
            }
            
            $rows = $result->num_rows;
            
            for ($j = 0; $j < $rows; $j++) {
                
                $result->data_seek($j);
                $row = $result->fetch_array(MYSQLI_NUM);
                
                $this->catechistList[] = $row;
                
            }
            
            return $catechistList;
        }
    }
    
    
    class ClassroomModel {
        
        public $classroom_number, $classroom_size, $sacrament_id, $catechist_id;
        
        function __construct($classroom_number, $classroom_size, $sacrament_id, $catechist_id) {
            $this->classroom_number = $classroom_number;
            $this->classroom_size = $classroom_size;
            $this->sacrament_id = $sacrament_id;
            $this->catechist_id = $catechist_id;
        }
        
        function insert() {
            global $conn;
            
            $classroom_number = $this->classroom_number;
            $classroom_size = $this->classroom_size;
            $sacrament_id = $this->sacrament_id;
            $catechist_id = $this->catechist_id;
            
            $query = "INSERT INTO `classroom` (`classroom_id`, `classroom_number`, `classroom_size`, `sacrament_id`, `catechist_id`) VALUES (NULL, '$classroom_number', '$classroom_size', '$sacrament_id', '$catechist_id')";
            
            $result = $conn->query($query);
            if (!$result) {
                die($connect->error);
            }
        }   
    }
    
    
    class ClassroomListModel {
        
        public $classroomList = array();
        
        public $catechist_id;
        
        function selectAll($catechist_id) {
            
            global $classroomList, $conn;
            
            $query = "call classroom_list($catechist_id)";
            
            $result = $conn->query($query);
            if (!$result) {
                die($connect->error);
            }
            
            $rows = $result->num_rows;
            
            for ($j = 0; $j < $rows; $j++) {
                
                $result->data_seek($j);
                $row = $result->fetch_array(MYSQLI_NUM);
                
                $this->classroomList[] = $row;
                
            }
            
            return $classroomList;
        }
    }
    
    
    class SacramentModel {
        
        public $sacrament, $meeting_time;
        
        function __construct($sacrament, $meeting_time) {
            $this->sacrament = $sacrament;
            $this->meeting_time = $meeting_time;
        }
        
        function insert() {
            global $conn;
            
            $sacrament = $this->sacrament;
            $meeting_time = $this->meeting_time;
            
            $query = "INSERT INTO `sacrament` (`sacrament_id`, `sacrament`, `meeting_time`) VALUES (NULL, '$sacrament', '$meeting_time')";
            
            $result = $conn->query($query);
            if (!$result) {
                die($connect->error);
            }
        }
        
    }
    
    
    class SacramentListModel {
        
        public $sacramentList = array();
        
        function selectAll() {
            
            global $sacramentList, $conn;
            
            $query = "SELECT * FROM sacrament_list";
            
            $result = $conn->query($query);
            if (!$result) {
                die($connect->error);
            }
            
            $rows = $result->num_rows;
            
            for ($j = 0; $j < $rows; $j++) {
                
                $result->data_seek($j);
                $row = $result->fetch_array(MYSQLI_NUM);
                
                $this->sacramentList[] = $row;
                
            }
            
            return $sacramentList;
        }
    }
    
    
    class User {
        
        public $username, $first_name, $last_name, $password, $role;
        
        function __construct($username, $first_name, $last_name, $password, $role) {
            $this->username = $username;
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->password = $password;
            $this->role = $role;
        }
        
        function salt_and_hash($password) {
            $salt1 = "D10sE$";
            $salt2 = "@mOr";
            
            $token = hash("ripemd128", "$salt1$password$salt2");
            
            return $token;
            
        }
        
        function add_user() {
            global $conn;
            
            $username = $this->username;
            $first_name = $this->first_name;
            $last_name = $this->last_name;
            $password = $this->salt_and_hash($this->password);
            $role = $this->role;
            
            $query = "INSERT INTO `users` (`username`, `first_name`, `last_name`, `password`) VALUES ('$username', '$first_name', '$last_name', '$password')";
            
            $result = $conn->query($query);
            if (!$result) {
                die($connect->error);
            }
            
            $query = "INSERT INTO `roles` (`username`, `role`) VALUES ('$username', '$role')";
            
            $result = $conn->query($query);
            if (!$result) {
                die($connect->error);
            }
        }
    }
    
    class UserRole {
         
        public $username;
        
        function __construct($username) {
            $this->username = $username;
        }
        
        function get_roles() {
            global $conn;
            
            $username = $this->username;
            
            $query = "SELECT role FROM roles WHERE username = '$username'";
            
            $result = $conn->query($query);
            if (!$result) {
                die($conn->error);
            }
            
            $row = $result->fetch_array(MYSQLI_ASSOC);
            
            $role = $row['role'];
            
            return $role;
        }
    }
    


?>