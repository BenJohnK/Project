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


	

<legend>VIEW FEEDBACK</legend>
<div class="container">
	<div class="row">
		
        
        <div class="col-md-12">
       
        <div class="table-responsive">

             
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                  
                   <th>User Name</th>
                     <th>Phone Number</th>
                   <th>Email Address</th>
                   <th>Feedback</th>
                   
                   </thead>
    <tbody>
    <?php
												
                                                $sql="SELECT customertb.name,customertb.phone,customertb.email,feedback.feedback FROM customertb INNER JOIN feedback on customertb.cid=feedback.cid";
												$result=$con->query($sql);
												while($row=mysqli_fetch_array($result))
                                                
                                                { 
                                                 
                                                ?>
    
    <tr>
    
    <td><?php echo $row['name'];  ?></td>
     <td><?php echo $row['phone'];  ?></td>
      <td><?php echo $row['email'];  ?></td>
       <td><?php echo $row['feedback'];  ?></td>
       
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