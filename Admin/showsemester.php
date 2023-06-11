<?php
session_start();
// $smr_id= $_POST['smr_id'];
$exp = explode('|',$_POST['id']);
$semester= $exp[0];
$smr= $exp[1];
// print_r($exp);exit;
list($k, $smr_id) = $_POST['id'];
// echo $smr_id.'-'.$k; exit;s
// print_r($_POST); exit;
// $k = $_POST['id'];
// print_r($k); exit;
$connect = mysqli_connect('localhost', 'root', '', 'lms');
$sql = "select * from Course where semester='{$semester}' or smr_id='$smr'";
$res = mysqli_query($connect, $sql);
// print_r($res); exit;
// echo json_encode($res);
// exit;
while ($rows = mysqli_fetch_array($res)) {
?>
    <tr>
        <td><?php echo $rows['code'] ?></td>
        <td><?php echo $rows['name'] ?></td>
        <!-- <td><?php

            if ($rows['Status'] == "1")
                echo "Active";
            else
                echo "Inactive";
            ?>
        </td> -->
        <td>
                    <?php
                    if ($rows['Status'] == "1")

                        echo
                        "<a href=deactivate.php?id=" . $rows['course_id'] . " class='btn btn-danger'>Not Offered</a>";
                    else
                        echo
                        "<a href=activate.php?id=" . $rows['course_id'] . " class='btn btn-success'>Offered</a>";
                    ?>
        </td>
        <!-- <td><button class="btn btn-success change" onclick="toggleText(this)">Offer</button></td> -->
    </tr>



<?php
}
?>