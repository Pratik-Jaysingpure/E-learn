<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */



/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$email=$_GET['email'];
$password=$_GET['password'];
$con =@mysqli_connect('localhost','root','','ldata');
$query =  "select email,password from ltable where email='$email' and password ='$password'";
$result = mysqli_query($con, $query);

$count=mysqli_num_rows($result);
echo $count;

/*while($row = mysqli_fetch_assoc($result)){
    
    if($row['email']== $email &&
      $row['password']== $password)
    {
        echo "user exist "; 
    }
    else{
        echo "user does't exist ";
    }
}*/

  ?>

  <html>
    <body>
    <center>
        <?php 
        if($count==0)
        {
                           ?>

                                    <h4>User Doesn'tExist:</h4><br>
                                    <h4><a href="register.html">  Go to Registration Page </a><h4>
                                    <?php echo "";
                                    ?>
       
                           <?php
                           }
    
                           else if($email=="admin1@gmail.com" && $password=='11111')
                           {
       
                           ?>

                            <h4>User Exist!!!</h4>
                            <h4><a href="admin.html"><button> Go To Admin</button></a></h4>
                            <?php echo "";
                            ?>
                          
                          <?php
                           }
                          
                          else{
                          
                          ?>
                            <h2> User Exist:</h2>
                            <h4><a href="index.html">Go to Home page</a></h4>
                            <?php echo "";
                          }
                            ?>
                            
   </center>
   </body>
</html>
