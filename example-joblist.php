<?php
	session_start();
	$pageTitle = 'MyCygna';
	if(isset($GLOBALS['_COOKIE']['uid']) || isset($_SESSION['user_id']))
	{
		header("Location: project-list.php");
	}
	include ("v-templates/header.php");
?>
<?php
	if(!isset($GLOBALS['_GET']['cat']))
	{
		header("Location: index.php");
	}
	else
	{
		$cat = $GLOBALS['_GET']['cat'];
	}
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
            <!-- body right section starts here -->
           <div class="col-md-10 col-md-offset-1 profile_left_part_outline">
           		<div class="project_list_heading_bar project_title_outline_userdetails">
					<span class="pull-left">Project List</span>
					<div class="clearfix"></div>
				</div>
				<div class="profile_box_outline project-listpage-top-adjust">
        			<div class="portfolio_details">
						
					<?php	
						//getting category id
						$catId = $manageContent->getCategoryIdFromName($cat);
						//get project list
						$manageContent->getExampleProjectList($catId); 
					?>
							
					</div>
				</div>
           
            </div>
            <!-- body right section ends here -->
        </div>
    </div>
</div>
</div>
<!-- body ends here -->
<?php
	include 'v-templates/footer.php';
?>
