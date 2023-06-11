<?php
  
    // Connect to database 
    $connect = mysqli_connect('localhost', 'root', '', 'lms');
  
    // Check if id is set or not, if true,
    // toggle else simply go back to the page
    if (isset($_GET['id'])){
  
        // Store the value from get to 
        // a local variable "course_id"
        $id=$_GET['id'];
  
        // SQL query that sets the status to
        // 0 to indicate deactivation.
        $sql="UPDATE `course` SET 
            `Status`=0 WHERE course_id='$id'";
  
        // Execute the query
        mysqli_query($connect,$sql);
    }
  
    // Go back to course-page.php
    header('location: offered_course.php');
?>