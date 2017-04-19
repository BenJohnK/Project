<?php include("header.php"); 
include("../connection/connection.php");
?>
	<script type="text/javascript">
function validate()
{
if(document.getElementById("animal").value=="")
{
alert('Enter animal');
document.getElementById("animal").focus();
return false;	
}
alert('Animal Added');
return true;
}
</script>
                <form class="form-horizontal"  method="POST" >
<fieldset>

<!-- Form Name -->
<legend>ADD IMAGE</legend>
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
<!-- Text input-->


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
  <input type="submit" name="submit" class="btn btn-primary" value="View Images" onClick="return validate();">
  </div>
</div>

</fieldset>
</form>



<div class="gallery">
	 <div class="container">
		 <h2>Gallery</h2>
		 <div class="gallery-bottom">
				<div class="gallery-1">
                <?php
if(isset($_POST['submit']))
{
	
	$sql="SELECT image FROM gallery where location='$_POST[location]'";
												$result=$con->query($sql);
											while($row=mysqli_fetch_array($result))
	
{

?>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="<?php echo $row['image']; ?>" data-lightbox="example-set"><img class="example-image" src="<?php echo $row['image']; ?>" style="margin-top:30px;" alt=""/></a>
                         
					</div>
                    
					
					 <?php } } ?>
					
					
				</div>
              
			</div>
            
	 </div>
     
</div>	
<script src="../js/lightbox-plus-jquery.min.js"></script>
        <?php include("footer.php"); ?>
