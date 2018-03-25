<?php
    session_start();

   require_once("connect.php");
    
    $email = $_POST['txtuname'];
    $pass = $_POST['txtpass'];
    
    
    $result = mysqli_query($con," select * from _login where email='$email';") or die(" Error ");
    $data = mysqli_fetch_array($result);

    if( $data['email']==$email )
    {
        if($data['password']==md5($pass))
        {
            $_SESSION['uid']=$email;
            echo '<script type="text/javascript">
        window.location="../home.php"
        </script>';
            //header('Location: ..\home.php') or die(" Error ");
        }
        
    }
    else{
        $_SESSION['login_error']=true;
        echo '<script type="text/javascript">
        window.location="../first.php"
        </script>';
        //header("Location: ..\first.php") or die(" Error ");
    }
    mysqli_close($con);
  

?>