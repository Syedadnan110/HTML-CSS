<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" class="">
    <title>Users</title>
</head>
<body>
<?php 
include('admin-sidebar.php');
include('partials/db.php');

$query="Select * from users";
$result = mysqli_query($conn,$query);
$row_no = mysqli_num_rows($result);
$row_users = mysqli_fetch_array($result);

?>
<div class="container-fluid justify-content-center p-0 m-0 ">
<h2>------<strong class="font-size-20">Users</strong>------</h2>

<table  class="table bg-light">
  <thead  >
    <tr class="bg-black text-white">
      <th scope="col">#</th> 
      <th scope="col">Username</th>
      <th scope="col">Pasword</th>
      <th scope="col">User role</th>
    </tr>
    </thead>
    <?php 
      
      while ($row_users = mysqli_fetch_array($result)) {
    ?>
         
      <tr>
        <td><?php  echo $row_users['user_id']; ?> </td>
        <td><?php  echo $row_users['user_name']; ?> </td>
        <td><?php  echo $row_users['user_password']; ?> </td>
        <td><?php  echo $row_users['user_role']; ?> </td>
      </tr>

      <?php } ?>

</table>
</div>
</body>
</html>