<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


$con = @mysqli_connect('localhost', 'root', '' ,'ldata') or die ('Server Not Available');
@mysqli_select_db($con ,'ldata') or die ('Database Not Available');
$query = "select * from ltable";
$result = mysqli_query($con ,$query);
$count = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>view Detail</title>
        <style>
            table,tr,th,td{
                border: 1px solid black;
                border-collapse: collapse;
            }
            td{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Total Client : <?php echo $count; ?></h1>
        <hr>
        <table border="0" width="100%" cellpadding="10">
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Gender</th>
                    
                              
                     <th>Edit/Delete</th>
                    
                </tr>
            </thead>
            <tbody>        
                <?php
                //$row = mysql_fetch_assoc($result);
                //$row = mysql_fetch_array($result);        

                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['lastname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                       
                        <td>
                            <a href="edit.php?email=<?php echo $row['email']; ?>">Edit</a>
                            &nbsp;&nbsp;&nbsp;
                            <a onclick="return confirm('Are You Sure');" href="deleteview.php?email=<?php echo $row['email']; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <br><br>
    <center><a href="index.html">HOME</a></li></center> 
    </body>
</html>

