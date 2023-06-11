<?php
session_start();
$_SESSION['id'] = $_SESSION['lms']['id'];
$id = $_SESSION['id'];
// echo $id;
$connect = mysqli_connect('localhost', 'root', '', 'lms');
$cquery = "SELECT * from course where Status=1";
$cresult = mysqli_query($connect, $cquery);

// $student_id = $_POST['sid'];
// $course_id = $_POST['cid'];
// $semester_id = $_POST['ssid'];
$limit = "select value_field from user_setting where user_id='$id'";
$climit = mysqli_query($connect, $limit);
while ($row = mysqli_fetch_assoc($climit)) {
    $allowed = $row['value_field'];
}
$sql = "select SUM(credit_hour) as credit_hr  from course as cs left join student_record as rs ON cs.course_id=rs.course_id where rs.reg_status='Register' and rs.student_id='$id';";
$checking = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_assoc($checking)) {
    $test = $row['credit_hr'];
}


// if($ccount>0){
//     $ncount="";
// }
?>
<!-- <script> -->
<!-- $(document).ready(function() {
        $("#button").click(function() {
            var student_id = $("#sid").val();
            var course_id = $("#cid").val();
            var semester_id = $("#ssid").val();
            $.ajax({
                url: 'insert.php',
                method: 'POST',
                data: {
                    student_id: student_id,
                    course_id: student_id,
                    semester_id: semester_id
                },
                success: function(data) {
                    alert(data);
                }
            });
        });
    }); -->
<!-- </script> -->
<!DOCTYPE html>
<html lang="en">
<script>
    function toggleText(event) {
        text = false;
        var text = event.textContent || event.innerText;
        if (text == 'Register') {
            event.innerHTML = 'Registered';
            //document.getElementById("success").innerHTML = "<span style='color: red;'><span>";
            event.style.backgroundColor = 'Green';

        }
        text = true;
    }
