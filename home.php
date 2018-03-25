<?php
    session_start();
    $update_msg="";
    if(!isset($_SESSION['uid']))
            {
                    header("location: index.php");
            }
    if(isset($_SESSION['update_success']))
    {
        $update_msg="Contact Successfully Updated !";
        unset($_SESSION['update_success']);
    }
    

    $uid = $_SESSION["uid"];
?>

<html>

<head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/jquery-1.12.2.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <title> Dashboard </title>
    <link rel="shortcut icon" type="image/x-icon" href="vesit.png" />
</head>

<body>

<nav class="navbar navbar-inverse">

    <div class="container-fluid">

        <div class="navbar-header">
            <a href="#" class="navbar-brand" > VESIT Directory </a>
        </div>

        <div>
            <ul class="nav navbar-nav">
                <li class="active"> <a href="home.php"> Home </a> </li>
                <li><a href="create.php"> Create </a></li>
                <li><a href="delete.php"> Delete </a></li>
                <li><a href="search.php"> Search </a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $uid ; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="php/logout.php">Log-Out</a></li>

                    </ul>
                </li>

            </ul>

        </div>

    </div>

</nav>

<div class="container-fluid">

    <div class="row">

        <div class="col-xs-2" >

        </div>

        <div class="col-xs-8" style="background-color:white ">
            
            <div class="jumbotron text-center">
                <h1>VESIT Online Telephone Directory</h1>
                <p>VESIT online directory offers users an easy way to create new contacts , manage existing and search for contacts based on criteria. </p>
            </div>

            <br><br>
            <h3 align="center" class="text-success"><?php echo $update_msg ; ?></h3>

        </div>

    </div>

</div>

<div class="footer" style="position: absolute; bottom: 10px; left: 0; right: 0; text-align: center; padding: 3px;">
        &copy;2017 Sagar-Rahul All rights reserved
    </div>
</body>

</html>