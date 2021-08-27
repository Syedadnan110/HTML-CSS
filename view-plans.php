<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" class="">
    <title>Plans</title>
</head>
<body>
<?php 
include('admin-sidebar.php');
include('partials/db.php');

$query="Select * from members";
$result1 = mysqli_query($conn,$query);
$result2 = mysqli_query($conn,$query);

$options = "";
while($row2 = mysqli_fetch_array($result2))
{

  $options = $options."<option> $row2[1]</option>";
}
?>


<div class="container-fluid justify-content-center p-0 m-0 ">
<h2>------<strong class="font-size-20 ">Plans</strong>------</h2>


      <select>

      <?php while($row1 = mysqli_fetch_array($result1)):; ?>  
        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?> </option>
        <?php endwhile; ?>
      </select>

<select>
  <?php echo  $options; ?>
</select>

</table>

</div>
</body>
</html>