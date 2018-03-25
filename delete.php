<?php
    session_start();

    if(!isset($_SESSION['uid']))
            {
            	echo '<script type="text/javascript">
        window.location="../index.php"
        </script>';
                    //header("location: index.php");
            }
			
	if(isset($_SESSION['delete_success']))
	{
		$del_msg=$_SESSION['delete_success'];
		unset($_SESSION['delete_success']);
	}
	else
		$del_msg="";

    $uid = $_SESSION["uid"];
?>
<html>

<head>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap/js/jquery-1.12.2.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<title> Delete Contact </title>
	<link rel="shortcut icon" type="image/x-icon" href="vesit.png" />

	<script type="text/javascript">
		
		function validateMob()
		{

				var mob = document.getElementById('mob').value;
				var chk=0;

				if(mob.length==10 && (/^\d{10}$/.test(mob)))
				{
					
				}
				else
				{
					alert("Enter 10 digit mobile number");
					chk++;
				}

				if(chk==0)
				{
					return true;
				}
				else
				{
					return false;
				}
				
		}

	</script>
</head>

<body>

<nav class="navbar navbar-inverse">

	<div class="container-fluid">

		<div class="navbar-header">
			<a href="home.php" class="navbar-brand"> VESIT Directory </a>
		</div>

        <div>
            <ul class="nav navbar-nav">
                <li > <a href="home.php"> Home </a> </li>
                <li  > <a href="create.php"> Create </a> </li>

                <li class="active"> <a href="delete.php"> Delete </a> </li>
                <li > <a href="search.php"> Search </a> </li>

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

		<div class="col-xs-4" >

		</div>

		<div class="col-xs-4" style="background-color:white">
			<h1 align="center"> Delete Contact </h1> <br/><br/>
			<form method="post" action="php/delete.php" onsubmit="return validateMob()">

				<div class="input-group">

					<input type="text" class="form-control" required name="txtdelete" id="mob" placeholder="Enter Mobile Number to Delete">
    	  			<span class="input-group-btn">
						<button class="btn btn-danger" type="submit">Delete</button>
      				</span>  
				</div>
			</form>
			<br><br>
			<h3 class="text-success" align="center"> <?php echo $del_msg ?> </h3>
			
		</div>

	</div>

</div>
<div class="footer" style="position: absolute; bottom: 10px; left: 0; right: 0; text-align: center;	padding: 3px;">
		&copy;2017 Sagar-Rahul All rights reserved
	</div>

</body>

</html>