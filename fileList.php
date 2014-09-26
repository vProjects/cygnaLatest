<?php
	session_start();
	$pageTitle = 'File List';
	if(!isset($GLOBALS['_COOKIE']['uid']) && !isset($_SESSION['user_id']))
	{
		header("Location: log-in.php");
	}
	include ("v-templates/header.php");
?>
<?php
	if(isset($GLOBALS['_GET']['wid']))
	{
		$wid = $GLOBALS['_GET']['wid'];
		$bid_id = $manageContent->getBidIdFromWid($_GET['wid']);
	}
	else
	{
		header("Location: cygna.php?op=pro");
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
        	<!-- body left section starts here -->
        	<div class="col-md-3 profile_left_part_outline">
                <?php
					if(isset($GLOBALS['_GET']['wid']))
					{
						include 'v-modules/workroom.php';
					}
					else
					{
						include 'v-modules/right-nav.php';
					}
				?>
                <?php
					include 'v-modules/user-running-projects.php';
				?>
			<?php
				include ("v-modules/polling.php");
			?>	
			</div>	
			
            <!-- body left section ends here -->
            <!-- body middle section starts here -->
            <div class="col-md-7 profile_middle_part_outline">
            	<div class="profile_box_outline billing_box_outline">
                	<div class="profile_box_heading project_title_outline_userdetails">FILE LIST</div>
                    <div class="billing_box_inner">
                    	<div class="billing_page_heading">Workroom Files</div>
                        <!-- file section starts here -->
                        <div class="message_details_outline">
	                        <!-- input file starts here -->
	                        <form action="v-includes/class.formData.php" method="post" enctype="multipart/form-data" class="file-form">
	                        	<div class="input_msg_outline">
		                             <div class="col-md-9 col-sm-9 col-xs-9">
		                                <input type="file" class="form-control" name="wk_file" />
		                             </div>
		                             <div class="col-md-3 col-sm-3 col-xs-3">
		                             	<input type="hidden" name="fn" value="<?php echo md5('file_upload') ?>" />
		                             	<input type="hidden" name="wid" value="<?php echo $wid ?>" />
		                                <input type="submit" class="input_msg_submit postjob-submit-btn" value="UPLOAD" />
		                             </div>
		                             <div class="clearfix"></div>
		                        </div>
	                        </form>
	                        
                        	<?php
                        		//get the file list from the database
                        		$manageContent->getWorkroomFileList($wid,10);
                        	?>
	                    	
                        </div>
                        <!-- message section ends here -->
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- body middle section ends here -->
            <!-- body right section starts here -->
            <?php
            	//add add section
            	include 'v-modules/ads.php';
            ?>
            <!-- body right section ends here -->
        </div>
    </div>
</div>
</div>
<!-- body ends here -->
<?php
	include 'v-templates/post-footer.php';
?>
