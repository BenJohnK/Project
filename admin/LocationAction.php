<?php
include("../connection/connection.php");
$sql="INSERT INTO location( location) values ( '$_POST[location]')";
if($con->query($sql)==TRUE)
{
	header("Location:addlocation.php");
}
else
{
echo mysqli_error($con);	
}

?>