</script>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Portal</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.1/css/all.min.css">
    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .sidebar-brand-text {
            font-size: 35px;
        }

        .creditstyle p {
            margin: 4px 4px 4px 17px;
        }
    </style>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">LMS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="/LMSDashboard/Student/student.php">
                    <i class="fas fa-fw fa-light fa-user"></i>
                    <span>Home</span></a>
            </li>

            <!-- <li class="nav-item">
                <a class="nav-link" href="/LMSDashboard/Student/course_alloted.php">
                    <i class="fas fa-fw fa-light fa-layer-group"></i>
                    <span>My Courses</span></a>
            </li> -->

            <!-- <li class="nav-item">
                <a class="nav-link" href="/LMSDashboard/Student/steacher.php">
                    <i class="fas fa-fw fa-light fa-user"></i>
                    <span>Faculty</span></a>
            </li> -->

            <li class="nav-item active">
                <a class="nav-link" href="/LMSDashboard/Student/course_registration.php">
                    <i class="fas fa-fw fa-light fa-layer-group"></i>
                    <span>Course Registration</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message 
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div>
    -->

        </ul>
        <!-- End of Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                <img class="img-profile rounded-circle" src="../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <div class="container-fluid">
                    <!-- <?php print_r($_SESSION['lms']) ?> -->
                    <h2 class="text-center ">Courses Registration (Are Open)</h2>
                    <div class="row mt-5">
                        <div class="col-9">
                            <div class="card mt-1">
                                <div class="card-header">
                                    <div class="alert alert-danger text-center limitexceed" style="display:none" role="alert">
                                        Limit for your course registration is exceed kindly registered accordingly.
                                    </div>
                                    <!-- <h5>Limit for your course registration is exceed kindly registered accordingly.</h5> -->
                                    <h2 class="display-8 text-center font-weight-bolder">Courses Detail</h2>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center">
                                            <thead class="bg-primary text-white">

                                                <th>Code</th>
                                                <th>Course Name</th>
                                                <th>Credit Hour</th>
                                                <!-- <th>Status</th> -->
                                                <th>Action</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                while ($rows = mysqli_fetch_assoc($cresult)) {
                                                ?>

                                                    <tr>
                                                        <td><?php echo $rows['code'] ?></td>
                                                        <td><?php echo $rows['name'] ?></td>
                                                        <td><?php echo $rows['credit_hour'] ?></td>
                                                        <!-- <td><?php

                                                                    if ($rows['Selected'] == "1")
                                                                        echo "Active";
                                                                    else
                                                                        echo "Inactive";
                                                                    ?>
                                                        </td> -->
                                                        <td>
                                                            <?php
                                                            $sqls = "select id,reg_status from student_record where course_id= '" . $rows['course_id'] . "' and student_id='$id'";

                                                            $testing = mysqli_query($connect, $sqls);
                                                            $rows_status = mysqli_fetch_assoc($testing);
                                                            $credit = "select * from student_record where student_id='$id' ";
                                                            $ccresult = mysqli_query($connect, $credit);
                                                            while ($cc = mysqli_fetch_assoc($ccresult)) {
                                                                // echo $cc['student_id']; exit;
                                                            }
                                                            ?>
                                                            <select name="status" onchange="statusUpdate(
                                                            this.value,
                                                            '<?php echo $_SESSION['lms']['id']; ?>',
                                                            '<?php echo $rows['course_id'] ?>',
                                                            '<?php echo $rows['smr_id'] ?>',
                                                            '<?php echo $rows['credit_hour'] ?>'
                                                            )">

                                                                <option value="">Select</option>
                                                                <option value="Register" <?php
                                                                                            if (!empty($rows_status['reg_status'])) {
                                                                                                if ($rows_status['reg_status'] && $rows_status['reg_status'] == 'Register') {
                                                                                                    echo 'selected';
                                                                                                }
                                                                                            }
                                                                                            ?>>Register</option>
                                                                <option value="Unregister" <?php
                                                                                            if (!empty($rows_status['reg_status'])) {
                                                                                                if ($rows_status['reg_status'] && $rows_status['reg_status'] == 'Unregister') {
                                                                                                    echo 'selected';
                                                                                                    //    $sql4="UPDATE `student_record` SET 
                                                                                                    //  `reg_status`=0 WHERE id='$id'";

                                                                                                    //    mysqli_query($connect,$sql4);
                                                                                                    //    echo mysqli_query($connect,$sql4);
                                                                                                    //    exit;
                                                                                                }
                                                                                            }
                                                                                            ?>>
                                                                    UnRegister</option>
                                                            </select>

                                                            <!-- <button onclick="toggleText(this)" type="submit" id="button" class="btn btn-warning">Register</button> -->

                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>


                                            </tbody>


                                            <!-- <div class="card-header">
                                    <h2 class="display-8 text-center font-weight-bolder">Course Details<a href="/LMSDashboard/Admin/create_course.php"><button class="btn btn-info mt-2">Add Course</button></a></h2>
                                </div> -->
                                            <!-- <div class="col cd">
                                            <h2 class="display-8 text-center font-weight-bolder">Course Details<a href="/LMSDashboard/Admin/create_course.php"><button class="btn btn-info mt-2">Add Course</button></a></h2>             
                                            </div> -->
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-3 mt-1">
                            <?php
                            $connect = mysqli_connect('localhost', 'root', '', 'lms');
                            // session_start();
                            $_SESSION['id'] = $_SESSION['lms']['id'];
                            $id = $_SESSION['id'];

                            $cquery = "select * from course as cs inner join student_record as rs ON cs.course_id=rs.course_id where rs.reg_status=\"Register\" and rs.student_id=$id;";

                            $cresult = mysqli_query($connect, $cquery);
                            ?>
                            <div class="card">
                                <div class="card-header text-center font-weight-bolder">
                                    Registered Course
                                </div>
                                <table class="mt-2 mb-2">
                                    <tbody class="pl-2 pr-2">
                                    <?php
                                                while ($row = mysqli_fetch_assoc($cresult)) {
                                                ?>
                                        <tr>
                                            <td class="w-100 pl-2 pr-2"><?php echo $row['name'] ?></td>
                                            <td class="pl-2 pr-2"><?php echo $row['credit_hour'] ?></td>
                                        </tr>
                                        <!-- <tr>
                                            <td class="pl-2 pr-2">Course 2</td>
                                            <td class="pl-2 pr-2">4</td>
                                        </tr>
                                        <tr>
                                            <td class="pl-2 pr-2">Course 3</td>
                                            <td class="pl-2 pr-2">3</td>
                                        </tr>
                                        <tr class="border-bottom"></tr>-->
                                        <?php
                                                }

                                        ?>
                                         </tr>
                                        <tr class="border-bottom"></tr>
                                        <tr>
                                            <td class="pl-2 pr-2"><b>Total credit Hours<b>:</td>
                                            <td class="pl-2 pr-2"><b><?php echo $test ?><b></td>
                                        </tr>
                                        <tr>
                                            <td class="pl-2 pr-2"><small>Allowed credit Hours:<small></td>
                                            <td class="pl-2 pr-2"><small><?php echo $allowed ?><small></td>
                                        </tr>
                                    </tbody>
                                    


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="/LMSDashboard/logout.php">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap core JavaScript-->
                <script src="../vendor/jquery/jquery.min.js"></script>
                <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="../js/sb-admin-2.min.js"></script>

                <!-- Page level plugins -->
                <script src="../vendor/chart.js/Chart.min.js"></script>

                <!-- Page level custom scripts -->
                <script src="../js/demo/chart-area-demo.js"></script>
                <script src="../js/demo/chart-pie-demo.js"></script>
                <script>
                    function statusUpdate(value, st_id, c_id, s_id, cr_hr) {
                        // alert(value); 
                        $('.limitexceed').hide();
                        // alert(st_id);
                        var allowed = '<?php echo $allowed ?>';
                        var test = '<?php echo $test ?>';
                        var x = parseInt(test) + parseInt(cr_hr);
                        if (value == 'Register') {
                            // alert(1);
                            if (x > allowed || allowed == 0) {
                                // alert(2);
                                // alert('Limit for your course registration is exceed kindly registered accordingly.');
                                $('.limitexceed').show();
                                $('.limitexceed').delay(1000).hide(500);
                                return false;
                            }
                            // return false;
                        }
                        // alert(1);
                        $.ajax({
                            type: "POST",
                            url: 'http://localhost/LMSDashboard/Student/process_register.php',
                            data: {
                                'UpdateStaus': 'UpdateStaus',
                                value: value,
                                st_id: st_id,
                                c_id: c_id,
                                s_id: s_id,
                                cr_hr: cr_hr,
                                Reg_status: value
                            },
                            success: function(data) {
                                location.reload();
                                console.log('success', data);
                            },
                            // dataType: dataType
                        });
                    }
                </script>
</body>

</html>