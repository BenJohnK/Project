<?php
include("../connection/connection.php");
 $pkid=$_REQUEST['pkid'];
$sql="delete from package where pkid=$pkid";
if($con->query($sql))
{
header("Location:AddPackages.php");		
}
?>