<?php
       
       session_start();
       if(isset( $_SESSION['uname'])){

        header('location:home.php');
       }
         if($_POST){
         include 'connection.php'; 
         
				
		 if(isset($username) && isset($password)){
			$username = $_POST['uname'];
			$password = $_POST['pass'];
			
		}

           $sql	="SELECT * FROM `signup` WHERE username = '$username' && password = '$password'";
  
            $res=mysqli_query($con,$sql);
                 if($res)
                 {
                  $num=mysqli_num_rows($res);
                  if($num>0)
                  {
                          $_SESSION['uname']=$username;
                          header('location:home.php');
                  }
                  else{
                          echo 'INVALID INPUTS';
                  }
            }
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
                            <h2 class="text-white ">Sign In</h2>
                        </div>

                        <form class="mt-5" method = "post">
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
                                    Login
                                </button>
                            </div>

                            <div class="text-center mt-2">
                                <a href="#" class="text-warning">Forgot Password?</a>
                            </div>
                            
                            <div class="mt-5">
                                <p class="text-white text-center">
                                    Don't have an account?
                                    <a href="signup.php" class="text-warning">Click here to register</a>
                                </p>
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