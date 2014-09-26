<?php
	session_start();
	$pageTitle = 'AboutUs';
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
	<div class="row">
		<div class="col-md-8">
			<h2 class="post_project_top_heading">ABOUT US</h2>
		</div>
		<div class="col-md-4"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-10">
						<ul class="nav nav-tabs abc">
						  <?php
						  	//get nav-tab menus
						  	$manageContent->getTabsAboutUsMenu();
						  ?>
						</ul>

		<!-- Tab panes -->
							<div class="tab-content">
								 <?php
								 	//get about us content
								 	$manageContent->getContentAboutUsMenu();
								 ?>
								  
								<div class="clearfix"></div>
							</div>
			</div>
			<div class="col-md-2"></div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="clearfix"></div>
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
