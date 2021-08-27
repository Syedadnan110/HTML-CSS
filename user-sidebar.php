<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/adminstyle.css">
    <title> Dashboard | User </title>
</head>
<body>
 
  <div class="d-flex" id="wrapper">
      <!--   side bar starts -->
      <div class="bg-black sidebar" id="sidebar-wrapper">
          
          <nav class='animated bounceInDown bg-black'>

          <div class="sidebar-heading text-center py-4 fs-4">
            <i class=" fas fa-user-secret me-2 white"> Moonstar Fitness</i>
          </div>

    	<ul>
    		<li><a href='user-dashboard.php'>Dashboard</a></li>
    		<li class='sub-menu'><a href='training.php'>My Training<div class='fa fa-caret-down right'></div></a>
    		</li>
    		<li><a href='workouts.php'>Workouts</a></li>
        <li class='sub-menu'><a href='#'>Settings<div class='fa fa-caret-down right'></div></a>
    			<ul>
    				<li><a href='myprofile.php'>My Profile</a></li>
    				<li><a href='#'>Date & Time</a></li>
    				<li><a href='#'>Language</a></li>
    				<li><a href='#' class="bg-danger">Logout</a></li>
    			</ul>
    		</li>
      </ul>
    </nav>
    </div>
   <!-- side bar ends -->



   <!-- jQuery -->
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script>
      $('.sub-menu ul').hide();
        $(".sub-menu a").click(function () {
          $(this).parent(".sub-menu").children("ul").slideToggle("100");
          $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
         });
      </script>
  
   <script src="jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>    
</body>
</html>