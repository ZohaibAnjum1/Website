<?php
$connect = mysqli_connect('localhost', 'root', '', 'lms');
$student_id = $_POST['sid'];
$course_id = $_POST['cid'];
$semester_id = $_POST['ssid'];
$sql="INSERT INTO `student_record` (`student_id`, `course_id`, `semester_id`) VALUES ('$student_id', '$course_id', '$semester_id')";
if ($connect->query($sql) === TRUE) {
    echo "data inserted";
}
else 
{
    echo "failed";
}
?>