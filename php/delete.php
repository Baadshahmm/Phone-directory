<?php 
	session_start();
	require_once("connect.php");
	
	$mobile = $_POST['txtdelete'];
	$uid = $_SESSION['uid'];

	mysqli_query($con," delete from `_public` where mobile='$mobile'");

	if(mysqli_query($con," delete from `$uid` where mobile='$mobile' "))
	{

		$_SESSION['delete_success']="Contact Successfully Deleted !";
		echo '<script type="text/javascript">
        window.location="../delete.php"
        </script>';
		//header("Location: ..\delete.php ");
	}
	else
	{
		$_SESSION['delete_success']="Could Not Find Contact !";
		echo '<script type="text/javascript">
        window.location="../delete.php"
        </script>';
		//header("Location: ..\delete.php ");
	}

	mysqli_close($con);

?>