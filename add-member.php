<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $user = $_POST['username'];
  $address = $_POST['address'];
  $dob = $_POST['dob'];
  $doj = $_POST['doj'];
  $membership = $_POST['membership'];
  $plan = $_POST['plan'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $password = $_POST['pass'];

include('partials/add-member-process.php');

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Member</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>  
  
<?php  
  include('admin-sidebar.php')
?>  

<div class="container-fluid bg-white p-0 m-0">
<h2>------ <strong class="font-size-20">Add a member</strong>------</h2>
<div class="container d-sm-flex justify-content-center ">
<div class="add-user-form justify-content-center  ">
                 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" class="row" >
                 <div class="col py-3">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="fname" name="fname" class="form-control" id="fname" required>
                              </div>
                              <div class="col py-3">
                                 <label for="lname" class="form-label">Last Name</label>
                                 <input type="lname" name="lname" class="form-control" id="lname" required>
                              </div>
                              
                              <div class="col-12 py-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="name" name = "username" class="form-control" id="username" required>
                              </div>
                              
                              <div class="col-12 py-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="address" name = "address" class="form-control" id="address" required>
                              </div>
                              
                              <div class="col-12 py-3">
                                <label for="dob" class="form-label">Date of birth</label>
                                <input type="date" name = "dob" class="form-control" id="dob" required>
                              </div>
                              
                              <div class="col-12 py-3">
                                <label for="doj" class="form-label">Date of joining</label>
                                <input type="date" name = "doj" class="form-control" id="doj" required>
                              </div>
                              
                              <div class="selection col py-3">
                                <label for="membership" class="form-label">Membership</label>      
                                <select class="form-select " name="membership" id= "membership" required>
                                  <option value="monthly/$6.99">Monthly <em>/$6.99</em> </option>
                                  <option value="annually/$54.99">Annually <em>/$54.99</em> </option>
                                </select>
                              </div>
                              
                              <div class="selection col py-3">
                                <label for="membership" class="form-label">Plan</label>      
                                <select class="form-select" name="plan" id= "plan" required>
                                  <option value="bronze">Bronze</option>
                                  <option value="silver">Silver</option>
                                  <option value="gold">Gold</option>
                                </select>
                              </div>    
                              <div class="col-12 py-3">
                                <label for="tel" class="form-label">Phone No.</label>
                                <input type="tel" name = "phone" class="form-control" id="phone" required >
                              </div>
                              
                              <div class="col-12 py-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name = "email" class="form-control" id="email" required>
                              </div>
                              
                              <div class="col-12 py-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name = "pass" class="form-control" id="pass" required> 
                              </div>                
                    <input type="submit" name="submit" class="btn btn-dark" value = "Add a member" >
                    
                  </form>
                </div>
                </div>
       
</div>
    
</body>
</html>