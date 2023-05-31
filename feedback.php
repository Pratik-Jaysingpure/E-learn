<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */



$yourname =$_POST['yourname'];
$email =$_POST['email'];
$details =$_POST['details'];

$con = @mysqli_connect('localhost','root','','fdata');
$query =  "insert into ftable values('$yourname','$email','$details')";
$result = mysqli_query($con, $query);

if (isset($_POST['yourname'])) {
    // Process the form data
} else {
    // Handle the case when the 'yourname' field is not set
}


if($result)
{
   echo   "  <center> <h2> Data Inserted Sucessfully  </h2> </center> ";
}
else 
{
    echo "data not inserted sucessfully ";
}
?>


<html>
    <body>
        <?php
        if ($result==1)
        {
            ?>
        <br><!-- comment -->
          
    <center>   <h2>Your Name </h2><?php echo $yourname;?>
        <h2>Your Email </h2><?php echo $email;?>
        <h2>Additional Details</h2><?php echo $details;?> </center> 
        <?php 
        }
  ?>
    </body>
</html>