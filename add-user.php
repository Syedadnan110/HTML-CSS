<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name = $_POST['username'];
  $pass = $_POST['password'];
  $userrole = $_POST['userrole'];
  include('partials/add-user-process.php');

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>  
  
<?php  
  include('admin-sidebar.php')
?>  

<div class="container-fluid bg-white  p-0 m-0">
<h2>------ <strong class="font-size-20">Add a user</strong>------</h2>
  <div class="container d-sm-flex justify-content-center ">  
<div class="add-user-form justify-content-center ">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" class="row" >
                    <div class="col-12 py-3">
                      <label for="username" class="form-label">Username</label>
                      <input type="text" name = "username" class="form-control" id="username" >
                    </div>
                    
                    <div class="col-12 py-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name = "password" class="form-control" id="password"> 
                    </div>
                    <div class="selection col-12 py-3">
                    <label for="userrole" class="form-label">User Role</label>
                    <select class="form-select " name="userrole" id= "userrole">
                        <option value="Admin">Admin</option>
                        <option value="Manager">Manager</option>
                        <option value="Moderator">Moderator</option>
                    </select>
                    </div>                    
                    <input type="submit" name="submit" class="btn btn-dark " value = "Add a user" >
                  
                </form>
        </div>
        </div>
</div>
</body>
</html>