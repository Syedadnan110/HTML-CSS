<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $email = $_POST['email'];
  $pass = $_POST['pass'];

  
include('partials/login-process.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login | Moonstar</title>
</head>
<body>
        <div class="container login-bdr round">
            <div class="login-form">
                    <h2 class="name">MOONSTAR FITNESS CLUB</h2>                   
                    <h4>------ <strong>Log In</strong>------</h4>
                    <form class="row">
                        <div class="col-12 py-3">
                          <label for="inputemail" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="inputemail" aria-describedby="emailHelp">
                        </div>
                        <div class="col-12 py-3">
                          <label for="inputpassword" class="form-label">Password</label>
                          <input type="password" class="form-control" id="inputPassword1"> 
                        </div>
                        
                        <div class="buttons py-3">
                                <a class="btn btn-dark" href="#">LOGIN</a>
                               <p>or</p> 
                                <a  class="btn btn-dark" href="signup.php">SIGNUP</a>
                        </div>
                    </form>
            </div>
           
        </div>      
    <script src="jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>    
</body>
</html>