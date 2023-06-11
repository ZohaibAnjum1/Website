<!-- <script>
  function showAlert() {
    alert ("Registrations are opened!");
  }
  </script> -->
<?php
$connect = mysqli_connect('localhost', 'root', '', 'lms');
$cquery = "select * from course as cs inner join register_semester as rs ON cs.smr_id=rs.smr_id";
// $cquery = "SELECT register_course.Code, register_course.Name, register_semester.SemesterName
//  FROM register_course 
//  LEFT JOIN register_semester ON register_semester.ID = register_course.SemesterID;";
$cresult = mysqli_query($connect, $cquery);
$cquery = "select * from course as cs inner join register_semester as rs ON cs.smr_id=rs.smr_id";
$cresult = mysqli_query($connect, $cquery);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LMS</title>
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

        .mt-2 {
            align-items: center;
        }

        .pl-2 {
            display: inline;
        }

        /* html {
            overflow-x: hidden !important;
        } */
        /* #content-wrapper {
            overflow: visible;
            width: 100%;
            overflow-x: hidden;
            overflow-y: hidden;
        } */

        /*#wrapper::-webkit-scrollbar {
                display: none;
            }
        /* @media screen and (min-width: 320px) and (max-width: 770px) {} */
        #Div2 {
            display: none;
        }
    </style>
</head>

