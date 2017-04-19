<?php
include("../connection/connection.php");
$sql="INSERT INTO customertb( name, phone, email, username, password) VALUES ('$_POST[name]','$_POST[phone]','$_POST[email]','$_POST[uname]','$_POST[password]')";
if($con->query($sql)==TRUE)
{
echo "<script>alert('Registration Completed!'); window.location='register.php'</script>";	
}
?>