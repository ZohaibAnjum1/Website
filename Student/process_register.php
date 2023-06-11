<?php
$connect = mysqli_connect('localhost', 'root', '', 'lms');
session_start();
$_SESSION['id'] = $_SESSION['lms']['id'];
$id = $_SESSION['id'];

// print_r($_POST);

if(isset($_POST) && $_POST['UpdateStaus']){
    extract($_POST);
   
        $qu = "select * from student_record where student_id  = '$id' and course_id = '$c_id'";
        $rr = mysqli_query($connect, $qu);
        if(mysqli_num_rows($rr)>0){
            $QryInsert = "update student_record SET              
            reg_status  = '$value' where student_id  = '$id' and course_id = '$c_id'
            "; 

        }else{
        $QryInsert = "INSERT INTO student_record SET
                    student_id  = '$id',
                    course_id   = '$c_id',
                    semester_id  = '$s_id',     
                    reg_status  = '$value'
                    "; 
        }
    $res = mysqli_query($connect, $QryInsert);
    

}
?>
