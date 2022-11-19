<?php
   require_once "connection.php";

  
   $username = $_POST['uname'];
   $password = $_POST['pass'];
   

   $sql = "INSERT INTO `signup`(`username`, `password`) VALUES ('$username','$password')";
   $res = $con->query($sql);
   if($res)
           header("Location:login.php");
    else
           echo "failed";       
      
          

              