<?php
    session_start();

    if(!isset($_POST['btn']))
            {
                    echo '<script type="text/javascript">
        window.location="../home.php"
        </script>';
                    //header("location: home.php");
            }
	$var = $_POST['btn'];
	$_SESSION['btn']=$var;
	$uid = $_SESSION['uid'];
	
	require_once("php/connect.php");
	
	
	$res = mysqli_query($con," select * from `$uid` where mobile='$var' ") or die("Screwed"+mysqli_error($con));
	
	$data = mysqli_fetch_row($res);
	mysqli_close($con);

?>
<html>
	
<head>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap/js/jquery-1.12.2.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
		
		<title> Update Contact </title>
		<link rel="shortcut icon" type="image/x-icon" href="vesit.png" />

		<script type="text/javascript">
		
		function validateForm()
		{

				
				var fname = document.getElementById('fname').value;
				var lname = document.getElementById('lname').value;
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
			<a href="home.php" class="navbar-brand" /> VESIT Directory </a>
		</div>

        <div>
            <ul class="nav navbar-nav">
                <li > <a href="home.php"> Home </a> </li>
                <li  > <a href="create.php"> Create </a> </li>
                <li class="active"> <a href="update.php"> Modify </a> </li>
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

			<form method="post" action="php/update.php" onsubmit="return validateForm()" >

				<table class="table table-hover"  width="100%" >

					<tr>

						<th colspan="3" > <h2 align="center"> Modify Contact Details </h2> </th>
					</tr>

					<tr>
						<td> <input type="text" name="txtfname"  id="fname" data-toggle="tooltip" title="First Name" value="<?php echo htmlentities($data[0])?>" class="form-control" placeholder="First Name" /> </td>
						<td> <input type="text" name="txtlname" id="lname" data-toggle="tooltip" title="Last Name"value="<?php echo htmlentities($data[1])?>" class="form-control" placeholder="Last Name" /> </td>
						<td></td>
					</tr>

					<tr>
						<td> <input type="text" name="txtmobile" data-toggle="tooltip" title="Mobile Number" value="<?php echo htmlentities($data[2])?>" class="form-control" placeholder="Mobile Number" disabled="true"/>  </td>
						<td> </td>
						<td></td>
					</tr>

					<tr>
						<td> <input type="text" name="txtlandline" data-toggle="tooltip" title="Landline Number" value="<?php echo htmlentities($data[3])?>" class="form-control" placeholder="Landline Number" /> </td>
						<td></td>
						<td></td>
					</tr>

					<tr>
						<td> <input type="text" name="txtemail" data-toggle="tooltip" title="Email Address" value="<?php echo htmlentities($data[4])?>" class="form-control" placeholder="Email Address" /> </td>
						<td></td>
						<td></td>
					</tr>



					<tr>
						<td></td>
						<td> <br/> <input type="submit" class="btn btn-primary" value="Update Contact"/></td>
						<td></td>
					</tr>

				</table>
			</form>
			
		</div>
         
		<div class="col-xs-4" >
			
		</div>
       
    </div>
     
    </div>
 
   <div class="footer" style="position: absolute; bottom: 10px; left: 0; right: 0; text-align: center; padding: 3px;">
        &copy;2017 Sagar-Rahul All rights reserved
    </div>
</body>
	
</html>