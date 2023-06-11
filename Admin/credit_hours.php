<?php
$connect = mysqli_connect('localhost', 'root', '', 'lms');
session_start();

// print_r($_POST);

if(isset($_POST) && $_POST['CreditHour']){
    extract($_POST);
   
        $qu = "select * from user_setting where user_id='$user_id'";
        $rr = mysqli_query($connect, $qu);
        if(mysqli_num_rows($rr)>0){
            $QryInsert = "update user_setting SET              
            key_field='$key_field',value_field='$value_field' where user_id='$user_id'
            "; 

        }else{
            $QryInsert = "INSERT INTO user_setting SET              
            key_field  = '$key_field',
            value_field   = '$value_field',
            user_id  = '$user_id'
            "; 

        }
        $res = mysqli_query($connect, $QryInsert);
    

}
?>