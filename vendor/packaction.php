<?php 
/*error_reporting(0);*/
include("../connection/connection.php");

	$sql="INSERT INTO package( vid, name,type, location, duration, amount, description) VALUES   ('$cusid','$_POST[name]','$_POST[type]','$_POST[location]','$_POST[duration]','$_POST[amount]','$_POST[desc]')";
	if($con->query($sql)==TRUE)
	{
	header("Location:AddPackages.php");
	}

else
{
echo mysqli_error($con);	
}


?>