<body id="page-top">
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
            <li class="nav-item">
                <a class="nav-link" href="/LMSDashboard/Admin/index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="/LMSDashboard/Admin/teacherinfo.php">
                    <i class="fas fa-fw fa-light fa-user"></i>
                    <span>Teacher</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/LMSDashboard/Admin/studentinfo.php">
                    <i class="fas fa-fw fa-light fa-user"></i>
                    <span>Student</span></a>
            </li>

            <!-- <li class="nav-item active">
                <a class="nav-link" href="/LMSDashboard/Admin/course_layout.php">
                    <i class="fas fa-fw fa-light fa-layer-group"></i>
                    <span>Course</span></a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-light fa-layer-group"></i>
                    <span>Course</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Course Details:</h6>
                        <a class="collapse-item" href="/LMSDashboard/Admin/course.php">List</a>
                        <a class="collapse-item" href="/LMSDashboard/Admin/semester_wise_course.php">Semester Wise List</a>
                    </div>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/LMSDashboard/Admin/course_registration.php">
                    <i class="fas fa-fw fa-light fa-layer-group"></i>
                    <span>Course Registration</span></a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="/LMSDashboard/Admin/setting.php">
                <i class="fas fa-fw fa-light fa-wrench"></i>
                    <span>Setting</span></a>
            </li> -->
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
                    <h2 class="text-center display-8 text-center font-weight-bolder">Course Registration</h2>
                    <form action="" method="GET">
                        <div class="input-group mb-3 w-75">
                            <input type="text" name="search" required value="<?php if (isset($_GET['value'])) {
                                                                                    echo $_GET['value'];
                                                                                } ?>" class="form-control" placeholder="Filter Courses Semester Wise">
                            <button type="submit" class="btn btn-danger">Find</button>
                        </div>


                    </form>
                    <div class="row">
                        <div class="col-9">

                            <br>

                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center">
                                            <tr class="bg-primary text-white">

                                                <td>Code</td>
                                                <td>Course Name</td>
                                                <td>Credit Hour</td>
                                                <td>Semester</td>
                                                <!-- <td>Year</td> -->


                                            </tr>
                                            <tr>

                                                <?php
                                                $cquery = "select * from course as cs inner join register_semester as rs ON cs.smr_id=rs.smr_id";
                                                $cresult = mysqli_query($connect, $cquery);
                                                // print_r($cresult); exit;
                                                if (isset($_GET['search'])) {

                                                    $filtervalues = $_GET['search'];
                                                    // echo $filtervalues;
                                                    // exit;
                                                    $cquery = "SELECT * from course where Semester like '%$filtervalues%';";
                                                    $cresult = mysqli_query($connect, $cquery);
                                                }
                                                while ($row = mysqli_fetch_assoc($cresult)) {
                                                ?>

                                                    <td><?php echo $row['code'] ?></td>
                                                    <td><?php echo $row['name'] ?></td>
                                                    <td><?php echo $row['credit_hour'] ?></td>
                                                    <td><?php echo $row['SemesterName'] . '-' . $row['Year'] ?></td>



                                            </tr>
                                        <?php
                                                }
                                        ?>


                                        </table>
                                    </div>
                                </div>

                            </div>



                        </div>
                        <div class="col-3">
                            <div class="card mt-4">
                                <div class="card-body">
                                    <div class="row pl-2 pr-2">
                                        <a href="/LMSDashboard/Admin/register_semester.php" class="btn btn-success mt-2 w-50">Add Semester</a>
                                        <a onclick="showAlert()" href="/LMSDashboard/Admin/offered_course.php" class="btn btn-warning mt-2 w-50">Offer Course</a>
                                    </div>
                                    <br><br>
                                    <div class="card" id="Div1">
                                        <div class="card-header bg-secondary text-white">
                                            Enable Registration
                                        </div>
                                        <div class="card-body">
                                            <label for="form-label">Semester:</label>
                                            <form action="POST">
                                                <?php
                                                $rquery = "SELECT concat(SemesterName,\"-\",Year) as Semester from register_semester;";

                                                $rresult = mysqli_query($connect, $rquery);
                                                // echo json_encode($rresult);
                                                // exit;
                                                ?>
                                                <select required id="ddlViewBy" name="SemesterName" class="form-select" aria-label="Default select example">
                                                    <option selected>Select Semester</option>
                                                    <?php
                                                    while ($row = mysqli_fetch_assoc($rresult)) {
                                                        //for ($i = 1; $i <= $rresult; $i++) {
                                                        //$row = mysqli_fetch_assoc($rresult);

                                                    ?>
                                                        <option value="<?php echo $row["Semester"] ?>"><?php echo $row["Semester"] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                                <a id="Button1" name="sem" class="btn btn-info mt-2">Enable</a>

                                                <!-- <script>
                                                    const targetDiv = document.getElementById("third");
                                                    const btn = document.getElementById("toggle");
                                                    btn.onclick = function() {
                                                        if (targetDiv.style.display !== "none") {
                                                            targetDiv.style.display = "none";
                                                        } else {
                                                            targetDiv.style.display = "block";
                                                        }
                                                    };
                                                </script> -->
                                            </form>


                                        </div>
                                    </div>
                                    <div class="card" id="Div2">
                                        <div class="card-body">
                                            Registrations are now opened for seleted semester.
                                            <!-- <script>
                                                var e = document.getElementById("ddlViewBy");

                                                function onChange() {
                                                    var value = e.value;
                                                    var text = e.options[e.selectedIndex].text;
                                                    console.log(value, text);
                                                    
                                                    
                                                }
                                                e.onchange = onChange;
                                                onChange();
                                            </script> -->

                                            <!-- <?php
                                                    if (isset($_POST['sem'])) {
                                                        if (!empty($_POST['SemesterName'])) {
                                                            $selected = $_POST['SemesterName'];
                                                            echo "Registration are now opened for" . $selected;
                                                        } else {
                                                            echo "Please select option";
                                                        }
                                                    }
                                                    ?> -->



                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <script>
                var div1 = document.getElementById('Div1'),
                    div2 = document.getElementById('Div2');

                function switchVisible() {
                    if (!div1) return;
                    if (getComputedStyle(div1).display == 'block') {
                        div1.style.display = 'none';
                        div2.style.display = 'block';
                    } else {
                        div1.style.display = 'block';
                        div2.style.display = 'none';
                    }
                }
                document.getElementById('Button1').addEventListener('click', switchVisible);
            </script>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button -->
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
                            <a class="btn btn-primary" href="/LMSDashboard/login.php">Logout</a>
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
            <!-- <script type="text/javascript">
                                $(document).ready(function() {
                                    $("#fetchval").on('change', function() {
                                        var value = $(this).val();
                                        //alert(value);
                                        $.ajax({
                                            url: "/LMSDashboard/Admin/fetch.php",
                                            type: "POST",
                                            data: 'request='.value,
                                            
                                            success: function() {
                                                $(".aj").html(data);
                                            }
                                        });
                                    });
                                });
                            </script> -->
</body>

</html>