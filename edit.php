<?php
  
  $email=$_GET['email'];
  $query = "select * from ltable where email='$email'";
  $con=@mysqli_connect('localhost', 'root', '','pdata') or die ('Server Not Available');
  @mysqli_select_db($con ,'ldata') or die ('Database Not Available');
  $result = mysqli_query($con,$query);
  $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
  <head>
      <title></title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">   
  </head>
  <center>
  <body>
      <form action="updateview.php" method="get">
          <table width="50%" cellpadding="10">
               <tbody>
                  <tr>
                      <td>FIRSTNAME :</td>
                      <td><input type="text" id="name" name="firstname" value="<?php echo $row['firstname'];?>" />*</td>
                  </tr>
                  <tr>
                      <td>LASTNAME: </td>
                      <td><input type="text" id="name"  name="lastname" value="<?php echo $row['lastname'];?>" />*</td>
              
                  </tr>
                  <tr>
                      <td>EMAIL: </td>
                      <td><input type="email" id="name "name="email" value="<?php echo $row['email'];?>" />*</td>
              
                  </tr>
                  <tr>
                      <td>PASSWORD: </td>
                      <td><input type="text" name="password" value="<?php echo $row['password'];?>" />*</td>
              
                  </tr>
                  <tr>
                      <td>GENDER: </td>
                      <td><input type="text" name="gender" id="gender" value="<?php echo $row['gender'];?>" />*</td>
              
                  </tr>
                  <tr>
                      
                 
                  
                  
                      <td align="center" colspan="2">
                          
                          <input type="submit"  value="Update view" />
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input type="button" onclick="history.go(-1);"  value="Cancel" />
                      </td>
                  </tr>                    
              </tbody>
          </table>
      </form>
      </center>
  </body>
</html>
