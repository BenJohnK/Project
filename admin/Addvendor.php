<?php 
error_reporting(0);
include("header.php"); 
include("../connection/connection.php");

?>
<script type="text/javascript">
function validate()
{
if(document.getElementById("clubid").value=="")
{
alert('Enter Complaint');
return false;	
}
alert('Complaint Submitted');
return true;
}
</script>


	

<legend>ADD VENDOR</legend>
<div class="container">
	<div class="row">
		
        
        <div class="col-md-12">
       
        <div class="table-responsive">

             
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                  
                   <th>Agency Name</th>
                   <th>Phone</th>
                   <th>Email</th>
                   <th>User Name</th>
                    <th>Password</th>
                     <th>Accept</th>
                   </thead>
    <tbody>
    <?php
												
                                                $sql="SELECT vid, agency, phone, email, username,password, status FROM vendor WHERE status=0";
												$result=$con->query($sql);
												while($row=mysqli_fetch_array($result))
                                                
                                                { 
                                                 
                                                ?>
    
    <tr>
    
    <td><?php echo $row['agency'];  ?></td>
     <td><?php echo $row['phone'];  ?></td>
      <td><?php echo $row['email'];  ?></td>
       <td><?php echo $row['username'];  ?></td>
       <td><?php echo $row['password'];  ?></td>
    <td><a href="addvendoraxn.php?vid=<?php echo $row['vid'];  ?>" class="btn btn-info">Accept</a></td>
    </tr>
    <?php  } ?>
    
    </tbody>
        
</table>

<div class="clearfix"></div>

                
            </div>
            
        </div>
	</div>
</div>
<?php include("footer.php"); ?>