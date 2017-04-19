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
<legend>VIEW PAYMENTS</legend>
<div class="container">
	<div class="row">
		
        
        <div class="col-md-12">
       
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                  
                   <th>package Name</th>
                   <th>package Type</th>
                    <th>Location</th>
                      <th>Duration</th>
                       <th>Amount</th>
                         <th>Vendor Name</th>
                         <th>Phone</th>
                         <th>Email</th>  
                         <th>Account No. Given</th>
                           <th>Ticket No.</th>
                     
                   </thead>
    <tbody>
    <?php
												
                                               $sql="SELECT package.name as pname,package.type,package.location,package.duration,package.amount,vendor.agency,vendor.phone,vendor.email,payment.account,payment.ticket FROM package INNER JOIN payment on package.pkid=payment.pkid INNER JOIN vendor on vendor.vid=payment.vid WHERE payment.cid=$cusid";
												$result=$con->query($sql);
												while($row=mysqli_fetch_array($result))
                                                
                                                { 
                                                 
                                                ?>
    
    <tr>
    
    <td><?php echo $row['pname'];  ?></td>
    <td><?php echo $row['type'];  ?></td>
    <td><?php echo $row['location'];  ?></td>
    
      <td><?php echo $row['duration'];  ?></td>
      <td><?php echo $row['amount'];  ?></td>
      <td><?php echo $row['agency'];  ?></td>
      <td><?php echo $row['phone'];  ?></td>
         <td><?php echo $row['email'];  ?></td>
          <td><?php echo $row['account'];  ?></td>
           <td style="color:#090;"><h5><?php echo $row['ticket'];  ?></h5></td>
      
   
    </tr>
    <?php  } ?>
    
    </tbody>
        
</table>

<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>
                
            </div>
            
        </div>
	</div>
</div>
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
    
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
                <?php include("footer.php"); ?>
