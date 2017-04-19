<?php
session_start();
error_reporting(0);
$con=mysqli_connect("localhost","root","","holiday");
$cusid=$_SESSION['id'];
