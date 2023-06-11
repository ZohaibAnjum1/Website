<div class="card">
                                <div class="card-header ">
                                    <h2 class="display-10 text-center font-weight-bolder">Registered Courses:</h2>
                                </div>
                                <div class="mt-2 ml-3 mr-3">
                                    <?php
                                    $connect = mysqli_connect('localhost', 'root', '', 'lms');
                                    // session_start();
                                    $_SESSION['id'] = $_SESSION['lms']['id'];
                                    $id = $_SESSION['id'];

                                    $cquery = "select * from course as cs inner join student_record as rs ON cs.course_id=rs.course_id where rs.reg_status=\"Register\" and rs.student_id=$id;";

                                    $cresult = mysqli_query($connect, $cquery);
                                    ?>
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center" id="table">
                                            <thead class="bg-success text-white">

                                                <!-- <th>Code</th> -->
                                                <th>Course Name</th>
                                                <th>Credit Hour</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                while ($row = mysqli_fetch_assoc($cresult)) {
                                                ?>

                                                    <!-- <td><?php echo $row['code'] ?></td> -->
                                                    <td><?php echo $row['name'] ?></td>
                                                    <td><?php echo $row['credit_hour'] ?></td>


                                            </tbody>

                                            <span id="val"></span>
                                        <?php
                                                }

                                        ?>

                                        </table>
                                        <div class="creditstyle">
                                            <p>Total credit hours: <b><?php echo $test ?></b></p>
                                            <p>Allowed credit hours: <b><?php echo $allowed ?></b></p>
                                        </div>
                                        <!-- <div></div> -->


                                        <script>
                                            // var count = '<?php $limit1 ?>';

                                            var table = document.getElementById("table"),
                                                Credit_Hours = 0;

                                            for (var i = 1; i < table.rows.length; i++) {
                                                Credit_Hours = Credit_Hours + parseInt(table.rows[i].cells[2].innerHTML);
                                            }
                                            document.getElementById("val").innerHTML = "Total Credit hours = " + Credit_Hours;



                                            console.log(Credit_Hours);
                                        </script>
                                    </div>
                                </div>

                            </div>