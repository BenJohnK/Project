<?php 
/*error_reporting(0);*/
include("../connection/connection.php");
include("header.php"); 


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
                <form class="form-horizontal" action="Packages.php" method="POST" >
<fieldset>

<!-- Form Name -->
<legend>VIEW PACKAGES</legend>


<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Select Type</label>
  <div class="col-md-4">
    <select id="selectbasic" name="type" class="form-control">
      <option>--Select Type--</option>
      <?php
												
                                                $sql="Select type from package_type";
												$result=$con->query($sql);
												while($row=mysqli_fetch_array($result))
                                                
                                                { 
                                                  echo "<option> $row[type] </option>";
                                                }
                                                ?>
    </select>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Select Location</label>
  <div class="col-md-4">
    <select id="selectbasic" name="location" class="form-control">
      <option>--Select Location--</option>
      <?php
												
                                                $sql="Select location from location";
												$result=$con->query($sql);
												while($row=mysqli_fetch_array($result))
                                                
                                                { 
                                                  echo "<option> $row[location] </option>";
                                                }
                                                ?>
    </select>
  </div>
</div>





<!-- File Button --> 



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
  <input type="submit" class="btn btn-primary" name="submit" value="Search" onClick="return validate();">
  </div>
</div>

</fieldset>
</form>

                <?php include("footer.php"); ?>
