<?php
    session_start();

    if(!isset($_SESSION['uid']))
            {
                    echo '<script type="text/javascript">
        window.location="../index.php"
        </script>';
                    //header("location: index.php");
            }

    $uid = $_SESSION["uid"];
	if(isset($_SESSION['insert_success']))
	{
		if($_SESSION['insert_success']==1)
			$cs = " Contact Successfully Created !";
		else
			$cs = " Contact Already Exists !";
		
		unset($_SESSION['insert_success']);
	}

	else
	{
		$cs="";
	}
?>

<html>
	
<head>

	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap/js/jquery-1.12.2.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

		<title> Create Contact </title>
		<link rel="shortcut icon" type="image/x-icon" href="vesit.png" />

	<script type="text/javascript">
		
		function validateForm()
		{

				
				var fname = document.getElementById('fname').value;
				var lname = document.getElementById('lname').value;
				var mob = document.getElementById('mob').value;
				var pattern = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
				var chk=0;

				
				if(!fname.match(pattern))
				{
					alert("Enter valid First name");
					chk++;
				}

				if(!lname.match(pattern))
				{
					alert("Enter valid Last name");
					chk++;
				}

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
                <li  > <a href="home.php"> Home </a> </li>
                <li class="active" > <a href="create.php"> Create </a> </li>
                <li > <a href="delete.php"> Delete </a> </li>
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
         
		<div class="col-xs-4" style="background-color:white ">

			<form method="post" action="php/create.php" onsubmit="return validateForm()" >
			
			<table class="table table-hover"  width="100%" >

				<tr>

					<th colspan="3" > <h2 align="center"> Enter Contact Details </h2> </th>
				</tr>

				<tr>
					<td> <input type="text" name="txtfname"  class="form-control" id="fname" placeholder="First Name" required /> </td>
					<td> <input type="text" name="txtlname" class="form-control" id="lname" placeholder="Last Name" required/> </td>
					<td></td>
				</tr>

				<tr>
					<td> <input type="number" maxlength="10" name="txtmobile" id="mob" class="form-control" placeholder="Mobile Number" required/>  </td>
					<td> </td>
					<td></td>
				</tr>

				<tr>
					<td> <input type="number" name="txtLandline" class="form-control" placeholder="Landline Number" required /> </td>
					<td></td>
					<td></td>
				</tr>

				<tr>
					<td> <input type="email" name="txtemail" class="form-control" placeholder="Email Address" required/> </td>
					<td></td>
					<td></td>
				</tr>

				<tr>
					<td> Public </td>
					<td>	 <label class="radio-inline"><input type="radio" name="txtpublic" value="yes">Yes</label> </td>
					<td>	<label class="radio-inline"><input type="radio" name="txtpublic" value="no" checked="true">No</label> </td>

				</tr>

				<tr>
					<td></td>
					<td> <br> <input type="submit" class="btn btn-primary" value="Save Contact"/></td>
					<td></td>
				</tr>

			</table>
			</form>
			
			<br><br>
			<h3 align="center" class="text-success"><?php echo $cs ?> </h3>
			
		</div>
       
    </div>
     
    </div>
 
   <div class="footer" style="position: absolute; bottom: 10px; left: 0; right: 0; text-align: center;	padding: 3px;">
		&copy;2017 Sagar-Rahul All rights reserved
	</div>
</body>
	
</html>