<?php
	session_start();
	$pageTitle = 'Account Info';
	if(!isset($GLOBALS['_COOKIE']['uid']) && !isset($_SESSION['user_id']))
	{
		header("Location: log-in.php");
	}
	include ("v-templates/header.php");
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
			            <li class="profile-page-list"><a href="cygna.php?op=pro">Project List</a></li>
			            <li class="profile-page-list  profile-page-list-bottom"><a href="cygna.php?op=job">Job List</a></li>
			        </ul>
			    </div>
			    <div class="profile_box_outline">
			        <div class="profile_box_heading">BIDS LEFT</div>
			        <div class="hiring_rate"><?php echo $bids[0]['bids_remaining']; ?> Bids / <?php echo $bids[0]['total_bids']; ?> Bids</div>
			    </div> 
			</div>
			<!-- body left section ends here -->
			<!-- body middle section starts here -->
			<div class="col-md-7 profile_middle_part_outline">
			    <div class="profile_box_outline mrgn-null">
			        <div class="profile_box_heading project_title_outline_userdetails">Account Details</div>
			        <div class="account-details">
			        	<table class="table table-hover">
			        		<?php $manageContent->getUserMoneyInPage(); ?>
			        	</table>
			        	<form role="form" class="form-horizontal" action="v-includes/class.formData.php" method="post">
			        		<div class="form-group">
							    <label class="col-sm-12">Request Amount For Withdrawl</label>
							    <div class="col-sm-6">
							      <input type="text" name="amount" class="form-control mrgn-tp" placeholder="Enter Amount in $">
							    </div>
							    <div class="col-sm-3">
							    	<input type="hidden" name="fn" value="<?php echo md5('withdraw_amount'); ?>" />
							      <button type="submit" class="btn btn-default mrgn-tp">SUBMIT</button>
							    </div>
							  </div>
			        	</form>
			        </div>
			    </div>
			    <div class="profile_box_outline">
			        <div class="profile_box_heading project_title_outline_userdetails">Transactions</div>
			        <div class="portfolio_details">
			           <div class="table-bg"> 
			            <div class="table-responsive">
			            	<table class="table table-hover table-bottom-adjust">
			                	<thead>
			                    	<tr class="table-heading-bg">
			                        	<th>Specification</th>
			                            <th>Date</th>
			                            <th>Credit</th>
			                            <th>Debit</th>
			                            <th>Balance</th>
			                        </tr>
			                    </thead>
			                    <tbody>
			                    	<?php
			                    		//getting user transaction history
			                    		$manageContent->getUserMoneyTransactionList();
			                    	?>
			                    </tbody>                
			               </table>
			            </div>
			            </div>
			        </div>
			    </div>
			</div>
			<!-- body middle section ends here -->
            <!-- body right section starts here -->
            <?php include 'v-modules/ads.php'; ?>
            <!-- body right section ends here -->
        </div>
    </div>
</div>
<!-- body ends here -->
<?php
	include 'v-templates/post-footer.php';
?>
