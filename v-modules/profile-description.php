<!-- body left section starts here -->
<div class="col-md-3 profile_left_part_outline">
    <?php 
		//getting profie images
		$manageContent->getUserImage($_SESSION['user_id'],'pp'); 
	?>
    <div class="profile_box_outline">
        <?php
			//getting hourly rate of user
			$manageContent->getUserHourlyRate($_SESSION['user_id']);
		?>
    </div>
    <div class="profile_box_outline">
        <div class="profile_box_heading">Profile Overview</div>
        <ul class="profile_overview profile_overview-profilepage">
            <li class="profile-page-list"><a href="public-profile.php?uid=<?php echo $_SESSION['user_id']; ?>">Public Profile</a></li>
            <li class="profile-page-list"><a href="user-account.php">Accounts</a></li>
            <li class="profile-page-list"><a href="change-password.php">Change Password</a></li>
            <li class="profile-page-list"><a href="cygna.php?op=pro">Project List</a></li>
            <li class="profile-page-list  profile-page-list-bottom"><a href="cygna.php?op=job">Job List</a></li>
        </ul>
    </div>
    <!-- <div class="profile_box_outline">
        <div class="profile_box_heading">BIDS LEFT</div>
        <div class="hiring_rate">39 Bids / 100 Bids</div>
    </div> -->
</div>
<!-- body left section ends here -->
<!-- body middle section starts here -->
<div class="col-md-7 profile_middle_part_outline">
    <?php 
		//getting cover images
		$manageContent->getUserImage($_SESSION['user_id'],'cp'); 
	?>
    <div class="profile_box_outline">
		<?php
            //getting cover images
            $manageContent->getUserDescription($_SESSION['user_id']); 
        ?>
    </div>
    <!-- portfolio part start here -->
    <div class="profile_box_outline">
        <div class="profile_box_heading project_title_outline_userdetails">Portfolio
        	<span class="portfolio_part_share pull-right"><a href="edit-profile.php?op=port">Add</a></span>
        </div>
        <div class="portfolio_details">
           <?php
				//getting cover images
				$manageContent->getUserPortfolio($_SESSION['user_id']); 
			?> 
        </div>
    </div>
    <!-- portfolio part ends here -->
    <!-- my skills part starts here -->
    <div class="profile_box_outline skill-block">
        <div class="profile_box_heading project_title_outline_userdetails">My Skills
        	<span class="portfolio_part_share pull-right"><a href="edit-profile.php?op=pro">Edit</a></span>
        </div>
        <div class="myskills_details">
             <?php
				//getting cover images
				$manageContent->getUserSkills($_SESSION['user_id']); 
			?>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- my skills part ends here -->
    <!-- employment details starts here -->
    <div class="profile_box_outline">
        <div class="profile_box_heading project_title_outline_userdetails">Employment Details
        	<span class="portfolio_part_share pull-right"><a href="edit-profile.php?op=emp">Add</a></span>
        </div>
        <div class="portfolio_details">
           <div class="table-bg"> 
            <div class="table-responsive">
            	<table class="table table-hover table-bottom-adjust">
                	<?php
						//getting cover images
						$manageContent->getUserEmployementList($_SESSION['user_id']); 
					?>
                </table>
            </div>
            </div>
        </div>
    </div>
    <!-- employment details ends here -->
    <!-- education details starts here -->
    <div class="profile_box_outline">
        <div class="profile_box_heading project_title_outline_userdetails">Education Details
        	<span class="portfolio_part_share pull-right"><a href="edit-profile.php?op=edu">Add</a></span>
        </div>
        <div class="portfolio_details">
            <div class="table-bg">
            <div class="table-responsive">
            	<table class="table table-hover table-bottom-adjust">
                	<?php
						//getting cover images
						$manageContent->getUserEducationList($_SESSION['user_id']); 
					?>
                </table>
            </div>
            </div>
        </div>
    </div>
    <!-- education details ends here -->
</div>
<!-- body middle section ends here -->