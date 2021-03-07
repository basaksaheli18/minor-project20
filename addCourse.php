<?php
include('../dbConnection.php');



if(isset($_REQUEST['courseSubmitBtn'])){
	// checking for Empty Fields
if(($_REQUEST['course_id'] == "") || ($_REQUEST['course_name']
=="") || ($_REQUEST['course_duration'] == "")){
$msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2"> Fill All Fields</div>';
} else{
    $course_id = $_REQUEST['course_id'];
    $course_name = $_REQUEST['course_name'];
    $course_duration = $_REQUEST['course_duration'];

    if($conn->query($sql) == TRUE){
        $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2"> Course Added Succesfully</div>';
 
    } else {
        $msg = '<div class="alert alert-denger col-sm-6 ml-5 mt-2">Unable to Add Course</div>';

    }
}
  
}

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

</head>

<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: gray;">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="adminDashboard.php">LMS- Learning Management System <small
                class="text-white"> Admin Area</small></a>
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
                            <a class="nav-link" href="studentlist.php">
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


            <div class="col-sm-6 mt-5  mx-3 jumbotron">
                <h3 class="text-center"> ADD NEW COURSE </h3>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="course_id"> Course Id</label>
                        <input type="text" class="form-control" id="course_id" name="course_id">
                    </div>
                    <div class="form-group">
                        <label for="course_name"> Course Name </label>
                        <textarea class="form-control" id="course_name" name="course_name" row=2></textarea>
                    </div>
                    <div class="form-group">
                        <label for="course_duration">Course Duration</label>
                        <input type="text" class="form-control" id="course_duration" name="course_duration">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger" id="courseSubmitBtn"
                            name="courseSubmitBtn">Submit</button>
                        <a href="courses-list.php" class="btn btn-secondary"> Close </a>
                    </div>
                    <?php if(isset($msg)) {echo $msg;} ?>
                </form>
            </div>

        </div> <!-- div Row close from header -->
    </div> <!-- div Container-fluid close from header -->
</body>
</html>