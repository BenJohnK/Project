<?php
if(($_POST['type']=="Admin")&&($_POST['username']=="admin")&&($_POST['password']=="admin"))
{
	header("Location:../Admin/adminhome.php");
}
if($_POST['type']=="Vendor")
{
include("../connection/connection.php");
$sql="SELECT vid from vendor WHERE username='$_POST[username]' and password ='$_POST[password]' and status=1";
$result=$con->query($sql);
$row=mysqli_fetch_array($result);
	if (mysqli_num_rows($result)==1)
	{
		
			session_start();
			$_SESSION['id'] = $row['vid'];
			header("Location:../vendor/vendorhome.php");
		
	} 
}
if($_POST['type']=="Customer")
{
include("../connection/connection.php");
$sql="SELECT cid from customertb WHERE username='$_POST[username]' and password ='$_POST[password]'";
$result=$con->query($sql);
$row=mysqli_fetch_array($result);
	if (mysqli_num_rows($result)==1)
	{
		
			session_start();
			$_SESSION['id'] = $row['cid'];
			$cid=$_SESSION['id'];
			
			header("Location:../customer/customerhome.php");
		
	} 
}
echo "<script>alert('INCORRECT USERNAME AND PASSWORD');window.location='login.php'</script>";
