<?php
	session_start();
	$pageTitle = 'Submit A Ticket';
	if(!isset($GLOBALS['_COOKIE']['uid']) && !isset($_SESSION['user_id']))
	{
		header("Location: log-in.php");
	}
	include ('v-templates/header.php');
?>
<?php
	//including post header to this page
	include ("v-templates/post-header.php");
?>
<!-- body starts here -->
<div id="profile_body_outline">
	
    <!-- div for showing success message--->
	<div class="alert alert-success" id="success_msg"></div>
	<!-- div for showing warning message--->
	<div class="alert alert-danger" id="warning_msg"></div>
    

	<div class="container">
	<!-- sign up box starts here -->
		<div class="row background-custom ticket-heading">
			<div class="project_title_outline_userdetails submit-ticket-text">SUBMIT A TICKET</div>
		<div class="col-md-8">
			<div class="contact-box">
				<div class="col-md-12">
					<div class="col-md-12">
						<h4 class="contact-txt">Send a query regarding our system</h4>
					</div>
					<div class="clearfix"></div>
					<hr>
					
				</div>
				
				<div class="clearfix"></div>
					<div class="col-md-12">
					<div class="col-md-12">
					<h4 class="login-txt"></h4>
					</div>
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<form class="form-horizontal" id="userTicketForm" action="v-includes/class.formData.php" method="post">
							<div class="form-group">
							<label class="col-sm-3 control-label custom-chk2">Title</label>
							<div class="col-sm-9">
							  <input type="text" class="form-control custom-width submit-ticket-box" name="title" id="ticket_title" placeholder="Title of the query">
                              <div class="signup-form-error" id="err_ticket_title"></div>
							</div>
						  </div>
						  <div class="form-group">
							<label class="col-sm-3 control-label custom-chk2">Subject</label>
							<div class="col-sm-9">
							  <input type="text" class="form-control custom-width submit-ticket-box" name="subject" id="ticket_sub" placeholder="Subject of the query">
                              <div class="signup-form-error" id="err_ticket_sub"></div>
							</div>
						  </div>
						  <div class="form-group">
							<label class="col-sm-3 control-label custom-chk2"> Submit a ticket</label>
							<div class="col-sm-9">
								 <textarea class="form-control submit-ticket-box-round" rows="5" placeholder="Ticket" name="msg" id="ticket_msg"></textarea>
                                 <div class="signup-form-error" id="err_ticket_msg"></div>
							</div>
						  </div>
						  <div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
							  <input type="hidden" name="fn" value="<?php echo md5('submit_ticket'); ?>" />
							  <input type="button" id="userTicketBtn" class="btn btn-lg btn-primary submit-btn" value="Send" />
							</div>
						  </div>
					</form>
					</div>
					<div class="clearfix"></div>
				
				</div>
			</div>
		
		<!-- sign up box ends here -->
		<!-- log in box starts here -->
		<div class="col-md-3">
			<div class="contact-box address-part">
			<h3 class="contact-txt-our-address">Our Address</h3>
			<hr>
			<p><span class="glyphicon glyphicon-phone"></span> +123456789</p>
			<p><span class="glyphicon glyphicon-envelope"></span> support@cygna.com</p>
		</div>
		<!-- log in box ends here -->
		</div>
	</div>
</div>
</div>

<!-- body ends here -->
<?php
	if(isset($GLOBALS['_COOKIE']['uid']) || isset($_SESSION['user_id']))
	{
		include 'v-templates/post-footer.php';
	}
	else
	{
		include 'v-templates/footer.php';
	}
?>