<?php
    session_start();

      if(isset($_SESSION['uname'])){
          header('location:home.php');
      }


require_once "connection.php";

if($_POST)
{
    $username = $_POST['uname'];
    $password = $_POST['pass'];
   
 
    $sql = "insert into signup (uname,pass,)VALUES('$username','$password')";
    $res = $con->query($sql);
    if($res)
            header("Location:login.php");
       
        else
            echo "failed2";       
       
} 
          
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="j.css">
    <title>Document</title>
</head>
<body>
<center>
 <div class="nl">
   
        <div class="col-4">
                    <div class="login-purple-pink p-3 shadow-lg rounded">
                        <div class="pt-3">
                            <h2 class="text-white ">Sign Up</h2>
                        </div>

                        <form class="mt-5" action="insert.php" method="post">
                                <div class="form-group">
                                    <input type="text" 
                                        class="form-control form-control-sm bg-light" 
                                        placeholder="Enter Username" name="uname">
                                </div>

                                <div class="form-group">
                                    <input type="password" 
                                        class="form-control form-control-sm bg-light" 
                                        placeholder="Password" name="pass">
                                </div>

                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="rememberCheckBox">
                                    <label class="form-check-label text-light" for="rememberCheckBox">Remember me?</label>
                                </div>

                                <div class="mt-5">
                                    <button class="btn btn-sm btn-light col">
                                        Confirm
                                    </button>
                                </div>

                            

                        </form>
                    </div>
                </div>
        </div>
     
</div>
</center>




        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
<style>
    body{
        background-color: black;
    }
    .nl{
        position: relative;
        top:120px;
     
    }
</style>
</html>
