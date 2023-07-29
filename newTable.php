<?php
// Tables data name

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $Position = $_POST['position'];
    $Office = $_POST['office'];
    $Age = $_POST['age'];
    $date = $_POST['date'];
    $Salary = $_POST['salary'];


    // Database connection  
    $serverName = 'localhost';
    $userName = 'root';
    $password = '';

    $dbName = 'jobtable';

    // Connection done
    $conn = mysqli_connect($serverName, $userName, $password, $dbName);

    // inset tables data
    $sql = "INSERT INTO jobdata(names,positions,office,ages,dates,salary) 
    VALUE('$name','$Position','$Office','$Age','$date','$Salary')";

    mysqli_query($conn, $sql);
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

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include './sideBar.php';
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include './topNavBar.php';
                ?>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container">
                    <div class="card">
                        <div class="card-body ">
                            <h4 class="table-title text-center mt-1 text-danger font-weight-bold ">
                                New table
                                data
                                Entry</h4>
                            <form action="" method="post">
                                <div class="row my-3">
                                    <div class="col">
                                        <label for="formName">Name</label>
                                        <input type="text" name="name" id="formName"
                                            class="form-control" placeholder="Enter your name"
                                            aria-label="First name" required>
                                    </div>
                                    <div class="col">
                                        <label for="formPosition">Position</label>
                                        <input type="text" name="position" id="formPosition"
                                            class="form-control"
                                            placeholder="Enter your job Position"
                                            aria-label="Last name" required>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col">
                                        <label for="formOffice">Office</label>
                                        <input type="text" name="office" id="formOffice"
                                            class="form-control"
                                            placeholder="Enter your Office city"
                                            aria-label="First name" required>
                                    </div>
                                    <div class="col">
                                        <label for="formAge">Age</label>
                                        <input type="text" name="age" id="formAge"
                                            class="form-control" placeholder="Enter your Age"
                                            aria-label="Last name" required>
                                    </div>
                                    <div class="col">
                                        <label for="formDate">Start date</label>
                                        <input type="date" name="date" id="formDate"
                                            class="form-control" aria-label="Last name" required>
                                    </div>
                                    <div class="col">
                                        <label for="formSalary">Salary</label>
                                        <input type="text" name="salary" id="formSalary"
                                            class="form-control" placeholder="Enter your job Salary"
                                            aria-label="Last name" required>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center ">
                                    <button name="submit" class="w-25 btn btn-success"
                                        type="submit">Submit</button>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            include './footer.php';
            ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your
                    current
                    session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button"
                        data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
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

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>