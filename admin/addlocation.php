<?php 
include("header.php"); 
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
alert('Location Added');
return true;
}
</script>
	
                <form class="form-horizontal" action="LocationAction.php" method="POST">
<fieldset>

<!-- Form Name -->
<legend>ADD LOCATION</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Add Location</label>  
  <div class="col-md-4">
  <input id="textinput" name="location" id="animal" type="text" placeholder="Add Location" class="form-control input-md" required>
    
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
                  
                     <th>Delete</th>
                   </thead>
    <tbody>
    <?php
												
                                                $sql="SELECT lid,location from location";
												$result=$con->query($sql);
												while($row=mysqli_fetch_array($result))
                                                
                                                { 
                                                 
                                                ?>
    
    <tr>
    
    <td><?php echo $row['location'];  ?></td>
     
    <td><a href="Deletelocation.php?lid=<?php echo $row['lid']; ?>" class="btn btn-danger">Delete</a></td>
    </tr>
    <?php  } ?>
    
    </tbody>
        
</table>
</div>

                <?php include("footer.php"); ?>
