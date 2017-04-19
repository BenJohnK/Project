<?php
include("../connection/connection.php");
$sql="insert feedback(cid,feedback) values('$cusid','$_POST[feed]')";
if($con->query($sql)==TRUE)
{
	header("Location:feedback.php");
}

?>