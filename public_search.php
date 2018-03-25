<?php
    session_start();

    $_SESSION['uid'] = "_public";
?>
<html>

<head>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap/js/jquery-1.12.2.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<title> Search Contact </title>
	<link rel="shortcut icon" type="image/x-icon" href="vesit.png" />
	
</head>

<body >

<nav class="navbar navbar-inverse">

	<div class="container-fluid">

		<div class="navbar-header">
			<a href="home.php" class="navbar-brand" /> VESIT Directory </a>
		</div>

        <div>

            <ul class="nav navbar-nav navbar-right">
  
  			<li><a href="first.php"> LOG-IN </a> </li>

            </ul>


        </div>

	</div>

</nav>

<div class="container-fluid">

	<div class="row">

		<div class="col-xs-4" >

		</div>

		<div class="col-xs-5" style="background-color:white">
		
			<h1 align="center"> Public Directory </h1> <br><br>

			

				<div class="input-group">

					<input type="text" id="txtsearch" class="form-control" placeholder="Enter Keyword to Search">
    	  			<span class="input-group-btn">
						<button class="btn btn-primary" type="submit" id="btnsearch"><span class="glyphicon glyphicon-search"></span> Search</button>
      				</span>
				</div> <br>
				<label class="radio-inline"><input type="radio" id="txtchoice" name="txtchoice" value="fname" checked>First Name</label>
				<label class="radio-inline"><input type="radio" id="txtchoice" name="txtchoice" value="lname">Last Name</label>
				<label class="radio-inline"><input type="radio" id="txtchoice" name="txtchoice" value="mobile">Mobile Number</label>
				<label class="radio-inline"><input type="radio" id="txtchoice" name="txtchoice" value="email">Email</label>
				<br><br><br><br>
			
			<div id="content-pane">
				
				
				
			</div>
		</div>

		<div class="col-xs-3" >
			
			<script>
				$(document).ready(function(){
					$('#content-pane').load('nothing.php');
				
				$('button#btnsearch').on('click',function(){
					
					var key = $('input#txtsearch').val();
					var criteria = $('input[name=txtchoice]:checked').val();
					var total = key + ":" + criteria;
		
					$.post('php/public_search.php',{str:total},function(data){
					$('div#content-pane').html(data);
			
					});
					
				});
				
				});
			</script>
		</div>

	</div>

</div>

<div class="footer" style="position: absolute; bottom: 10px; left: 0; right: 0; text-align: center; padding: 3px;">
        &copy;2017 Sagar-Rahul All rights reserved
    </div>
</body>

</html>