<?php 
include("header.php"); 

?>
<script type="text/javascript">
function validate()
{
if(document.getElementById("feedback").value=="")
{
alert('Enter feedback');
document.getElementById("feedback").focus();
return false;	
}
alert('feedback Added');
return true;
}
</script>
	
                <form class="form-horizontal"  method="POST" action="feedaxn.php">
<fieldset>

<!-- Form Name -->
<legend>ENTER FEEDBACK</legend>

<!-- Texinput-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Enter Feedback</label>  
  <div class="col-md-4">
  <textarea class="form-control" name="feed" id="feedback" style="height:300px;"  ></textarea>
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
  <input type="submit" name="submit" class="btn btn-primary" value="Enter" onClick="return validate();">
  </div>
</div>

</fieldset>
</form>
 

                <?php include("footer.php"); ?>
