<?php
    $connect = mysqli_connect('localhost','root','','lms');
    if(isset($_GET['deletecode'])){
        $code = $_GET['deletecode'];
        // echo $code;
        // exit;
        $sql = "delete from course where code='$code' ";
        $result= mysqli_query($connect, $sql);
        // echo $result;
        // exit;
        if($result){
            header('location:/LMSDashboard/Admin/course.php');
        }
        else{
            die(mysqli_error($connect));
        }
    }
?>
