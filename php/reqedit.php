<?php
    include("config.php");

    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $show= $_REQUEST['show_name'];      
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $name= $_REQUEST['name'];
        $email= $_REQUEST['email'];
        $show_name= $_REQUEST['show_name'];
        $edit= $_REQUEST['edit'];

        $addreq = "INSERT INTO editreq(pname,email,show_name,edit) VALUES('".$name."','".$email."','".$show_name."','".$edit."');";

        if(mysqli_query($db,$addreq)){
            header("Location: ../pages/home.html");
        }
        else{
            echo "Failed to add user Error : ".mysqli_error($db);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/reqlogin.css">
   <title>Request Login</title>
</head>

<body>
   <div class="main">
      <h1 class="formhead">Have a Suggestion ?</h1>
      <h3 class="formheader">Requesting Edit</h3> <br> <br>
      <button class="btnhome" onclick="window.location.href='../pages/home.html'">Home</button>
      <form id="editreq" class="frm" action="" method="POST">

         <label class="boxlbl" id="lblname"><b>Name</b> (Who are you?):</label><br>
         <input class="boxinp" type="text" name="name" id="name" placeholder=" Darth Vader" required> <br><br>

         <label class="boxlbl" id="lblemail"><b>Email</b> (So We can contact you!): </label> <br>
         <input type="text" id="email" name="email" class="boxinp" placeholder=" ex:iamdarth@gmail.com" required>
         <br><br>

         <!-- <label class="boxlbl" id="lblemail"><b>Password</b></label> <br>
         <input type="password" id="pass" name="pass" class="boxinp" required> <br><br> -->

         <label class="boxlbl" id="lblshow_name"><b>Show Name</b> (Which show needs your wisdom?): </label>
         <input class="boxinp" type="text" name="show_name" id="show_name" placeholder=" ex:The Big Bang Theory" required value="<?php echo $show;?>"> <br><br>
         

         <label class="boxlbl" id="lbledit"><b>Edit</b> (Shower us with your wisdom!): </label>
         <input class="boxinp" type="text" name="edit" id="edit" required> <br><br>



         <!-- <button class="btns loginbtn" type="submit">Login</button> -->
         <button class="reqstacc" type="submit">Request Access</button>
         <button class="btns resetbtn" type="reset">Reset</button> <br> <br>

         <label class="notamem">Not a Member?</label>
         <button class="signupbtn" onclick="window.location.href='../forms/signup.html'" type="button">Sign-Up</button>

         <br><br> <br>


      </form>
      <script defer type="module" src="../js/reqedit.js"></script>
   </div>
</body>

</html>