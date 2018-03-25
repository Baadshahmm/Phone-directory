<?php
	$user_taken  = "";
?>
<html>
	
<head>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap/js/jquery-1.12.2.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/datepicker.css">
	<script src="bootstrap/js/bootstrap-datepicker.js"></script>

		<title> Sign-Up </title>
		<link rel="shortcut icon" type="image/x-icon" href="vesit.png" />

	<script type="text/javascript">
		$(document).ready(function () {

			$('#dob').datepicker({
				format: "dd/mm/yyyy"
			});

		});
		
		function validatePassword()
		{

				var x = document.getElementById('pwd1').value;
				var y = document.getElementById('pwd2').value;
				var fname = document.getElementById('fname').value;
				var lname = document.getElementById('lname').value;
				var dob = document.getElementById('dob').value;
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

				if(x.length>=8)
				{
					
				}
				else
				{
					alert("Enter atleast 8 digit password");
					chk++;
				}


				if(x == y)
				{
					
				}
				else
				{
					alert(" Passwords Do Not Match !");
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
		
<body >

    <nav class="navbar navbar-inverse">
	
		<div class="container-fluid">
		
			<div class="navbar-header">
				<a href="first.php" class="navbar-brand" /> VESIT Directory </a>
			</div>
			
				<ul class="nav navbar-nav navbar-right">
					
					<li> <a href="first.php"> LOG-IN </a> </li>
				
				</ul>
			
			</div>
			
		</div>
		
	</nav>
   
   <div class="container-fluid">
         
    <div class="row">
       
		<div class="col-xs-4" >
		</div>
         
		<div class="col-xs-4" style="background-color:rgba(202, 205, 205, 0.100) ">
		
			<form role="form" method="post" action="php/signup.php" onsubmit="return validatePassword()">
			<div class="form" align="center">
			<h2> <strong> Sign-Up </strong> </h2>
			<br><br>
			
			<input type="text" class="form-control" name="txtfname"  id="fname" placeholder="Enter First Name" aria-describedby="basic-addon1" required ><br><br>
			<input type="text" class="form-control" name="txtlname"  id="lname" placeholder="Enter Last Name" aria-describedby="basic-addon1" required > <br><br>
			<input  type="text" class="form-control" name="txtdob"  id="dob" Placeholder="Select DOB"  id="txtdatepicker" required > <br><br>
			<input type="text" class="form-control" name="txtmobile"  id="mob" placeholder="Enter Mobile Number" aria-describedby="basic-addon1" required > <br><br>


			<input type="email" class="form-control" name="txtemail"  placeholder="Enter Your Email Address" aria-describedby="basic-addon1" required > <span class="text-danger"><?php echo $user_taken; ?> </span> <br><br>
			<input type="password" class="form-control" name="txtpassword" id="pwd1" placeholder="Enter Password" aria-describedby="basic-addon1"  required > <br><br>
			<input type="password" class="form-control" placeholder="Confirm Password" id="pwd2" aria-describedby="basic-addon1"  required > <br><br>

			<select class="form-control" id="sel1" name="txtq" data-toggle="tooltip" title="Select a Security Question" >
				<option>Whats your mothers maiden name?</option>
				<option>What is your nickname?</option>
				<option>Whats your favorite hobby?</option>
				<option>Whats was your first gift ever?</option>
				<option>Your best friends name?</option>
			</select><br><br>

			<input type="text" name="txta" class="form-control" placeholder="Your Answer"  required  /> <br><br>

				
			<input class="btn btn-primary btn-lg" type="submit" name="btnsubmit" value="Register"  style=" width:auto"/><br>
			
			</div>
			</form>
		</div>
         
		<div class="col-xs-4" >
		</div>
       
    </div>
     
    </div>


</body>
</html>