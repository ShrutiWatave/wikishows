<?php
    include("config.php");
    
    $email= $_REQUEST['email'];
    $password= $_REQUEST['pass'];

    $getid = "SELECT id FROM signup WHERE email = '$email' and passcode = '$password'";
    
    $result = mysqli_query($db,$getid);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    
    $count = mysqli_num_rows($result);
      
    if($count == 1) {
        header("../pages/home.html");
    }else {
        <script type="text/JavaScript">
            alert("Your Login Name or Password is invalid");
        </script>
    }
?>