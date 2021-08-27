<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $cbox = $_POST['checkbox'];

  
include('partials/signup-process.php');
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
    <title>Sign-up | Moonstar</title>
</head>
<body>

        <div class="container signup-bdr round-signup">
                <div class="signup-form">
                    <h2 class="name"> MOONSTAR FITNESS CLUB</h2>
                    <h4> ------ <strong>Sign Up</strong>------</h4>
                    
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" class=" row ">
                        <div class="col py-3">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="fname" name="fname" class="form-control" id="fname">
                              </div>
                              <div class="col py-3">
                                 <label for="lname" class="form-label">Last Name</label>
                                 <input type="lname" name="lname" class="form-control" id="lname">
                              </div>
                              
                              <div class="col-12 py-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="name" name = "username" class="form-control" id="username" >
                              </div>
                              
                              <div class="col-12 py-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="address" name = "address" class="form-control" id="address" >
                              </div>
                              
                              <div class="col-12 py-3">
                                <label for="dob" class="form-label">Date of birth</label>
                                <input type="date" name = "dob" class="form-control" id="dob" >
                              </div>
                              
                              <div class="col-12 py-3">
                                <label for="doj" class="form-label">Date of joining</label>
                                <input type="date" name = "doj" class="form-control" id="doj" >
                              </div>
                              
                              <div class="selection col py-3">
                                <label for="membership" class="form-label">Membership</label>      
                                <select class="form-select " name="membership" id= "membership">
                                <option value="monthly/$6.99">Monthly <em>/$6.99</em> </option>
                                  <option value="annually/$54.99">Annually <em>/$54.99</em> </option>
                                 </select>
                              </div>
                              
                              <div class="selection col py-3">
                                <label for="membership" class="form-label">Plan</label>      
                                <select class="form-select" name="plan" id= "plan">
                                  <option value="bronze">Bronze</option>
                                  <option value="silver">Silver</option>
                                  <option value="gold">Gold</option>
                                </select>
                              </div>    
                              <div class="col-12 py-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name = "email" class="form-control" id="email" >
                              </div>

                              <div class="col-12 py-3">
                                <label for="tel" class="form-label">Phone No.</label>
                                <input type="tel" name = "phone" class="form-control" id="phone" >
                              </div>
                              
                              <div class="col-12 py-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name = "password" class="form-control" id="password"> 
                              </div>
                            <div class="col-12 py-3 " >
                              <div class="form-check  ">
                                <input class="form-check-input " name="checkbox" type="checkbox" id="checkbox">
                                <label class="form-check-label " for="gridCheck">
                                  I accept the <a href="#">Terms of Use</a> & <a href="#">Privay Policy.</a>
                                </label>
                              </div>
                            </div>
                            <div class="buttons">
                               <input type="Submit" value = "Register" class="btn btn-dark">
                          </div>

                </div>
        </div>      
    <script src="jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>    
</body>
</html>