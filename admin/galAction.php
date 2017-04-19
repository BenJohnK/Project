<?php
include("../connection/connection.php");
if(isset($_FILES['pic']))
	{

	$errors=array();
	$file_name=$_FILES['pic']['name'];
	$file_size=$_FILES['pic']['size'];
	$file_tmp=$_FILES['pic']['tmp_name'];
	/*$file_type=$_FILES['pic']['type'];*/
	$file_ext=strtolower(end(explode('.',$_FILES['pic']['name'])));
	$extensions=array("jpeg","jpg","png","doc","txt","docx","pdf");
	if(in_array($file_ext,$extensions)==false)
	{
		$errors[]="extension not allowed...please choose a jpeg,jpg or png file";
	}
	if($_FILES['pic']['size']>2097152)
	{
		$errors[]="file size must be less than 2mb";
	}
	if(empty($errors)==true)
	{
		move_uploaded_file($file_tmp,"../images/".$file_name);
	}
	else
	{
		print_r($errors);
	}
	
	$pic="../images/".$file_name;
$sql="INSERT INTO gallery( location, image) values ( '$_POST[location]','$pic')";
if($con->query($sql)==TRUE)
{
	header("Location:images.php");
}
else
{
echo mysqli_error($con);	
}
	}

?>