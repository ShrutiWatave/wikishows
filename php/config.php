<?php
    $db = mysqli_connect("localhost","root","");

    $makeDb = "CREATE DATABASE wtprojectdb;";

    mysqli_query($db,$makeDb);

    mysqli_close($db);

    $db = mysqli_connect("localhost","root","","wtprojectdb");

    $makeTable = "CREATE TABLE IF NOT EXISTS signup(id int not null AUTO_INCREMENT UNIQUE,pname varchar(50) not null UNIQUE,email varchar(30) not null UNIQUE,pass varchar(30) not null UNIQUE,gender varchar(10) not null,contact varchar(20) not null UNIQUE,email_send varchar(5) not null);";

    $makeTable2 = "CREATE TABLE IF NOT EXISTS editreq(id int not null AUTO_INCREMENT UNIQUE,pname varchar(50) not null,email varchar(30) not null,show_name varchar(30) not null,edit varchar(50) not null);";


    mysqli_query($db,$makeTable);

    mysqli_query($db,$makeTable2);

?>