<?php
	session_start();
	$pageTitle = 'SignUp';
	if(isset($GLOBALS['_COOKIE']['uid']) || isset($_SESSION['user_id']))
	{
		header("Location: cygna.php?op=pro");
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
		<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-8">
			<h2 class="post_project_top_heading">WELCOME TO CYGNATECH</h2>
			<h4 class="welcome-sub-header">Post a job find a job</h4>
		</div>
		<div class="col-md-3"></div>
		</div>
		<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-7">
			<div class="login-box">
				<!-- <div class="col-md-12">
					<div class="col-md-6">
						<h4 class="login-txt">Follow us or Like us on:</h4>
					</div>
						<div class="logo-part">
							<div class="col-md-3">
							<button type="submit" class="btn  btn-default btn-fb">FACEBOOK</button>
							<div class="fb-follow" data-href="https://www.facebook.com/pages/Cygnatech/134154106772396" data-colorscheme="light" data-layout="standard" data-show-faces="true"></div>
							</div>
							<div class="col-md-3">
							<button type="submit" name="linkedin" class="btn btn-default btn-in">TWITTER</button>
							<a href="https://twitter.com/Fanysf01" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @twitterapi</a>
							</div>
							<div class="clearfix"></div>
						</div>
					
					<div class="clearfix"></div>
				</div> -->
					<div class="col-md-1"></div>
					<div class="col-md-10 mrgn-tp">
						<form action="v-includes/class.formData.php" class="form-horizontal" id="signup-form" role="form" method="post">
						  <div class="form-group">
							<label class="col-sm-3 control-label custom-chk">Email</label>
							<div class="col-sm-9">
							  <input type="text" class="form-control custom-width" name="email_id" id="signup_email_id" placeholder="Email">
                              <div class="signup-form-error" id="err_signup_email_id"></div>
							</div>
						  </div>
						  <div class="form-group">
							<label class="col-sm-3 control-label custom-chk">User Name </label>
							<div class="col-sm-9">
							  <input type="text" class="form-control custom-width" name="username" id="signup_username" placeholder="Usar Name">
                              <div class="signup-form-error" id="err_signup_username"></div>
							</div>
						  </div>
						  <div class="form-group">
							<label class="col-sm-3 control-label custom-chk">Password </label>
							<div class="col-sm-9">
							  <input type="password" class="form-control custom-width" name="password" id="signup_password" placeholder="Password">
                              <div class="signup-form-error" id="err_signup_password"></div>
							</div>
						  </div>
						  <div class="form-group">
							<label class="col-sm-3 control-label custom-chk">Confirm Password</label>
							<div class="col-sm-9">
							  <input type="password" class="form-control custom-width" name="con_password" id="signup_con_password" placeholder="Confirm Password">
                              <div class="signup-form-error" id="err_signup_con_password"></div>
							</div>
						  </div>
						  <div class="form-group">
						  <div class="col-sm-6">
							<div class="col-sm-offset-6 col-sm-9">
							  <div class="radio-inline custom-chk">
								<label>
								 <input type="radio" name="category" id="signup_employer" value="employer"> Hire
								</label>
								</div>
							</div>
							</div>
							<div class="col-sm-6">
							<div class="col-sm-12">
							  <div class="radio-inline custom-chk">
								<label>
								  <input type="radio" name="category" id="signup_contractor" value="contractor"> Work 
                                </label>
								</div>
                                <div class="signup-form-error" id="err_signup_category"></div>
							</div>
							</div>
						  </div>
						  <div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
							  <div class="checkbox termsnconds">
								<label>
								  <input type="checkbox" id="signup_terms"> I accept all the <a href="terms-condition.php">terms & conditions</a> of this website.
								</label>
								</div>
                                <div class="signup-form-error" id="err_signup_terms"></div>
							</div>
						  </div>
						  <div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
                              <input type="hidden" name="fn" value="<?php echo md5('signup');?>" />
							  <input type="button" value="SignUp" class="btn btn-lg btn-success" onclick="validateSignupForm('signup-form')"/>
							</div>
						  </div>
					</form>

					</div>
					<div class="col-md-1"></div>
					<div class="clearfix"></div>
				
			</div>
			</div>
		
		<!-- sign up box ends here -->
		<!-- log in box starts here -->
		<div class="col-md-3">
			<div class="login-box">
			<h4 class="login-txt">Already a member?</h4>
			<div class="signup-part">
				<a href="log-in.php"><button type="submit" name="sign-up" class="btn btn-sign btn-default">Sign in</button></a>
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
		<div class="col-md-1"></div>
		<!-- log in box ends here -->
		</div>
	</div>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=485383234941891&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<!-- body ends here -->
<?php
	include 'v-templates/footer.php';
?>
