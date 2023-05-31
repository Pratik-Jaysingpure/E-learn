<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


    $email=$_GET['email'];
    $query = "delete from ltable where email='$email'";
    $con=@mysqli_connect('localhost', 'root', '' ,'ldata') or die ('Server Not Available');
  @mysqli_select_db($con,'ldata') or die ('Database Not Available');
    mysqli_query($con,$query);
   header("Location: editview.php");
?>