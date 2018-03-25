<?php

    session_start();

    $_SESSION['success']="false";

    require_once("connect.php");

    $fname = $_POST['txtfname'];
    $lname = $_POST['txtlname'];
    $dob = $_POST['txtdob'];
     $mobile = $_POST['txtmobile'];
    $email = $_POST['txtemail'];
    $pass = md5($_POST['txtpassword']);
    $secq = $_POST['txtq'];
    $seca = $_POST['txta'];

   if( mysqli_query($con," insert into _login values ('$fname','$lname','$dob',$mobile,'$email','$pass','$secq','$seca') ;"))
   {
        $_SESSION['success']="true";
        
        mysqli_query($con," insert into _users value('$email');") or die (" User registration failed !") ;
        
        $sql = " create table `$email`( 
        fname varchar(20),
        lname varchar(20),
        mobile BIGINT(10) unique,
        landline BIGINT(10),
        email varchar(20)primary key,
        public varchar(20))";
        mysqli_query($con,$sql);
        echo '<script type="text/javascript">
        window.location="../first.php"
        </script>';
        //header("Location: ..\first.php");
   }
   else
   {
        echo "<h1> Insert Failed </h1>";
   }

   


?>