<?php
    $connect = mysqli_connect('localhost','root','','lms');
    if(isset($_GET['deleteusername'])){
        $username = $_GET['deleteusername'];
        $sql = "delete from personal_info where username='$username' ";
        $result= mysqli_query($connect, $sql);
        if($result){
            header('location:/LMSDashboard/Admin/teacherinfo.php');
        }
        else{
            die(mysqli_error($connect));
        }
    }
?>