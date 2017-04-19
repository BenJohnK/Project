<?php
include("../connection/connection.php");
 $lid=$_REQUEST['lid'];
$sql="delete from location where lid=$lid";
if($con->query($sql))
{
header("Location:addlocation.php");		
}
?>