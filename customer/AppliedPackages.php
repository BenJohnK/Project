<?php 
/*error_reporting(0);*/
include("../connection/connection.php");
include("header.php"); 


?>


<!-- Form Name -->
<legend>APPLIED PACKAGES</legend>


<div class="container">
	<div class="row">
		
        
        <div class="col-md-12">
       
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                  
                   <th>package Name</th>
                    <th>package Type</th>
                    <th>Location</th>
                       <th>Amount</th>
                         <th>Agency Name</th>
                         <th>Phone</th>
                         <th>Email</th>
                         <th>Message</th>
                      <th>Status</th>
                        <th>Billing</th>
                      
                   </thead>
    <tbody>
    <?php
												
                                               $sql="SELECT package_apply.paid, package_apply.vid,package_apply.cid,package_apply.date, package.name as pname,package.type,package.location,package.amount,vendor.agency,vendor.phone,vendor.email,package_apply.status,package_apply.message,package.pkid FROM  package_apply INNER JOIN package on package_apply.pkid=package.pkid INNER JOIN vendor on package_apply.vid=vendor.vid WHERE package_apply.cid='$cusid' 
											   
											   ";
												$result=$con->query($sql);
												while($row=mysqli_fetch_array($result))
                                                
                                                { 
                                                 
                                                ?>
    
    <tr>
    
    <td><?php echo $row['pname'];  ?></td>
     <td><?php echo $row['type'];  ?></td>
    <td><?php echo $row['location'];  ?></td>
    
      
      <td><?php echo $row['amount'];  ?></td>
        <td><?php echo $row['agency'];  ?></td>
     
       <td><?php echo $row['phone'];  ?></td>
        <td><?php echo $row['email'];  ?></td>
        <td><?php echo $row['message'];  ?></td>
      
    <td><?php if($row['status']==0) { ?><label class="alert alert-danger">Not Approved</label><?php } else { ?><label class="alert alert-success">Approved</label><?php } ?></td>
   <td><?php if($row['status']!=0) { ?><a href="Payment.php?paid=<?php echo $row['paid'];  ?>&pname=<?php echo $row['pname'];  ?>&location=<?php echo $row['location'];  ?>&amount=<?php echo $row['amount'];  ?>&type=<?php echo $row['type'];  ?>&pkid=<?php echo $row['pkid'];  ?>&vid=<?php echo $row['vid'];  ?>" onClick="return confirm('Are you Sure?');" class="btn btn-primary">Make Payment</a><?php } ?></td>
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
