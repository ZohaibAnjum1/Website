<?php
$connect = mysqli_connect('localhost', 'root', '', 'lms');
session_start();
$error = false;

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users where username= '$username' AND 
        password= '$password'";

    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) == 1) {
        //echo "<script>alert('You are ready to go !')</script>";

        $role = "SELECT * FROM users where username= '$username' AND 
            password= '$password'";
        $roles = mysqli_query($connect, $role);

        $row = mysqli_fetch_assoc($roles);

        if ($row['role'] == "Admin") {
            $_SESSION['lms'] = $row;
            echo "<script>  window.location.href='Admin/index.php' </script>";
        } else if ($row['role'] == "teacher") {
            $_SESSION['lms'] = $row;
            echo "<script>  window.location.href='Teacher/teacher.php' </script>";
        } else if ($row['role'] == "student") {
            $_SESSION['lms'] = $row;
            echo "<script>  window.location.href='Student/student.php' </script>";
        }
    } else {

        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="">Username</label>
                                            <input type="text" name="username" class="form-control" placeholder="Enter your username">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Enter your password">
                                        </div>
                                        <br>
                                        <input type="submit" name="login" class="btn btn-info" value="login">
                                    </form>
                                    <?php
                                    if ($error == true) {
                                    ?>
                                        <div class="alert alert-danger" role="alert">
                                            Incorrect username or password
                                        </div>
                                    <?php
                                    }
                                    ?>




                                    <hr>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>