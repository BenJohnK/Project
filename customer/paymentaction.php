<?php
include("header.php"); 
$ticket=$_REQUEST['ticket'];
 
?>
<form class="form-horizontal" >

<fieldset>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"> Ticket Number</label>  
  <div class="col-md-4">
  <label class="alert alert-info"><h1><?php echo $ticket; ?></h1></label>
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"> </label>  
  
  <label class="alert alert-danger"><h3>**Note Down This Ticket Number To Get Tickets From The Vendor</h3></label>
    

</div>