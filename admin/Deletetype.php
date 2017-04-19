<?php
include("../connection/connection.php");
 $pktypid=$_REQUEST['pktypid'];
$sql="delete from package_type where pktypid=$pktypid";
if($con->query($sql))
{
header("Location:addtype.php");		
}
?>