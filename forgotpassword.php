<!DOCTYPE html>
<html>

<head>
    <title>Admin logout</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
    body {
        background: #f3eee8;
    }

    .card {
        box-shadow: 0 1px 1px 0 rgba(60, 75, 100, .14), 0 2px 1px -1px rgba(60, 75, 100, .12), 0 1px 3px 0 rgba(60, 75, 100, .2);
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="card" style="margin-top:10%; padding:20px">
                    <div class="card-header">
                        <h4> forgot password</h4>
                        <p>
                            Please enter your details.
                        </p>

                    </div>
                    <br>
                    <form class="form-group" method="POST" action="">

                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Enter your email"
                                required>
                        </div>


                        <div class="form-group">
                            <input type="password" class="form-control" name="password"
                                placeholder="Enter your password" required>
                        </div>
                        <hr>
                        <div>
                            <input type="submit" name="logout" value="logout" class="btn btn-outline-primary">

                            <a style="float:right" href="../logout.php"> forgot password </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>