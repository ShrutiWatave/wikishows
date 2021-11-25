<?php
    include("config.php");

    $name= $_REQUEST['name'];
    $email= $_REQUEST['email'];
    $password= $_REQUEST['pass'];
    $gender= $_REQUEST['gender'];
    $contact= $_REQUEST['contact'];
    $email_send= $_REQUEST['eml'];

    echo "Name : ".$name." Email : ".$email." Password : ".$password." Gender : ".$gender." Contact : ".$contact." Email Send : ".$email_send;

    $adduser = "INSERT INTO signup(pname,email,pass,gender,contact,email_send) VALUES('".$name."','".$email."','".$password."','".$gender."','".$contact."','".$email_send."');";

    if(mysqli_query($db,$adduser)){
        echo "Added user sucessfully";
    }
    else{
        echo "Failed to add user Error : ".mysqli_error($db);
    }
?>