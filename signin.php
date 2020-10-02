<!DOCTYPE html>
<html>
    <head>
        <title>Sign In</title>
        <link rel="stylesheet" href="bootstrap.css">
        <style>
            body{
                background: #f3eee8;
            }
            .card {
                box-shadow: 0 1px 1px 0 rgba(60,75,100,.14), 0 2px 1px -1px rgba(60,75,100,.12), 0 1px 3px 0 rgba(60,75,100,.2);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <div class="card" style="margin-top:17%; padding:20px">
                        <div class="card-header">
                            <h4> Sign In</h4>
                            <p>
                                Please enter your details.
                            </p>
                                                    </div>
                        <br>
                        <form class="form-group" method="POST" action="">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Enter your email" required> 
                            </div>
                            
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
                            </div>
    
                            <hr>
                           <div>
                               <input type="submit" value="Sign In" name="submit" class="btn btn-outline-primary">

                               <a style="float:right" href="./forgotpassword.php"> Forgot password </a>
                           </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>