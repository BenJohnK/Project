<?php
include("../connection/connection.php");
$vid=$_REQUEST['vid'];
$sql="update vendor set status=1 where vid=$vid";
if($con->query($sql)==TRUE)
{
header("Location:Addvendor.php");	
}
?>