<?php 
/*error_reporting(0);*/
include("../connection/connection.php");
include("header.php");
$pkid=$_REQUEST['pkid'];
if(isset($_POST['submit']))
{
$sql="update package set name='$_POST[name]',type='$_POST[type]',location='$_POST[location]',duration='$_POST[duration]',amount='$_POST[amount]',description='$_POST[desc]' where pkid=$pkid";
if($con->query($sql)==TRUE)
{
	echo "<script>alert('Updated!'); window.location='AddPackages.php'</script>";	
}
}
$sql="SELECT pkid, vid, name,type, location, duration, amount, description FROM package WHERE vid=$cusid";
												$result=$con->query($sql);
												$row=mysqli_fetch_array($result)
                                                
                                              

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
<legend>ADD PACKAGES</legend>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"> Package Name</label>  
  <div class="col-md-4">
  <input id="textinput" name="name" type="text" class="form-control input-md" value="<?php echo $row['name'];  ?>">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"> Type</label>  
  <div class="col-md-4">
  <input id="textinput" name="type"  type="text" class="form-control input-md" value="<?php echo $row['type'];  ?>">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"> Location</label>  
  <div class="col-md-4">
  <input id="textinput" name="location"  type="text" class="form-control input-md" value="<?php echo $row['location'];  ?>">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Duration</label>  
  <div class="col-md-4">
  <input  name="duration" id="date" type="text" placeholder="Duration" class="form-control input-md" value="<?php echo $row['duration'];  ?>">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Amount</label>  
  <div class="col-md-4">
  <input name="amount" id="amount" type="text" placeholder="Amount" class="form-control input-md" value="<?php echo $row['amount'];  ?>">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"> Description</label>  
  <div class="col-md-4">
  <textarea class="form-control" id="desc" name="desc"><?php echo $row['description'];  ?></textarea>
    
  </div>
</div>

<!-- File Button --> 



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
  <input type="submit" class="btn btn-primary" name="submit" value="Submit" onClick="return validate();">
  </div>
</div>

</fieldset>
</form>

 
                <?php include("footer.php"); ?>
