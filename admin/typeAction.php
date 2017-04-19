<?php
include("../connection/connection.php");
$sql="INSERT INTO package_type( type) values ( '$_POST[type]')";
if($con->query($sql)==TRUE)
{
	header("Location:addtype.php");
}
else
{
echo mysqli_error($con);	
}

?>