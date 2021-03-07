<?php
include('../dbConnection.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width,
initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> DASHBOARD </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/adminstyle.css">

    <!-- Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

</head>

<body>
    <!-- Top Navbar-->

    <body>
        <!-- Top Navbar -->
        <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: green;">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="adminDashboard.php">LMS- Learning Management System
                <small class="text-white"> Admin Area</small></a>
        </nav>

        <!-- Side Bar -->
        <div class="container-fluid mb-5" style="margin-top: 40px;">
            <div class="row">
                <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="adminDashboard.php">
                                    <i class="fas fa-techometer-alt"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="courses-list.php">
                                    <i class="fab fa-accssible-icon"></i>
                                    course list
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="student.php">
                                    <i class="fab fa-accssible-icon"></i>
                                    student list
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">
                                    <i class="fab fa-accssible-icon"></i>
                                    log out
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="col-sm-9 mt-5">
                    <!-- Table -->
                    <p class="bg-dark text-white p-2"> Student List</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"> sl no </th>
                                <th scope="col"> student Name </th>
                                <th scope="col"> email </th>
                                <th scope="col"> phone number </th>
                                <th scope="col"> action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"> 01 </th>
                                <td> Rounak Manna</td>
                                <td> rounakmanna08@gmail.com</td>
                                <td> 1234567893</td>
                                <td><button type="submit" class="btn btn-info mr-3" name="delete" value="Delete">
                                        <i class="fas fa-trash-alt">Delete</i></button>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th scope="row"> 02 </th>
                                <td> Sammanay Sarkar </td>
                                <td> abc12@gmail.com</td>
                                <td> 9001234523</td>
                                <td><button type="submit" class="btn btn-info mr-3" name="delete" value="Delete">
                                        <i class="fas fa-trash-alt">Delete</i></button>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th scope="row"> 03 </th>
                                <td> Sudarpan Paul</td>
                                <td> bght42@gmail.com</td>
                                <td> 7854387523</td>
                                <td><button type="submit" class="btn btn-info mr-3" name="delete" value="Delete">
                                        <i class="fas fa-trash-alt">Delete</i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- div Row close from header -->
        </div>
        <!-- div Container-fluid close from header -->
        <footer class="footer footer-black  footer-white ">
            <div class="container-fluid">
                <div class="row">
                    <div class="credits ml-auto">
                        <span class="copyright">
                            © <script>
                            document.write(new Date().getFullYear())
                            </script>LMS
                        </span>
                    </div>
                </div>
            </div>
        </footer>
    </body>

</html>