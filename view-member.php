<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" class="">
    <title>Memebers</title>
</head>
<body>
<?php 
include('admin-sidebar.php');
include('partials/db.php');

$query="Select * from members";
$result = mysqli_query($conn,$query);
$row_no = mysqli_num_rows($result);
$row_users = mysqli_fetch_array($result);

?>

<div class="container-fluid justify-content-center p-0 m-0 ">
<h2>------<strong class="font-size-20 ">Members</strong>------</h2>

<table  class="table bg-light ">
  <thead  >
    <tr class="bg-black text-white">
      <th scope="col">#</th> 
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Username</th>
      <th scope="col">Address</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Date of Joining</th>
      <th scope="col">Membership</th>
      <th scope="col">Plan</th>
      <th scope="col">Contact</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
    </thead>
    <?php 
      
      while ($row_users = mysqli_fetch_array($result)) {
    ?>
         
      <tr>
        <td><?php  echo $row_users['member_id']; ?> </td>
        <td><?php  echo $row_users['fname']; ?> </td>
        <td><?php  echo $row_users['lname']; ?> </td>
        <td><?php  echo $row_users['username']; ?> </td>
        <td><?php  echo $row_users['address']; ?> </td>
        <td><?php  echo $row_users['dob']; ?> </td>
        <td><?php  echo $row_users['doj']; ?> </td>
        <td><?php  echo $row_users['membership']; ?> </td>
        <td><?php  echo $row_users['plan']; ?> </td>
        <td><?php  echo $row_users['phone']; ?> </td>
        <td><?php  echo $row_users['email']; ?> </td>
        <td><?php  echo $row_users['password']; ?> </td>
      </tr>

      <?php } ?>



  </div>
</body>
</html>