<?php
    include("config.php");
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $email= $_REQUEST['email'];
        $password= $_REQUEST['pass'];

        $getid = "SELECT id FROM signup WHERE email = '$email' and pass = '$password'";
        
        $result = mysqli_query($db,$getid);
        
        $count = mysqli_num_rows($result);

        if($count == 1) {
            header("Location: ../pages/home.html");
        }else {
            echo "<script type='text/JavaScript'>
                alert('Check your credentials and try again');    
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/login.css">
   <title>Login Page</title>
</head>
<body>

   <div class="container">
      <h1 class="formhead">Hello!</h1>
      <h3 class="formhead">Login Please</h3> <br> <br>
      <button class="btnhome" onclick="window.location.href='../pages/home.html'">Home</button>
      <form class="frm" action="" method="POST">

         <label class="boxlbl" id="lblemail"><b>Email</b> (Who are you?)</label> <br>
         <input type="text" id="email" name="email" class="boxinp" placeholder=" mymail@gmail.com" required> <br><br>
         
         <label class="boxlbl" id="lblemail"><b>Password</b></label> <br>
         <input type="password" id="pass" name="pass" class="boxinp" placeholder=" mypassword" required> <br><br>

         <button class="btns loginbtn" type="submit">Login</button>
         <button class="btns resetbtn" type="reset">Reset</button> <br>

         <label class="notamem">Not a Member?</label>
         <button class="signupbtn" onclick="window.location.href='../forms/signup.html'" type="button">Sign-Up</button>

         <br><br> <br>


      </form>
   </div>
</body>
</html>