<?php
	session_start();
	$pageTitle = 'Ticket Details';
	include 'v-templates/header.php';
?>
	<?php
		include 'v-templates/left_sidebar.php';
		
	?>
	<?php
		//for showing user details checking ticket and user id
		if(isset($GLOBALS['_GET']['tid']) && isset($GLOBALS['_GET']['id']) ) 
		{
			//storing the get value in a variable
			 $tid = $GLOBALS['_GET']['tid'];
			 $id=$GLOBALS['_GET']['id'];
			 $tkt_details=$manageContent->getUserTicketDetails($tid);
			 //to get the email id of user
			 $email=$manageContent->getUserEmailId($id);
			 //to get the name and phone no. of user
			 $name_ph=$manageContent->getUserdetails($id);
	?>
	
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <!-- div for showing success message--->
                    <div class="alert alert-success" id="success_msg"></div>
                    <!-- div for showing warning message--->
                    <div class="alert alert-danger" id="warning_msg"></div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Ticket Details</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row adm_row">
                <div class="col-lg-12">
                                          
                        <div class="form-group">
                            <label class="control-label admin_form_label col-sm-3">Email Id</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value=" <?php echo $email[0]['email_id']; ?>"  />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label admin_form_label col-sm-3">Name</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value=" <?php echo $name_ph[0]['name']; ?> "  />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label admin_form_label col-sm-3">Phone</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value=" <?php echo $name_ph[0]['contact_no']; ?>"  />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label admin_form_label col-sm-3">Title</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value=" <?php echo $tkt_details[0]['title']; ?>" />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label admin_form_label col-sm-3">Subject</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value=" <?php echo $tkt_details[0]['subject']; ?>" />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label admin_form_label col-sm-3">Message</label>
                            <div class="col-sm-7">
                                <textarea class="form-control" rows="5"> <?php echo $tkt_details[0]['message']; ?> </textarea>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label admin_form_label col-sm-3">Date & Time</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control"  value=" <?php echo $tkt_details[0]['date']; ?> | <?php echo $tkt_details[0]['time']; ?>" />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        
                        <?php if($tkt_details[0]['status']==0) { ?>
                        	
                       <form role="form" action="v-includes/class.formData.php" method="post">
                       		<div class="form-group">
                            	<div class="col-sm-7 col-sm-offset-3">
                            		<input type="hidden" name="fn" value="<?php echo md5('user_ticket'); ?>" />
                            		<input type="hidden" name="ticket" value="<?php echo $tkt_details[0]['ticket_id']; ?>" />
                                	<input type="submit" class="btn btn-success btn-lg" value="Close Ticket" />
                                 </div>
                                 <div class="clearfix"></div>
                             </div>
                       </form>
                       <?php  } ?>
                        </div>
                <!-- /.col-lg-8 -->
            </div>
            <?php  //for showing guest details
   				} elseif(isset($GLOBALS['_GET']['rid']))
				{
					$rid= $GLOBALS['_GET']['rid'];
					$tkt_det=$manageContent->getGuestTicketDetails($rid);
					
			?>
			<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <!-- div for showing success message--->
                    <div class="alert alert-success" id="success_msg"></div>
                    <!-- div for showing warning message--->
                    <div class="alert alert-danger" id="warning_msg"></div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Ticket Details</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
				  <div class="row adm_row">
                <div class="col-lg-12">
                                       
                        <div class="form-group">
                            <label class="control-label admin_form_label col-sm-3">Email Id</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="<?php echo $tkt_det[0]['email']; ?>" />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label admin_form_label col-sm-3">Name</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value=" <?php echo $tkt_det[0]['name']; ?> " />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label admin_form_label col-sm-3">Phone</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value=" <?php echo $tkt_det[0]['phn_no']; ?> " />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label admin_form_label col-sm-3">Title</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value=" <?php echo $tkt_det[0]['title']; ?>" />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label admin_form_label col-sm-3">Subject</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value=" <?php echo $tkt_det[0]['subject']; ?>" />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label admin_form_label col-sm-3">Message</label>
                            <div class="col-sm-7">
                                <textarea class="form-control" rows="5"> <?php echo $tkt_det[0]['message']; ?> </textarea>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label admin_form_label col-sm-3">Date & Time</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value=" <?php echo $tkt_det[0]['date']; ?> | <?php echo $tkt_det[0]['time']; ?>" />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        
                         <?php if($tkt_det[0]['status']==0) { ?>
                        	
                       <form role="form" action="v-includes/class.formData.php" method="post">
                      		<div class="form-group">
                            	<div class="col-sm-7 col-sm-offset-3">
                            		<input type="hidden" name="fn" value="<?php echo md5('guest_ticket'); ?>" />
                            		<input type="hidden" name="request" value="<?php echo $tkt_det[0]['request_id']; ?>" />
                                	<input type="submit" class="btn btn-success btn-lg" value="Close Ticket" />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                       </form>
                               
                        <?php  } ?>
                <!-- /.col-lg-8 -->
            </div>
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    
	
	
	
	
<?php
	}//if condition ends here
	include 'v-templates/footer.php';
?>