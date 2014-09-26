<?php
	session_start();
	//include the DAL library to use the model layer methods
	include 'class.DAL.php';
	
	//include the utility library to get the browser info
	include 'class.utility.php';
	
	//include the utility library to upload the user files
	include 'class.upload_file.php';
	
	//include the DAL library to send the mail
	include 'class.mail.php';
	
	//class for fetching data of ajax request
	class fetchData
	{
		public $manageContent;
		public $manageUtility;
		public $manageFileUploader;
		public $mailSent;
		
		/*
		- method for constructing DAL, Utility, Mail class
		- Auth: Dipanjan
		*/	
		function __construct()
		{
			$this->manageContent = new ManageContent_DAL();
			$this->manageUtility = new utility();
			$this->manageFileUploader = new FileUpload();
			$this->mailSent = new mailFunction();
		}
		
		/*
		- method for checking unique email id
		- Auth: Dipanjan
		*/
		function getUniqueEmail($email_id)
		{
			//getting all email id from database
			$allEmail = $this->manageContent->getValue('user_credentials','email_id');
			//initializing a parameter
			$emailCounter = 0;
			foreach($allEmail as $allEmails)
			{
				if($allEmails['email_id'] == $email_id)
				{
					$emailCounter = 1;
					break;
				}
			}
			echo $emailCounter;
		}
		
		/*
		- method for checking unique email id
		- Auth: Dipanjan
		*/
		function getUniqueUsername($username)
		{
			//getting all email id from database
			$allUser = $this->manageContent->getValue('user_credentials','username');
			//initializing a parameter
			$userCounter = 0;
			foreach($allUser as $allUsers)
			{
				if($allUsers['username'] == $username)
				{
					$userCounter = 1;
					break;
				}
			}
			echo $userCounter;
		}
		
		/*
		- method for getting sub category of a category
		- Auth: Dipanjan
		*/
		function getSubCategory($category)
		{
			//get values of sub category of this category
			$subcatList = $this->manageContent->getValue_where('subcategory', '*', 'categoryId', $category);
			if(!empty($subcatList[0]))
			{
				foreach($subcatList as $subcat)
				{
					echo '<option value="'.$subcat['subCategoryId'].'">'.$subcat['name'].'</option>';
				}
			}
			else
			{
				echo '<option>No Subcategory</option>';
			}
		}
		
		/*
		- method for getting post project wok type details
		- Auth: Dipanjan
		*/
		function getWorkTypeDetails($work_type)
		{
			//checking for work type
			if($work_type == 'Hourly')
			{
				echo '<div class="rate_optional_text">
						<div class="pull-left">
							<select class="form-control pp_hourly_selectbox pull-left" name="hourly_rate" id="hourly_rate_list">
								<option value="">-- select hourly rate --</option>
								<option value="Less Than $10/hr">Less Than $10/hr</option>
								<option value="$10/hr to $15/hr">$10/hr to $15/hr</option>
								<option value="$15/hr to $20/hr">$15/hr to $20/hr</option>
								<option value="$20/hr to $30/hr">$20/hr to $30/hr</option>
								<option value="$30/hr to $40/hr">$30/hr to $40/hr</option>
								<option value="$40/hr to $50/hr">$40/hr to $50/hr</option>
								<option value="Above $50/hr">Above $50/hr</option>
								<option value="custom_price_hourly">Enter Custom Price Range</option>
							</select>
						</div>
						<div class="pull-left" id="pp_hourly_manual_rate">
							<input type="text" class="col-md-2 pull-left pp_form_textbox pp_form_pr_textbox" placeholder="min" name="hourly_custom_min" />
							<p class="pull-left"> To </p>
							<input type="text" class="col-md-2 pull-left pp_form_textbox pp_form_pr_textbox" placeholder="max" name="hourly_custom_max" />
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="rate_optional_text" id="pp_hourly_info">
						<input type="text" class="col-md-2 pull-left pp_form_textbox pp_form_mini_textbox" name="hours_of_week"/>
						<p class="pull-left">hrs/week </p>
						<select class="form-control pp_total_week_selectbox pull-left" name="hourly_time_range">
							<option>-- select duration --</option>
							<option value="1-2 weeeks">1-2 weeks</option>
							<option value="3-4 weeks">3-4 weeks</option>
							<option value="1-2 months">1-2 months</option>
							<option value="3-4 months">3-4 months</option>
						</select>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>';
			}
			else if($work_type == 'Fixed')
			{
				echo '<div class="rate_optional_text">
						<div class="pull-left" id="pp_fixed_rate">
							<select class="form-control pp_hourly_selectbox pull-left" name="fixed_rate" id="fixed_rate_list">
								<option value="">-- select fixed rate --</option>
								<option value="Less than $500">Less than $500</option>
								<option value="$500 to $1000">$500 to $1000</option>
								<option value="$1000 to $5000">$1000 to $5000</option>
								<option value="$5000 to $10000">$5000 to $10000</option>
								<option value="Above $10000">Above $10000</option>
								<option value="custom_price_fixed">Enter Custom Price Range</option>
							</select>
						</div>
						<div class="pull-left" id="pp_fixed_manual_rate">
							<input type="text" class="col-md-2 pull-left pp_form_textbox pp_form_pr_textbox" placeholder="min" name="fixed_custom_min" />
							<p class="pull-left"> To </p>
							<input type="text" class="col-md-2 pull-left pp_form_textbox pp_form_pr_textbox" placeholder="max" name="fixed_custom_max" />
							</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>';
			}
		}
		
		/*
		- method for inserting profile crop image
		- Auth: Dipanjan
		*/
		function insertProfileImage($user_id,$cropData)
		{
			
		}
		
		/*
		- method for inserting survey feedback
		- Auth: Dipanjan
		*/
		function insertSurveyFeedback($user_id,$userData)
		{
			//checking for active survey set
			$active_survey_set = $this->manageContent->getValue_where("survey_info","*","status",1);
			$survey_set = $active_survey_set[0]['set_no'];
			//insert the value to survey feedback table
			$column_name = array("user_id","set_no","feedback");
			$column_value = array($user_id,$survey_set,$userData['feedback']);
			$insert = $this->manageContent->insertValue("survey_feedback",$column_name,$column_value);
		}
		
		/*
		- method for inserting polling answer
		- Auth: Dipanjan
		*/
		function insertPollingAnswer($user_id,$userData)
		{
			//getting the user id fiels from database
			$users = $this->manageContent->getValueMultipleCondtn("polling_info","*",array("set_no","answer_no"),array($userData['set_no'],$userData['answer']));
			if(empty($users[0]['user_id']))
			{
				$new_user_id = $user_id;
			}
			else
			{
				$new_user_id = ','.$user_id;
			}
			//updating the user id field
			$update = $this->manageContent->updateValueWhere("polling_info","user_id",$new_user_id,"id",$users[0]['id']);
			
			//get user credentials
			$userCred = $this->getEmailIdFromUserId($user_id);
			//sending mail
			$this->mailSent->mailAfterPolling($userCred[0], $userCred[1]);
		}
		
		/*
		- method for getting sub category
		- Auth: Dipanjan
		*/
		function getProjectSubCategory($userData)
		{
			//get sub category from database
			echo '<li class="pro_cat"><a>'.$userData['category'].'</a></li>
					<ul class="profile_overview profile_1st_child_nav">
						<li><i class="glyphicon glyphicon-chevron-right profile_ovr_icon"></i><a>Sub Category 1</a></li>
						<li><i class="glyphicon glyphicon-chevron-right profile_ovr_icon"></i><a>Sub Category 2</a></li>
						<li><i class="glyphicon glyphicon-chevron-right profile_ovr_icon"></i><a>Sub Category 3</a></li>
						<li><i class="glyphicon glyphicon-chevron-right profile_ovr_icon"></i><a>Sub Category 4</a></li>
						<li><i class="glyphicon glyphicon-chevron-right profile_ovr_icon"></i><a>Sub Category 5</a></li>
					</ul>';
		}
		
		/*
		- method for getting project of given category
		- Auth: Dipanjan
		*/
		function getProjectListOfCategory($user_id,$userData)
		{
			//getting the job list of this category
			$jobs = $this->manageContent->getValue_likely_descendingLimit("project_info","*","category",$userData['category'],50);
			//printing the div outline here
			echo '<div class="project_list_heading_bar">
					<span class="pull-left">Projects</span>
					<span class="pull-right">
						<ul class="pagination pagination-sm project_list_pagination_outline">
							<li><a href="#" class="pagination_arrow"><img src="img/pagination_left_arrow.png" /></a></li>
							<li><a href="#" class="pagination_active">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#" class="pagination_arrow"><img src="img/pagination_right_arrow.png" /></a></li>
						</ul>
					</span>
					<div class="clearfix"></div>
				</div>';
			
			//showing the project list	
			if(!empty($jobs))
			{
				//for sub category search
				if(isset($userData['sub_category']))
				{
					//calling the function for sub category
					$project_list_subcategory = $this->getProjectListOfSubCategory($jobs,$user_id,$userData['sub_category']);
				}
				else
				{
					foreach($jobs as $job)
					{
						//reject the jobs which have posted by this user
						if($job['user_id'] != $user_id)
						{
							echo '<div class="project_details_outline">
									<div class="project_title_outline">
										<span class="pull-left project_title_text"><a href="post-bid.php">'.$job['title'].'</a></span>
										<span class="pull-right project_bid_button"><img src="img/hammer.png" /><span class="project_bid_text">Bid</span></span>
										<div class="clearfix"></div>
									</div>
									<div class="project_part_details_outline">
										<p class="project_part_description">'.$this->getSubStringText($job['description'],1000).'</p>
										<div class="project_list_info_outline">
											<span class="project_list_icon pull-left"><img src="img/time_icon.png" /></span>
											<span class="project_list_icon_text pull-left">15 Days Left</span>
											<span class="project_list_icon pull-left"><img src="img/skills_icon.png" /></span>
											<span class="project_list_icon_text pull-left">PHP, Javascript</span>
											<span class="project_list_icon pull-left"><img src="img/price_icon.png" /></span>
											<span class="project_list_icon_text pull-left">$ 500</span>
											<span class="project_list_icon pull-left"><img src="img/bids_icon.png" /></span>
											<span class="project_list_icon_text pull-left">31 Bids</span>
											<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>';
						}
					}
				}	
			}
			else
			{
				echo '<div class="portfolio_part_heading">No Project Found</div>';
			}
			
			echo '<div class="project_list_heading_bar bottom_pagination">
					<span class="pull-right">
						<ul class="pagination pagination-sm project_list_pagination_outline">
							<li><a href="#" class="pagination_arrow"><img src="img/pagination_left_arrow.png" /></a></li>
							<li><a href="#" class="pagination_active">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#" class="pagination_arrow"><img src="img/pagination_right_arrow.png" /></a></li>
						</ul>
					</span>
					<div class="clearfix"></div>
				</div>';
		}
		
		/*
		- method for getting project of given sub category
		- Auth: Dipanjan
		*/
		function getProjectListOfSubCategory($jobs,$user_id,$sub_category)
		{
			//initialize the parameter
			$job_count = 0;
			foreach($jobs as $job)
			{
				//checking for user id and sub category
				if($job['user_id'] != $user_id && strpos($job['sub_category'],$sub_category) !== false)
				{
					echo '<div class="project_details_outline">
							<div class="project_title_outline">
								<span class="pull-left project_title_text"><a href="post-bid.php">'.$job['title'].'</a></span>
								<span class="pull-right project_bid_button"><img src="img/hammer.png" /><span class="project_bid_text">Bid</span></span>
								<div class="clearfix"></div>
							</div>
							<div class="project_part_details_outline">
								<p class="project_part_description">'.$this->getSubStringText($job['description'],1000).'</p>
								<div class="project_list_info_outline">
									<span class="project_list_icon pull-left"><img src="img/time_icon.png" /></span>
									<span class="project_list_icon_text pull-left">15 Days Left</span>
									<span class="project_list_icon pull-left"><img src="img/skills_icon.png" /></span>
									<span class="project_list_icon_text pull-left">PHP, Javascript</span>
									<span class="project_list_icon pull-left"><img src="img/price_icon.png" /></span>
									<span class="project_list_icon_text pull-left">$ 500</span>
									<span class="project_list_icon pull-left"><img src="img/bids_icon.png" /></span>
									<span class="project_list_icon_text pull-left">31 Bids</span>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>';
					
					//increament the parameter
					$job_count++;
				}
			}
			
			//checking that no of job available
			if($job_count == 0)
			{
				echo '<div class="portfolio_part_heading">No Project Found</div>';
			}
		}
		
		/*
		- method for awarding a bid
		- Auth: Dipanjan
		*/
		function awardBidForProject($bid_id)
		{
			//checking that bid id is present or not
			$bid_details = $this->manageContent->getValue_where("bid_info","*","bid_id",$bid_id);
			
			if(!empty($bid_details))
			{
				//get the project details on which bid is made
				$project_details = $this->manageContent->getValue_where("project_info","*","project_id",$bid_details[0]['project_id']);
				
				//check whether the bid has been awarded or not
				$awarded = $this->manageContent->getValue_where('award_info','*','bid_id',$bid_id);
				if( empty($awarded) )
				{
					//update the award field of table
					$update = $this->manageContent->updateValueWhere("bid_info","awarded",1,"bid_id",$bid_id);
					
					//update award_bid_id field in project info table
					$upd = $this->manageContent->updateValueWhere("project_info","award_bid_id",$bid_id,"project_id",$bid_details[0]['project_id']);
					
					//create the variables
					$award_id = uniqid('awa');
					$project_id = $bid_details[0]['project_id'];
					$contractor_id = $bid_details[0]['user_id'];
					$employer_id = $project_details[0]['user_id'];
					$date = date('Y-m-h h:i:s');
					
					//insert the award_info
					$column_name_award = array("award_id","project_id","bid_id","employer_id","contractor_id","awarded_date","is_accepted","result_date","is_declined","status");
					$column_value_award = array($award_id,$project_id,$bid_id,$employer_id,$contractor_id,$date,0,"0000-00-00 00:00:00",0,1);
					$insert = $this->manageContent->insertValue("award_info",$column_name_award,$column_value_award);
					
					//getting contractor user details
					$user_con = $this->getEmailIdFromUserId($bid_details[0]['user_id']);
					//send email to contractor
					$this->mailSent->mailForAwardJob($user_con[0], $user_con[1], $project_details[0]['title']);
					
					echo 'Successfully Awarded.';
				}
				else
				{
					echo 'Already awarded';
				} 
			}
		}
		
		/*
		- method for getting sub string of text with given number of character
		- Auth: Dipanjan
		*/
		function getSubStringText($text,$string_no)
		{
			$subString = substr($text,0,$string_no);
			return $subString;
		}
		
		/*
		- method to insert the message in the database
		- Auth Singh
		*/
		function insertMsg($postData)
		{
			if( !empty($postData['msg']) && !empty($postData['bid']) )
			{
				//generate chat id
				$chat_id = uniqid('CHAT');
				
				//get full bid info
				$bid = $this->manageContent->getValue_where("bid_info","*","bid_id",$postData['bid']);
				
				//get project_id from the bid_info table
				$project = $this->manageContent->getValue_where("project_info","*","project_id",$bid[0]['project_id']);
				
				//get the details
				$sender = $_SESSION['user_id'];
				$contractor = $bid[0]['user_id'];
				$employer = $project[0]['user_id'];
				$message = $postData['msg'];
				$bid_id = $postData['bid'];
				$project_id = $bid[0]['project_id'];
				$date = date("Y-m-d g:i:s");
				$status = 1;		//1 for unread message
				
				//insert the values
				$column_name = array("chat_id", "sender", "message", "emp_user_id", "con_user_id", "bid_id", "project_id", "date", "status");
				$column_value = array($chat_id, $sender, $message, $employer, $contractor, $bid_id, $project_id, $date, $status);
				$insert = $this->manageContent->insertValue("chat_info",$column_name,$column_value);
				
				if( $insert > 0 )
				{
					echo "Message send successfully.";
				}
				else {
					echo "Error!!. Please try again.";
				}
			}
			else
			{
				echo "Please fill the form properly and try again.Thank you.";
			}
		}

		/*
		- method for getting messages notification from the database
		- generates the full UI
		- Auth: Singh
		*/
		function getMsgNotification($postData)
		{
			$user_id = $_SESSION['user_id'];
			$messages = $this->manageContent->get_msg_notification("chat_info","*","emp_user_id",$user_id,"con_user_id",$user_id,'sender',$user_id,'status',1);
			
			if( !empty($messages) )
			{
				echo count($messages);
			}
			else
			{
				echo 0;
			}
		}
		
		/*
		- method responsible for accepting job
		- creates work room
		- Auth: Singh
		*/
		function acceptJob($postData)
		{
			//get the bid information
			$bid_details = $this->manageContent->getValue_where('bid_info','*','bid_id',$postData['bid']);
			
			//get the project details on which bid is made
			$project_details = $this->manageContent->getValue_where("project_info","*","project_id",$bid_details[0]['project_id']);
			
			//get award info of this job
			$award_info = $this->manageContent->getValue_where("award_info","*","project_id",$bid_details[0]['project_id']);
			
			//check for the valid contractor
			if( $_SESSION['user_id'] == $bid_details[0]['user_id'] && !empty($project_details) )
			{
				//update the accept flag
				$update_1 = $this->manageContent->updateValueWhere("award_info","is_accepted",1,"bid_id",$postData['bid']);
				$update_2 = $this->manageContent->updateValueWhere("award_info","result_date",date('Y-m-d g:i:s'),"bid_id",$postData['bid']);
				
				//create a work room for the job
				if( $update_1 == 1 && $update_2 == 1 )
				{
					//create the variables
					$workroom_id = uniqid('wkrm');
					$project_id = $bid_details[0]['project_id'];
					$employer_id = $project_details[0]['user_id'];
					$contractor_id = $bid_details[0]['user_id'];
					$date = date('Y-m-d');
					$time = date('h:i:s');
					
					//insert the values
					$column_name = array("workroom_id", "project_id", "bid_id", "emp_user_id", "con_user_id", "date", "time", "job_status");
					$column_value = array($workroom_id, $project_id, $postData['bid'], $employer_id, $contractor_id, $date, $time,1);
					$insert = $this->manageContent->insertValue("workroom_info",$column_name,$column_value);
					if($insert == 1)
					{
						//get contractor details
						$con_details = $this->manageContent->getValue_where('user_info', '*', 'user_id', $bid_details[0]['user_id']);
						//getting employer details
						$emp_details = $this->getEmailIdFromUserId($project_details[0]['user_id']);
						//sending mail to employer
						$this->mailSent->mailForAcceptingJob($emp_details[0], $emp_details[1], $con_details[0]['name'], $project_details[0]['title']);
						
						echo 'Successfully Awarded';
					}
				}
			}
			else
			{
				echo 'Please try again.';
			}
		}
		
		/*
		- method responsible for declining job
		- Auth: Singh
		*/
		function declineJob($postData)
		{
			//update the accept flag
			$update_1 = $this->manageContent->updateValueWhere("award_info","is_declined",1,"bid_id",$postData['bid']);
			$update_2 = $this->manageContent->updateValueWhere("award_info","result_date",date('Y-m-d g:i:s'),"bid_id",$postData['bid']);
			
			if( $update_1 == 1 && $update_2 == 1 )
			{
				//get the bid information
				$bid_details = $this->manageContent->getValue_where('bid_info','*','bid_id',$postData['bid']);
				
				//get the project details on which bid is made
				$project_details = $this->manageContent->getValue_where("project_info","*","project_id",$bid_details[0]['project_id']);
				
				//get contractor details
				$con_details = $this->manageContent->getValue_where('user_info', '*', 'user_id', $bid_details[0]['user_id']);
				//getting employer details
				$emp_details = $this->getEmailIdFromUserId($project_details[0]['user_id']);
				//sending mail to employer
				$this->mailSent->mailForDecliningJob($emp_details[0], $emp_details[1], $con_details[0]['name'], $project_details[0]['title']);
				
				echo "Successfully declined.";
			}
		}
		
		/*
		- method for responsible releasing money to contractor
		- Auth: Dipanjan
		*/
		function releaseMoneyToContractor($userData)
		{
			$date = date('Y-m-d');
			//checking for milestone id and workroom id
			$milestone = $this->manageContent->getValue_where('milestone_info', '*', 'milestone_id', $userData['milestone']);
			if(!empty($milestone[0]))
			{
				//get workroom details
				$workroom = $this->manageContent->getValue_where('workroom_info', '*', 'workroom_id', $milestone[0]['workroom_id']);
				if($workroom[0]['emp_user_id'] == $_SESSION['user_id'] && $milestone[0]['funding_status'] == 1)
				{
					//update releasing value
					$update = $this->manageContent->updateMultipleValueMulCondition('milestone_info', array('release_status','release_date'), array(1,$date), array('milestone_id'), array($milestone[0]['milestone_id']));
					//insert valus to user money info table
					$column_name = array('specification','user_id','date','credit_amount','total_amount','status');
					//getting user total amount
					$user_amount = $this->manageContent->getLastValue('user_money_info', '*', 'user_id', $workroom[0]['con_user_id'], 'id');
					$new_user_money = $user_amount[0]['total_amount'] + $milestone[0]['amount'];
					$column_value = array($milestone[0]['milestone_id'],$workroom[0]['con_user_id'],date('Y-m-d h:m:s a'),$milestone[0]['amount'],$new_user_money,1);
					$insert = $this->manageContent->insertValue('user_money_info', $column_name, $column_value);
					
					if($update != 0 && $insert != 0)
					{
						//get project details
						$proDetails = $this->manageContent->getValue_where('project_info', '*', 'project_id',$workroom[0]['project_id']);
						//get contractor info
						$conInfo = $this->getEmailIdFromUserId($user_id);
						//sending mail
						$this->mailSent->mailForReleasingMoney($conInfo[0], $conInfo[1], $milestone[0]['milestone_name'], $proDetails[0]['title']);
						
						echo 'Money Released';
					}
					else
					{
						echo 'Process Unsuccessfull';
					}
				}
				else 
				{
					echo 'Money Cant Be Released';
				}
			}
		}
		
		/*
		- method for fund release request
		- Auth: Dipanjan
		*/
		function sendFundRequestToEmployer($userData)
		{
			$datetime = date('Y-m-d h:i:s a');
			//checking for milestone id and workroom id
			$milestone = $this->manageContent->getValue_where('milestone_info', '*', 'milestone_id', $userData['milestone']);
			if(!empty($milestone[0]))
			{
				//get workroom details
				$workroom = $this->manageContent->getValue_where('workroom_info', '*', 'workroom_id', $milestone[0]['workroom_id']);
				if(!empty($workroom[0]) && $workroom[0]['con_user_id'] == $_SESSION['user_id'])
				{
					//get project details
					$project_details = $this->manageContent->getValue_where('project_info', '*', 'project_id', $workroom[0]['project_id']);
					//get sending user details
					$con_user_details = $this->manageContent->getValue_where('user_info', '*', 'user_id', $_SESSION['user_id']);
					//creating notification id
					$noti_id = uniqid('noti');
					$sending_user = $workroom[0]['emp_user_id'];
					$page_link = 'escrow.php?wid='.$workroom[0]['workroom_id'];
					$message = 'Funding Request of <b>'.$milestone[0]['milestone_name'].'</b> from <b>'.$con_user_details[0]['name'].'</b> for <b>'.$project_details[0]['title'].'</b>';
					$column_name = array('notification_id','message','date','user_id','project_id','from_user','page_link','view_status');
					$column_value = array($noti_id,$message,$datetime,$workroom[0]['emp_user_id'],$workroom[0]['project_id'],$_SESSION['user_id'],$page_link,0);
					$insert = $this->manageContent->insertValue('notification_info', $column_name, $column_value);
					if($insert != 0)
					{
						echo 'Request Send Successfully';
					}
				}
				else
				{
					echo 'Request Can Not Be Sent';
				}
			}
				
		}

		/*
		- method for release money request
		- Auth: Dipanjan
		*/
		function sendReleasingRequestToEmployer($userData)
		{
			$datetime = date('Y-m-d h:i:s a');
			//checking for milestone id and workroom id
			$milestone = $this->manageContent->getValue_where('milestone_info', '*', 'milestone_id', $userData['milestone']);
			if(!empty($milestone[0]))
			{
				//get workroom details
				$workroom = $this->manageContent->getValue_where('workroom_info', '*', 'workroom_id', $milestone[0]['workroom_id']);
				if(!empty($workroom[0]) && $workroom[0]['con_user_id'] == $_SESSION['user_id'] && $milestone[0]['funding_status'] == 1)
				{
					//get project details
					$project_details = $this->manageContent->getValue_where('project_info', '*', 'project_id', $workroom[0]['project_id']);
					//get sending user details
					$con_user_details = $this->manageContent->getValue_where('user_info', '*', 'user_id', $_SESSION['user_id']);
					//creating notification id
					$noti_id = uniqid('noti');
					$sending_user = $workroom[0]['emp_user_id'];
					$page_link = 'escrow.php?wid='.$workroom[0]['workroom_id'];
					$message = 'Money Release Request of <b>'.$milestone[0]['milestone_name'].'</b> from <b>'.$con_user_details[0]['name'].'</b> for <b>'.$project_details[0]['title'].'</b>';
					$column_name = array('notification_id','message','date','user_id','project_id','from_user','page_link','view_status');
					$column_value = array($noti_id,$message,$datetime,$workroom[0]['emp_user_id'],$workroom[0]['project_id'],$_SESSION['user_id'],$page_link,0);
					$insert = $this->manageContent->insertValue('notification_info', $column_name, $column_value);
					if($insert != 0)
					{
						echo 'Request Send Successfully';
					}
				}
				else
				{
					echo 'Request Can Not Be Sent';
				}
			}
				
		}

		/*
		- method for updating notification status
		- Auth: Dipanjan
		*/
		function updateNotificationStatus($userData)
		{
			//update status
			$update = $this->manageContent->updateValueWhere('notification_info', 'view_status', 1, 'notification_id', $userData['noti_id']);
			echo $update;
		}
		
		/*
		- method for getting email from user id
		- Auth: Dipanjan
		*/
		function getEmailIdFromUserId($user_id)
		{
			$user = $this->manageContent->getValue_where('user_credentials', '*', 'user_id', $user_id);
			return array($user[0]['email_id'],$user[0]['username']);
		}

		/*
		- method for uploading profile image
		- Auth: Dipanjan
		*/
		function uploadProfileImageForUser($userData)
		{
			//takes the image size
			$img = getimagesize('../temp/'.$userData['imagename']);
			//print_r($img);
			//gets the image extension
			$ext = pathinfo('../temp/'.$userData['imagename'], PATHINFO_EXTENSION);
		
			$responsiveWidth = $userData['width'];
			$responsiveHeight = $userData['height'];
			
			$actualWidth = $img[0];
			$actualHeight = $img[1];
			
			$xCoordinate = ($actualWidth/$responsiveWidth)*$userData['xcordinate'];
			$yCoordinate = ($actualHeight/$responsiveHeight)*$userData['ycordinate'];
			
			
			$targ_w = ($actualWidth/$responsiveWidth)*300;
			$targ_h = ($actualHeight/$responsiveHeight)*300;
			
			
			$jpeg_quality = 90;
			$png_quality = 9;
			
			$src = '../temp/'.$userData['imagename'];
			
			
			if($ext == 'png') {
				$img_r = imagecreatefrompng($src);
				$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
				imagecopyresampled($dst_r,$img_r,0,0,$xCoordinate,$yCoordinate,$targ_w,$targ_h,$targ_w,$targ_h);
				//save image in admin panel
				//imagepng($dst_r,'../../img/product'.$GLOBALS['_POST']['imagename'], $png_quality);
				//save image in ui product folder
				imagepng($dst_r,'../files/pro-image/'.$userData['imagename'], $png_quality);
				
				//save the product image into the database
				$this->saveUserPic($userData['imagename'],'pro');
			}
			else if($ext == 'jpeg' ) {
				$img_r = imagecreatefromjpeg($src);
				$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
				imagecopyresampled($dst_r,$img_r,0,0,$xCoordinate,$yCoordinate,$targ_w,$targ_h,$targ_w,$targ_h);
				//save image in admin panel
				//imagejpeg($dst_r,'../../img/product'.$GLOBALS['_POST']['imagename'], $jpeg_quality);
				//save image in ui product folder
				imagejpeg($dst_r,'../files/pro-image/'.$userData['imagename'], $jpeg_quality);
				
				//save the product image into the database
				$this->saveUserPic($userData['imagename'],'pro');
			}
			else if($ext == 'jpg') {
				$img_r = imagecreatefromjpeg($src);
				$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
				imagecopyresampled($dst_r,$img_r,0,0,$xCoordinate,$yCoordinate,$targ_w,$targ_h,$targ_w,$targ_h);
				//save image in admin panel
				//imagejpeg($dst_r,'../../img/product'.$GLOBALS['_POST']['imagename'], $jpeg_quality);
				//save image in ui product folder
				imagejpeg($dst_r,'../files/pro-image/'.$userData['imagename'], $jpeg_quality);
				
				//save the product image into the database
				$this->saveUserPic($userData['imagename'],'pro');
			}
			
		}

		/*
		- method for uploading cover image
		- Auth: Dipanjan
		*/
		function uploadCoverImageForUser($userData)
		{
			//takes the image size
			$img = getimagesize('../temp/'.$userData['imagename']);
			//print_r($img);
			//gets the image extension
			$ext = pathinfo('../temp/'.$userData['imagename'], PATHINFO_EXTENSION);
		
			$responsiveWidth = $userData['width'];
			$responsiveHeight = $userData['height'];
			
			$actualWidth = $img[0];
			$actualHeight = $img[1];
			
			$xCoordinate = ($actualWidth/$responsiveWidth)*$userData['xcordinate'];
			$yCoordinate = ($actualHeight/$responsiveHeight)*$userData['ycordinate'];
			
			
			$targ_w = ($actualWidth/$responsiveWidth)*300;
			$targ_h = ($actualHeight/$responsiveHeight)*300;
			
			
			$jpeg_quality = 90;
			$png_quality = 9;
			
			$src = '../temp/'.$userData['imagename'];
			
			
			if($ext == 'png') {
				$img_r = imagecreatefrompng($src);
				$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
				imagecopyresampled($dst_r,$img_r,0,0,$xCoordinate,$yCoordinate,$targ_w,$targ_h,$targ_w,$targ_h);
				//save image in admin panel
				//imagepng($dst_r,'../../img/product'.$GLOBALS['_POST']['imagename'], $png_quality);
				//save image in ui product folder
				imagepng($dst_r,'../files/cov-image/'.$userData['imagename'], $png_quality);
				
				//save the product image into the database
				$this->saveUserPic($userData['imagename'],'cov');
			}
			else if($ext == 'jpeg' ) {
				$img_r = imagecreatefromjpeg($src);
				$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
				imagecopyresampled($dst_r,$img_r,0,0,$xCoordinate,$yCoordinate,$targ_w,$targ_h,$targ_w,$targ_h);
				//save image in admin panel
				//imagejpeg($dst_r,'../../img/product'.$GLOBALS['_POST']['imagename'], $jpeg_quality);
				//save image in ui product folder
				imagejpeg($dst_r,'../files/cov-image/'.$userData['imagename'], $jpeg_quality);
				
				//save the product image into the database
				$this->saveUserPic($userData['imagename'],'cov');
			}
			else if($ext == 'jpg') {
				$img_r = imagecreatefromjpeg($src);
				$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
				imagecopyresampled($dst_r,$img_r,0,0,$xCoordinate,$yCoordinate,$targ_w,$targ_h,$targ_w,$targ_h);
				//save image in admin panel
				//imagejpeg($dst_r,'../../img/product'.$GLOBALS['_POST']['imagename'], $jpeg_quality);
				//save image in ui product folder
				imagejpeg($dst_r,'../files/cov-image/'.$userData['imagename'], $jpeg_quality);
				
				//save the product image into the database
				$this->saveUserPic($userData['imagename'],'cov');
			}
			
		}

		 
		/*
		- method for adding cropped profile image
		- Auth: Dipanjan
		*/
		function saveUserPic($img,$action)
		{
			//checking that product with order id is present or not
			if($action == 'pro')
			{
				//update user profile pic
				$update = $this->manageContent->updateValueWhere('user_info', 'profile_image', 'files/pro-image/'.$img, 'user_id', $_SESSION['user_id']);
			}
			elseif($action == 'cov')
			{
				//update user cover pic
				$update = $this->manageContent->updateValueWhere('user_info', 'cover_image', 'files/cov-image/'.$img, 'user_id', $_SESSION['user_id']);
			}
		}
			
	}
	
	/* receiving data from UI layer Form */
	//making object of class fetchData 
	$fetchData = new fetchData();
	//applying switch case
	switch($GLOBALS['_POST']['refData'])
	{
		//for unique email checking
		case 'emailChecking':
		{
			$emailChecking = $fetchData->getUniqueEmail($GLOBALS['_POST']['email']);
			break;
		}
		//for unique username checking
		case 'usernameChecking':
		{
			$usernameChecking = $fetchData->getUniqueUsername($GLOBALS['_POST']['username']);
			break;
		}
		//for getting sub category in post project
		case 'gettingSubCategory':
		{
			$getSubCat = $fetchData->getSubCategory($GLOBALS['_POST']['category']);
			break;
		}
		//for getting post project work type details
		case 'gettingWorkTypeDetails':
		{
			$getWorkType = $fetchData->getWorkTypeDetails($GLOBALS['_POST']['work_type']);
			break;
		}
		//for inserting the crop image of profile image
		case 'gettingProfileCrop':
		{
			print_r($GLOBALS['_FILES']);
			//$getWorkType = $fetchData->getWorkTypeDetails($GLOBALS['_POST']['work_type']);
			break;
		}
		//for inserting the survey feedback
		case 'insertFeedbackReport':
		{
			if(isset($_SESSION['user_id']))
			{
				$user_id = $_SESSION['user_id'];
			}
			else
			{
				$user_id = 'guest';
			}
			$insertFeedback = $fetchData->insertSurveyFeedback($user_id,$GLOBALS['_POST']);
			break;
		}
		//for inserting the polling answer
		case 'insertPollingAnswer':
		{
			$insertPollingAnswer = $fetchData->insertPollingAnswer($_SESSION['user_id'],$GLOBALS['_POST']);
			break;
		}
		//for getting subcategory of given category
		case 'projectCategory':
		{
			$getProjectSubCategory = $fetchData->getProjectSubCategory($GLOBALS['_POST']);
			break;
		}
		//for showing the job of given category
		case 'getProjectOfCatgory':
		{
			$getProjectlistOfCategory = $fetchData->getProjectListOfCategory($_SESSION['user_id'],$GLOBALS['_POST']);
			break;
		}
		//for showing the job of given category
		case 'getProjectOfSubCatgory':
		{
			$getProjectlistOfSubCategory = $fetchData->getProjectListOfCategory($_SESSION['user_id'],$GLOBALS['_POST']);
			break;
		}
		//for awarding the bid for that project
		case 'awardBid':
		{
			$awardBid = $fetchData->awardBidForProject($GLOBALS['_POST']['bid_id']);
			break;
		}
		//for posting a message in the system
		case 'postMsg':
		{
			$fetchData->insertMsg($GLOBALS['_POST']);
			break;
		}
		//for fetching a message in the system
		case 'getMsgNotification':
		{
			$fetchData->getMsgNotification($GLOBALS['_POST']);
			break;
		}
		//for accepting a job
		case 'acceptJob':
		{
			$fetchData->acceptJob($GLOBALS['_POST']);
			break;
		}
		//for decline a job
		case 'declineJob':
		{
			$fetchData->declineJob($GLOBALS['_POST']);
			break;
		}
		//for releasing milestone
		case 'releaseMoney':
		{
			$fetchData->releaseMoneyToContractor($GLOBALS['_POST']);
			break;
		}
		//for fund releasing request
		case 'fundRequest':
		{
			$fetchData->sendFundRequestToEmployer($GLOBALS['_POST']);
			break;
		}
		//for money releasing request
		case 'releaseRequest':
		{
			$fetchData->sendReleasingRequestToEmployer($GLOBALS['_POST']);
			break;
		}
		//for update notification status
		case 'updateNotificationStatus':
		{
			$fetchData->updateNotificationStatus($GLOBALS['_POST']);
			break;
		}
		//for uploading profile image
		case 'profileImageUpload':
		{
			$fetchData->uploadProfileImageForUser($GLOBALS['_POST']);
			break;
		}
		//for uploading cover image
		case 'covfileImageUpload':
		{
			$fetchData->uploadCoverImageForUser($GLOBALS['_POST']);
			break;
		}
		default:
		{
			break;	
		}
	}

?>