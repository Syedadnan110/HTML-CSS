<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Membership</title>
</head>
<body>
<?php include('header.php') ?>   
    

            <div class="vmain d-sm-flex justify-content-center">
            <div class="membership-container d-sm-flex justify-content-center design p-5 gap-4 ">        
                <div class="monthly design  ">
                 
                    <div class="upper p-4">       
                    <h2>Monthly</h2>
                    <p> <span class="price">$6.99</span> <strong>/mon</strong> 
                        <br> <strong>billed each month</strong>    
                    </p>
                    <a type="button" href="signup.php" class="btn btn-dark btn-lg "> Start Free Trail </a>
                </div>
                       
                    <div class="lower lh-lg">
                       <ul>
                        <li>Start free for 1 week, cancel anytime</li>
                        <li>Unlimited access to club</li>
                        <li>Free WiFi</li>
                        <li>Free fitness training</li>
                        <li>Use limited equipment </li>
                       </ul>

                    </div>
                </div>
                
                <div class="annual design ">
                    <div class="upper p-4">
                        <h2>Annual</h2>
                        <p> <span class="price">$54.99</span> <strong>/year</strong> 
                        <br> <strong>billed once annually</strong>    
                        <a type="button" href="signup.php" class="btn btn-dark btn-lg "> Start Free Trail</a>
                        </p>
                    </div>
                    <div class="lower lh-lg">
                        <ul >
                            <li>Start free for 1 week, cancel anytime</li>
                            <li>Unlimited access to club</li>
                            <li>Free WiFi</li>
                            <li>Free fitness training</li>
                            <li>20% Off on Drinks</li>
                            <li>Use of every equipment</li>
                           </ul>    
                        
                    </div>
                </div>
                            
                    
             </div>
            </div>
        </div>

        <?php include('footer.php'); ?>

    <script src="jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>    
</body>
</html>