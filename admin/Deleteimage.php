<?php
include("../connection/connection.php");
 $gid=$_REQUEST['gid'];
$sql="delete from gallery where gid=$gid";
if($con->query($sql))
{
header("Location:images.php");		
}
?>