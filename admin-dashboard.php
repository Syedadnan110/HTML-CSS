
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/adminstyle.css">
    <title> Dashboard | Administrator </title>
</head>
<body>
 
  <?php  
  include('sidebar.php')
    ?>  

  <div class="page-content-wrapper bg-white " >
  
  <nav class="navbar navbar-expand-lg navbar-light  py-4 px-4">
      <div class="d-flex align-items-center">
         <i class=" as fa-align-left  fs-4 me-3" id="menu-toggle"> </i>
        <h2 class="fs-2 m-0 primary-text">Dashboard</h2>
      </div>


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation"> 
      <span class="navbar-toggler-icon"></span>
    </button>
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">    
            <li><a href="#" class="dropdown-item black">Profile</a></li>
            <li><a href="#" class="dropdown-item">Setting</a></li>
            <li><a href="#" class="dropdown-item">Logout</a></li>
          </ul>  

          </li>

        </ul>
    </div>
  </nav>
  <div class="container ">
     <div class="row justify-content-md-center gap-lg-3">
    <div class=" members design-orange px-4 p-3 text-left col ">
      <h4> Members</h4>
    </div>
    <div class=" users px-4 design-blue p-3 text-left col">
      <h4> Users</h4>
    </div>
    <div class=" amount px-4  design-green p-3 text-left col">
      <h4> Total amount</h4>
    </div>
  </div>
  
</div>

</div>

</div>



  <script src="jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>    
</body>
</html>