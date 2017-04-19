<?php 
include("../connection/connection.php");
$paid=$_REQUEST['paid'];
$sql="update package_apply set status=1,message='Congrats! Your Package is Approved We will contact you Immediately' where paid=$paid";
if($con->query($sql)==TRUE)
{
header("Location:ApprovePackages.php");	
}