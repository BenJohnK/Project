<?php 
/*error_reporting(0);*/
include("../connection/connection.php"); 
$pkid=$_REQUEST['pkid'];
$vid=$_REQUEST['vid'];
$date=date("Y/m/d");
$sql="INSERT INTO package_apply( pkid, vid, cid, date) VALUES('$pkid','$vid','$cusid','$date')";
if($con->query($sql)==TRUE)
{
header("Location:Packages.php");

}
?>
                
