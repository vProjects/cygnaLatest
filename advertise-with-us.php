<?php
	session_start();
	$pageTitle = 'Advertise';
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
    	<div class="row profile_body_row">
        	<!-- body left section starts here -->
        	<div class="col-md-10 profile_left_part_outline">
                <div class="advertisement_body_outline">
                	<h2 class="post_project_top_heading">Advertise with us</h2>
                    <p class="post_project_top_para">Please fill out this form so that we may process your advertisement inquiry.</p>
                    <form role="form" method="post" action="v-includes/class.formData.php" id="advertise_form">
                    	<div class="advertisement_form_category">Personal Information</div>
                    	<div class="form-group pp_form_group">
                        	<label class="col-md-3 advertisement_form_label">Full Name:</label>
                            <div class="col-md-6">
                            	<input type="text" class="form-control pp_form_textbox" name="f_name" id="adv_name"/>
                            	<div class="form-error" id="err_adv_name"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group pp_form_group">
                        	<label class="col-md-3 advertisement_form_label">Company:</label>
                            <div class="col-md-6">
                            	<input type="text" class="form-control pp_form_textbox" name="company" id="adv_company"/>
                            	<div class="form-error" id="err_adv_company"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group pp_form_group">
                        	<label class="col-md-3 advertisement_form_label">Contact Number:</label>
                            <div class="col-md-6">
                            	<input type="text" class="form-control pp_form_textbox" name="contact" id="adv_contact"/>
                            	<div class="form-error" id="err_adv_contact"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group pp_form_group">
                        	<label class="col-md-3 advertisement_form_label">Email Id:</label>
                            <div class="col-md-6">
                            	<input type="text" class="form-control pp_form_textbox" name="email" id="adv_email"/>
                            	<div class="form-error" id="err_adv_email"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="advertisement_form_category">Select Budget</div>
                        <div class="form-group pp_form_group">
                        	<label class="col-md-3 advertisement_form_label">Budget:</label>
                            <div class="col-md-6">
                            	<input type="text" class="form-control pp_form_textbox advertisement_budget_textbox" name="budget" id="adv_budget"/>
                            	<div class="form-error" id="err_adv_budget"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="advertisement_form_category">Reason for advertisement</div>
                        <div class="form-group pp_form_group">
                        	<label class="col-md-3 advertisement_form_label">Message:</label>
                            <div class="col-md-6">
                            	<textarea class="form-control pp_form_textarea" rows="8" name="message" id="adv_msg"></textarea>
                            	<div class="form-error" id="err_adv_msg"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        
                        <div class="form-group pp_form_group">
                            <div class="col-md-6 col-md-offset-3">
                            	<input type="hidden" name="fn" value="<?php echo md5('advertise_us'); ?>" />
                            	<input type="button" class="btn btn-success btn-lg pull-right" value="SUBMIT" id="advertise_btn"/>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
            <!-- body left section ends here -->
            <!-- body right section starts here -->
            <?php
            	//add add section
            	include 'v-modules/ads.php';
            ?>
            <!-- body right section ends here -->
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
