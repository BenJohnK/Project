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
                <form class="form-horizontal" action="galAction.php" method="POST" enctype="multipart/form-data">
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
<div class="form-group">
  <label class="col-md-4 control-label" for="image">Add Image</label>
  <div class="col-md-4">
    <input id="pic" name="pic" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
  <input type="submit" class="btn btn-primary" value="Add" onClick="return validate();">
  </div>
</div>

</fieldset>
</form>
 <div class="table-responsive">

             
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                  
                   <th>Location Name</th>
                   <th>Image</th>
                  
                     <th>Delete</th>
                   </thead>
    <tbody>
    <?php
												
                                                $sql="SELECT gid, location, image FROM gallery";
												$result=$con->query($sql);
												while($row=mysqli_fetch_array($result))
                                                
                                                { 
                                                 
                                                ?>
    
    <tr>
    
    <td><?php echo $row['location'];  ?></td>
     <td><img src="<?php echo $row['image'];  ?>" height="75" width="150"></img></td>
     
    <td><a href="Deleteimage.php?gid=<?php echo $row['gid'];  ?>" class="btn btn-danger">Delete</a></td>
    </tr>
    <?php  } ?>
    
    </tbody>
        
</table>
</div>

                <?php include("footer.php"); ?>
