<?php
$connect = mysqli_connect('localhost', 'root', '', 'lms');
if (isset($_POST['request'])){

    $request = $_POST['request'];
    $query = "select * from course where Semester= '$request'";
    $result = mysqli_query($connect, $query);
    $count = mysqli_num_rows($result);
?>  
    <div class="card aj">
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <?php
            if ($count) {

            ?>
                <tr class="bg-primary text-white">

                    <td>Code</td>
                    <td>Course Name</td>

                    <td>Semester</td>
                    <!-- <td>Year</td> -->


                </tr>
            <?php
                }else {
                echo "No record found";
            }
            ?>
            <tr>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>

                    <td><?php echo $row['code'] ?></td>
                    <td><?php echo $row['name'] ?></td>

                    <td><?php echo $row['Semester'] ?></td>



            </tr>
        <?php
                }
        ?>
        </table>
    </div>
</div>
    </div>
    
<?php
}
?>