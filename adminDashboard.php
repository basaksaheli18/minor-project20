
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
    <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: black;">
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
				<div class="row mx-5 text-center">
					<div class="col-sm-4 mt-5">
						<div class="card text-white bg-danger mb-3"
						style="max-width: 18rem;">
							<div class="card-header"> course list</div>
							<div class="card-body">
								<h4 class="card-title">
								3
								</h4>
								<a class="btn text-white" href="courses-list.php">view</a>
							</div>
						</div>
					</div>
					<div class="col-sm-4 mt-5">
						<div class="card text-white bg-success mb-3"
						style="max-width: 18rem;">
							<div class="card-header"> student list</div>
							<div class="card-body">
								<h4 class="card-title">
									3
								</h4>
								<a class="btn text-white" href="student.php">view</a>
							</div>
						</div>
					</div>
				</div>
				<div class="mx-5 mt-5 text-center">
					<!-- Table -->
					<p class="bg-dark text-white p-2">student courses</p>
					<table class="table">
						<thead>
							<tr>
								<th scope="col"> Course </th>
								<th scope="col"> Student Email </th>
								<th scope="col"> Admission Date </th>
								<th scope="col"> Amount </th>
								<th scope="col"> Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">BBA</th>
								<td>abcd@gmail.com</td>
								<td>13/10/2020</td>
								<td>2000</td>
								<td><button type="submit" class="btn
									btn-secondary" name="Delete" value="Delete"><i
									class="far fa-trash-alt">Delete</i></button></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	</div> <!-- div Row close from header --> 
	</div> <!-- div Container-fluid close frm header -->
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
	<!-- Jquery and Bootstrap Javascript -->
	<script type="text/javascript" src="../js/jquery.min.js">
	</script>
	<script type="text/javascript" src="../js/popper.min.js">
	</script>
	<script type="text/javascript" src="../js/bootstrap.min.js">
	</script>

	<!-- Font Awesome JS -->
	<script type="text/javascript" src="../js/all.min.js">
	</script>

	<!-- Admin Ajax Call Javascript -->
	<script type="text/javascript" src="../js/adminjaxrequst.js">
	</script>

	<!-- Custom Javascript -->
	<script type="text/javascript" src="../js/custom.js"></script>
</body> 
</html>