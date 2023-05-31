<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */





$firstname= $_REQUEST['firstname'];
$lastname= $_REQUEST['lastname'];
$email= $_REQUEST['email'];
$password=$_REQUEST['password'];
$gender= $_REQUEST['gender'];

 $query = "update ltable set firstname='$firstname ',lastname='$lastname' ,email='$email',password='$password',gender='$gender' where email=trim('$email')";
    $con =@mysqli_connect('localhost', 'root', '') or die ('Server Not Available');
    @mysqli_select_db( $con ,'ldata') or die ('Database Not Available');
    
    mysqli_query( $con,$query);
    header("Location: editview.php");
?>


