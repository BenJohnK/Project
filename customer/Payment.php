<?php 
/*error_reporting(0);*/
include("../connection/connection.php");
include("header.php"); 
$paid=$_REQUEST['paid'];
$pname=$_REQUEST['pname'];
$location=$_REQUEST['location'];
$amount=$_REQUEST['amount'];
$type=$_REQUEST['type'];
$pkid=$_REQUEST['pkid'];
$vid=$_REQUEST['vid'];
$ticket=rand(11111111,99999999);
if(isset($_POST['submit']))
{
	
$sql="INSERT INTO payment( paid, pkid, vid, cid, account, cvv,ticket) VALUES ('$paid','$pkid','$vid','$cusid','$_POST[acc]','$_POST[cvv]','$ticket')";	
if($con->query($sql)==TRUE)
{
echo "<script>alert('Payment Completed Successfully'); window.location='paymentaction.php?ticket=$ticket'</script>";	
}
}

?>
<script type="text/javascript">
function validate()
{
if(document.getElementById("name").value=="")
{
alert('Enter Name');
document.getElementById("name").focus();
return false;	
}
if(document.getElementById("desc").value=="")
{
alert('Enter Desscription');
document.getElementById("desc").focus();
return false;	
}
if(document.getElementById("date").value=="")
{
alert('Enter Date');
document.getElementById("date").focus();
return false;	
}
if(document.getElementById("amount").value=="")
{
alert('Enter Amount');
document.getElementById("amount").focus();
return false;	
}
alert('Food Packages');
return true;
}
</script>	
                <form class="form-horizontal"  method="POST" >
<fieldset>

<!-- Form Name -->
<legend>PAYMENT</legend>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"> Package Name</label>  
  <div class="col-md-4">
  <label class="alert alert-info"><h1><?php echo $pname; ?></h1></label>
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"> Package Type
  </label>  
  <div class="col-md-4">
  <label style="width:340px;" class="alert alert-info"><h3><?php echo $type; ?></h3></label>
    
  </div>
  </div>
  <div class="form-group">
  <label class="col-md-4 control-label" for="textinput"> Location
  </label>  
  <div class="col-md-4">
  <label style="width:340px;" class="alert alert-info"><h3><?php echo $location; ?></h3></label>
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"> Amount
  </label>  
  <div class="col-md-4">
  <label style="width:340px;" class="alert alert-info"><h3><?php echo $amount; ?></h3></label>
    
  </div>
</div>
<div class="form-group"> 
  <label class="col-md-4 control-label" for="textinput"> 
  </label>  
  
  <label  class="alert alert-warning"><h3>Notice-2% of this amount will go to the website as commision fees!</h3></label>
     
  
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Account No.</label>  
  <div class="col-md-4">
  <input  name="acc" id="date" type="text" placeholder="Account No." class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">CVV Number</label>  
  <div class="col-md-4">
  <input name="cvv" id="amount" type="text" placeholder="CVV No" class="form-control input-md">
    
  </div>
</div>


<!-- File Button --> 



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
  <input type="submit" class="btn btn-primary" name="submit" value="GET TICKET NUMBER" onClick="return validate();">
  </div>
</div>

</fieldset>
</form>

                <?php include("footer.php"); ?>
