<?php
	session_start();
	$pageTitle = 'Change Password';
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
			<div class="project_title_outline_userdetails submit-ticket-text">Change Password</div>
		<div class="col-md-12">
			<div class="contact-box">
				<div class="col-md-12">
					<div class="col-md-4">
						<h4 class="contact-txt">Change Your Password Here</h4>
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
						<form class="form-horizontal" id="" action="v-includes/class.formData.php" method="post">
							<div class="form-group">
							<label class="col-sm-3 control-label custom-chk2">Old Password</label>
							<div class="col-sm-6">
							  <input type="text" class="form-control custom-width submit-ticket-box" name="old_pass" id="ticket_title" placeholder="Your Existing Password">
                              <div class="signup-form-error" id=""></div>
							</div>
						  </div>
						  <div class="form-group">
							<label class="col-sm-3 control-label custom-chk2">New Password</label>
							<div class="col-sm-6">
							  <input type="text" class="form-control custom-width submit-ticket-box" name="new_pass" id="" placeholder="Your New Password">
                              <div class="signup-form-error" id=""></div>
							</div>
						  </div>
						  <div class="form-group">
							<label class="col-sm-3 control-label custom-chk2">Re-Enter New Password</label>
							<div class="col-sm-6">
							  <input type="text" class="form-control custom-width submit-ticket-box" name="re_pass" id="" placeholder="Re-Enter New Password">
                              <div class="signup-form-error" id=""></div>
							</div>
						  </div>
						  <div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
							  <input type="hidden" name="fn" value="<?php echo md5('change_password'); ?>" />
							  <input type="submit" id="" class="btn btn-lg btn-success" value="Submit" />
							</div>
						  </div>
					</form>
					</div>
					<div class="clearfix"></div>
				
				</div>
			</div>
		
		<!-- sign up box ends here -->
		<!-- log in box starts here -->
		
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