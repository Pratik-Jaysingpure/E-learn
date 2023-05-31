<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */



$firstname =$_POST['firstname'];
$lastname =$_POST['lastname'];
$email =$_POST['email'];
$password =$_POST['password'];
$gender=$_POST ['gender'];
$con = @mysqli_connect('localhost','root','','ldata');
$query =  "insert into ltable values('$firstname', '$lastname','$email','$password','$gender')";
$result = mysqli_query($con, $query);

if($result)
{
    echo "<center> <h2>Data Inserted Sucessfully </center> </h2>";
}
else 
{
    echo " <center> <h2> Data Not Inserted Sucessfully </center> </h2> ";
}
?>


<html>
    <body>
        <?php
        if ($result==1)
        {
            ?>
        <br>
    <center>   <h2>Your Full Name  </h2><?php echo $firstname,  ' ', $lastname ;?>
        <h2>Your Email </h2><?php echo $email;?>
        <h2>Your Password </h2><?php echo $password;?> </center> 
        <?php 
        }
  ?>
    </body>
</html>