<?php
	session_start();
	//include the DAL library to use the model layer methods
	include 'lib-DAL.php';
	
	//include the utility library to get the browser info
	include 'class.utility.php';
	
	//include the utility library to upload the user files
	include 'class.upload_file.php';
	
	//include the DAL library to send the mail
	include 'class.mail.php';
	
	//form data class starts here
	class formData
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
		- method for action of member
		- Auth: Dipanjan
		*/
		function memberAction($userData)
		{
			$user_id = $userData['uid'];
			$reason = $userData['action_reason'];
			$action = $userData['action'];
			//get the last value of this user in user activation info table
			$getLastValue = $this->manageContent->getLastValue("user_activation_info","*","user_id",$user_id,"id");
			//get the status of user
			$userStatus = $this->manageContent->getValue_where("user_credentials","*","user_id",$user_id);
			if($userStatus[0]['status'] != $action)
			{
				//get current date and time
				$curDate = $this->getCurrentDate();
				$curTime = $this->getCurrentTime();
				//update the last row
				$update1 = $this->manageContent->updateValueWhere("user_activation_info","date_to",$curDate,"id",$getLastValue[0]['id']);
				$update2 = $this->manageContent->updateValueWhere("user_activation_info","time_to",$curTime,"id",$getLastValue[0]['id']);
				//update the status report of user
				$update3 = $this->manageContent->updateValueWhere("user_credentials","status",$action,"id",$userStatus[0]['id']);
				//inserting new row
				if($action == 1)
				{
					$action_text = 'Activated';
				}
				else if($action == 0)
				{
					$action_text = 'Deactivated';
				}
				$column_name = array("user_id","date_from","time_from","action","notes");
				$column_value = array($user_id,$curDate,$curTime,$action_text,$reason);
				$insert = $this->manageContent->insertValue("user_activation_info",$column_name,$column_value);
			}
		}
		
		/*
		- method for action of project
		- Auth: Dipanjan
		*/
		function projectAction($userData)
		{
			//get values of project
			$pro_status = $this->manageContent->getValue_where('project_info','*','project_id',$userData['pid']);
			if($pro_status[0]['status'] != $userData['action'])
			{
				//update the status field
				$upd1 = $this->manageContent->updateValueWhere("project_info","status",$userData['action'],'project_id',$userData['pid']);
				//update the activation notes field
				$upd2 = $this->manageContent->updateValueWhere("project_info","activation_notes",$userData['action_reason'],'project_id',$userData['pid']);
			}
		}
		
		/*
		- method for action of bid
		- Auth: Dipanjan
		*/
		function bidAction($userData)
		{
			//get values of project
			$pro_status = $this->manageContent->getValue_where('bid_info','*','bid_id',$userData['bid']);
			if($pro_status[0]['status'] != $userData['action'])
			{
				//update the status field
				$upd1 = $this->manageContent->updateValueWhere("bid_info","status",$userData['action'],'bid_id',$userData['bid']);
				//update the activation notes field
				$upd2 = $this->manageContent->updateValueWhere("bid_info","activation_notes",$userData['action_reason'],'bid_id',$userData['bid']);
			}
		}
		
		/*
		- method for adding new polling question
		- Auth: Dipanjan
		*/
		function insertPollQuestion($userData)
		{
			//inserting column name
			$column_name = array('set_no','question','answer_no','answer','status');
			//getting answer array
			if(count($userData['ans']) > 0)
			{
				foreach($userData['ans'] as $key=>$value)
				{
					//setting column value
					$column_value = array($userData['set_no'],$userData['ques'],($key+1),$value,$userData['status']);
					//insert values to database
					$insert = $this->manageContent->insertValue('polling_info',$column_name,$column_value);
				}
			}
			return $insert;
		}
		
		/*
		- method for editing polling details
		- Auth: Dipanjan
		*/
		function editPollDetails($userData)
		{
			if(isset($userData['ques']) && !empty($userData['ques']))
			{
				$upd_ques = $this->manageContent->updateValueWhere('polling_info','question',$userData['ques'],'set_no',$userData['set_no']);
			}
			if(count($userData['ans']) > 0)
			{
				foreach($userData['ans'] as $key=>$value)
				{
					$upd_ans.$key = $this->manageContent->updateValueMultipleCondition('polling_info','answer',$value,array('set_no','answer_no'),array($userData['set_no'],$key));
				}
			}
			if(isset($userData['status']))
			{
				$upd_status = $this->manageContent->updateValueWhere('polling_info','status',$userData['status'],'set_no',$userData['set_no']);
			}
			return 1;
		}
		
		/*
		- method for editing survey details
		- Auth: Dipanjan
		*/
		function editSurveyDetails($userData)
		{
			if(isset($userData['ques1']) && !empty($userData['ques1']))
			{
				$upd_ques1 = $this->manageContent->updateValueMultipleCondition('survey_info','question',$userData['ques1'],array('set_no','question_no'),array($userData['set_no'],1));
			}
			if(isset($userData['ques2']) && !empty($userData['ques2']))
			{
				$upd_ques2 = $this->manageContent->updateValueMultipleCondition('survey_info','question',$userData['ques2'],array('set_no','question_no'),array($userData['set_no'],2));
			}
			if(isset($userData['ques3']) && !empty($userData['ques3']))
			{
				$upd_ques3 = $this->manageContent->updateValueMultipleCondition('survey_info','question',$userData['ques3'],array('set_no','question_no'),array($userData['set_no'],3));
			}
			if(isset($userData['ques4']) && !empty($userData['ques4']))
			{
				$upd_ques4 = $this->manageContent->updateValueMultipleCondition('survey_info','question',$userData['ques4'],array('set_no','question_no'),array($userData['set_no'],4));
			}
			if(isset($userData['ques5']) && !empty($userData['ques5']))
			{
				$upd_ques5 = $this->manageContent->updateValueMultipleCondition('survey_info','question',$userData['ques5'],array('set_no','question_no'),array($userData['set_no'],5));
			}
			if(isset($userData['ques6']) && !empty($userData['ques6']))
			{
				$upd_ques6 = $this->manageContent->updateValueMultipleCondition('survey_info','question',$userData['ques6'],array('set_no','question_no'),array($userData['set_no'],6));
			}
			if(isset($userData['ques7']) && !empty($userData['ques7']))
			{
				$upd_ques7 = $this->manageContent->updateValueMultipleCondition('survey_info','question',$userData['ques7'],array('set_no','question_no'),array($userData['set_no'],7));
			}
			if(isset($userData['ques8']) && !empty($userData['ques8']))
			{
				$upd_ques8 = $this->manageContent->updateValueMultipleCondition('survey_info','question',$userData['ques8'],array('set_no','question_no'),array($userData['set_no'],8));
			}
			if(isset($userData['ques9']) && !empty($userData['ques9']))
			{
				$upd_ques9 = $this->manageContent->updateValueMultipleCondition('survey_info','question',$userData['ques9'],array('set_no','question_no'),array($userData['set_no'],9));
			}
			if(isset($userData['ques10']) && !empty($userData['ques10']))
			{
				$upd_ques10 = $this->manageContent->updateValueMultipleCondition('survey_info','question',$userData['ques10'],array('set_no','question_no'),array($userData['set_no'],10));
			}
			
			
			if(count($userData['ans1']) > 0)
			{
				foreach($userData['ans1'] as $key=>$value)
				{
					$upd_ans = $this->manageContent->updateValueMultipleCondition('survey_info','answer',$value,array('set_no','question_no','answer_no'),array($userData['set_no'],1,$key));
				}
			}
			if(count($userData['ans2']) > 0)
			{
				foreach($userData['ans2'] as $key=>$value)
				{
					$upd_ans = $this->manageContent->updateValueMultipleCondition('survey_info','answer',$value,array('set_no','question_no','answer_no'),array($userData['set_no'],2,$key));
				}
			}
			if(count($userData['ans3']) > 0)
			{
				foreach($userData['ans3'] as $key=>$value)
				{
					$upd_ans = $this->manageContent->updateValueMultipleCondition('survey_info','answer',$value,array('set_no','question_no','answer_no'),array($userData['set_no'],3,$key));
				}
			}
			if(count($userData['ans4']) > 0)
			{
				foreach($userData['ans4'] as $key=>$value)
				{
					$upd_ans = $this->manageContent->updateValueMultipleCondition('survey_info','answer',$value,array('set_no','question_no','answer_no'),array($userData['set_no'],4,$key));
				}
			}
			if(count($userData['ans5']) > 0)
			{
				foreach($userData['ans5'] as $key=>$value)
				{
					$upd_ans = $this->manageContent->updateValueMultipleCondition('survey_info','answer',$value,array('set_no','question_no','answer_no'),array($userData['set_no'],5,$key));
				}
			}
			if(count($userData['ans6']) > 0)
			{
				foreach($userData['ans6'] as $key=>$value)
				{
					$upd_ans = $this->manageContent->updateValueMultipleCondition('survey_info','answer',$value,array('set_no','question_no','answer_no'),array($userData['set_no'],6,$key));
				}
			}
			if(count($userData['ans7']) > 0)
			{
				foreach($userData['ans7'] as $key=>$value)
				{
					$upd_ans = $this->manageContent->updateValueMultipleCondition('survey_info','answer',$value,array('set_no','question_no','answer_no'),array($userData['set_no'],7,$key));
				}
			}
			if(count($userData['ans8']) > 0)
			{
				foreach($userData['ans8'] as $key=>$value)
				{
					$upd_ans = $this->manageContent->updateValueMultipleCondition('survey_info','answer',$value,array('set_no','question_no','answer_no'),array($userData['set_no'],8,$key));
				}
			}
			if(count($userData['ans9']) > 0)
			{
				foreach($userData['ans9'] as $key=>$value)
				{
					$upd_ans = $this->manageContent->updateValueMultipleCondition('survey_info','answer',$value,array('set_no','question_no','answer_no'),array($userData['set_no'],9,$key));
				}
			}
			if(count($userData['ans10']) > 0)
			{
				foreach($userData['ans10'] as $key=>$value)
				{
					$upd_ans = $this->manageContent->updateValueMultipleCondition('survey_info','answer',$value,array('set_no','question_no','answer_no'),array($userData['set_no'],10,$key));
				}
			}
			
			return 1;
		}
		
		/*
		- method for action taking for poll
		- Auth: Dipanjan
		*/
		function actionForPoll($userData)
		{
			//getting data of poll
			$pollData = $this->manageContent->getValue_where('polling_info','*','set_no',$userData['set_no']);
			if($pollData[0]['status'] != $userData['action'])
			{
				//update the field
				$upd = $this->manageContent->updateValueWhere('polling_info','status',$userData['action'],'set_no',$userData['set_no']);
				return $upd;
			}
		}
		
		/*
		- method for action taking for survey
		- Auth: Dipanjan
		*/
		function actionForSurvey($userData)
		{
			$surveyData = $this->manageContent->getValue_where('survey_info','*','set_no',$userData['set_no']);
			if($surveyData[0]['status'] != $userData['action'])
			{
				//checking for activation or deactivation
				if($userData['action'] == 1)
				{
					//update all field to zero
					$updAll = $this->manageContent->updateValueWhere('survey_info','status',0,'status',1);
					//update the set no to active
					$upd = $this->manageContent->updateValueWhere('survey_info','status',1,'set_no',$userData['set_no']);
				}
				else if($userData['action'] == 0)
				{
					$upd = $this->manageContent->updateValueWhere('survey_info','status',0,'set_no',$userData['set_no']);
				}
			}
			return $upd;
		}
		
		/*
		- method for inserting new survey details
		- Auth: Dipanjan
		*/
		function insertNewSurvey($userData)
		{
			$set_no = $userData['set_no'];
			$status = 0;
			//setting column name
			$column_name = array('set_no','question_no','question','answer_no','answer','status');
			//for 1st question
			if(!empty($userData['ques1']) && count($userData['ans1']) > 0)
			{
				foreach($userData['ans1'] as $key=>$value)
				{
					//setting column value
					$column_value = array($set_no,1,$userData['ques1'],($key+1),$value,0);
					//insert values to database
					$insert = $this->manageContent->insertValue('survey_info',$column_name,$column_value);
				}
			}
			//for 2nd question
			if(!empty($userData['ques2']) && count($userData['ans2']) > 0)
			{
				foreach($userData['ans2'] as $key=>$value)
				{
					//setting column value
					$column_value = array($set_no,2,$userData['ques2'],($key+1),$value,0);
					//insert values to database
					$insert = $this->manageContent->insertValue('survey_info',$column_name,$column_value);
				}
			}
			//for 3rd question
			if(!empty($userData['ques3']) && count($userData['ans3']) > 0)
			{
				foreach($userData['ans3'] as $key=>$value)
				{
					//setting column value
					$column_value = array($set_no,3,$userData['ques3'],($key+1),$value,0);
					//insert values to database
					$insert = $this->manageContent->insertValue('survey_info',$column_name,$column_value);
				}
			}
			//for 4th question
			if(!empty($userData['ques4']) && count($userData['ans4']) > 0)
			{
				foreach($userData['ans4'] as $key=>$value)
				{
					//setting column value
					$column_value = array($set_no,4,$userData['ques4'],($key+1),$value,0);
					//insert values to database
					$insert = $this->manageContent->insertValue('survey_info',$column_name,$column_value);
				}
			}
			//for 5th question
			if(!empty($userData['ques5']) && count($userData['ans5']) > 0)
			{
				foreach($userData['ans5'] as $key=>$value)
				{
					//setting column value
					$column_value = array($set_no,5,$userData['ques5'],($key+1),$value,0);
					//insert values to database
					$insert = $this->manageContent->insertValue('survey_info',$column_name,$column_value);
				}
			}
			//for 6th question
			if(!empty($userData['ques6']) && count($userData['ans6']) > 0)
			{
				foreach($userData['ans6'] as $key=>$value)
				{
					//setting column value
					$column_value = array($set_no,6,$userData['ques6'],($key+1),$value,0);
					//insert values to database
					$insert = $this->manageContent->insertValue('survey_info',$column_name,$column_value);
				}
			}
			//for 7th question
			if(!empty($userData['ques7']) && count($userData['ans7']) > 0)
			{
				foreach($userData['ans7'] as $key=>$value)
				{
					//setting column value
					$column_value = array($set_no,7,$userData['ques7'],($key+1),$value,0);
					//insert values to database
					$insert = $this->manageContent->insertValue('survey_info',$column_name,$column_value);
				}
			}
			//for 8th question
			if(!empty($userData['ques8']) && count($userData['ans8']) > 0)
			{
				foreach($userData['ans8'] as $key=>$value)
				{
					//setting column value
					$column_value = array($set_no,8,$userData['ques8'],($key+1),$value,0);
					//insert values to database
					$insert = $this->manageContent->insertValue('survey_info',$column_name,$column_value);
				}
			}
			//for 9th question
			if(!empty($userData['ques9']) && count($userData['ans9']) > 0)
			{
				foreach($userData['ans9'] as $key=>$value)
				{
					//setting column value
					$column_value = array($set_no,9,$userData['ques9'],($key+1),$value,0);
					//insert values to database
					$insert = $this->manageContent->insertValue('survey_info',$column_name,$column_value);
				}
			}
			//for 10th question
			if(!empty($userData['ques10']) && count($userData['ans10']) > 0)
			{
				foreach($userData['ans10'] as $key=>$value)
				{
					//setting column value
					$column_value = array($set_no,10,$userData['ques10'],($key+1),$value,0);
					//insert values to database
					$insert = $this->manageContent->insertValue('survey_info',$column_name,$column_value);
				}
			}
			return $insert;
		}
		
		/*
		- method for inserting faq details
		- Auth: Dipanjan
		*/
		function addFaqDetails($userData)
		{
			//set column name
			$column_name = array('question','answer','date','time','status');
			$curdate = $this->getCurrentDate();
			$curtime = $this->getCurrentTime();
			$column_value = array($userData['ques'],$userData['ans'],$curdate,$curtime,$userData['status']);
			//insert the values
			$insert = $this->manageContent->insertValue('faq_info',$column_name,$column_value);
			return $insert;
		}
		/*
		- method for editing faq details
		- Auth: Dipanjan
		*/
		function editFaqDetails($userData)
		{
			if(isset($userData['ques']) && !empty($userData['ques']))
			{
				$upd = $this->manageContent->updateValueWhere('faq_info','question',$userData['ques'],'id',$userData['id']);
			}
			
			if(isset($userData['ans']) && !empty($userData['ans']))
			{
				$upd = $this->manageContent->updateValueWhere('faq_info','answer',$userData['ans'],'id',$userData['id']);
			}
			
			if(isset($userData['status']))
			{
				$upd = $this->manageContent->updateValueWhere('faq_info','status',$userData['status'],'id',$userData['id']);
			}
			return 1;
		}
		
		/*
		- method for taking action faq
		- Auth: Dipanjan
		*/
		function actionFaq($userData)
		{
			//getting values of data
			$faqDetails = $this->manageContent->getValue_where('faq_info','*','id',$userData['id']);
			if($faqDetails[0]['status'] != $userData['action'])
			{
				//update action
				$upd = $this->manageContent->updateValueWhere('faq_info','status',$userData['action'],'id',$userData['id']);
			}
			return $upd;
		}
		
		/*
		- method for add my page
		- Auth: Dipanjan
		*/
		function addMyPageDetails($userData)
		{
			//set unique page name
			$page_id = uniqid('p');
			$curdate = $this->getCurrentDate();
			$curtime = $this->getCurrentTime();
			//set column name
			$column_name = array('page_id','page_name','page_content','date','time','status');
			$column_value = array($page_id,$userData['name'],$userData['des'],$curdate,$curtime,$userData['status']);
			//insert the values
			$insert = $this->manageContent->insertValue('mypage',$column_name,$column_value);
			return $insert;
		}
		
		/*
		- method for edit my page details
		- Auth: Dipanjan
		*/
		function editMyPageDetails($userData)
		{
			if(isset($userData['name']) && !empty($userData['name']))
			{
				$upd1 = $this->manageContent->updateValueWhere('mypage','page_name',$userData['name'],'page_id',$userData['id']);
			}
			if(isset($userData['des']) && !empty($userData['des']))
			{
				$upd2 = $this->manageContent->updateValueWhere('mypage','page_content',$userData['des'],'page_id',$userData['id']);
			}
			if(isset($userData['status']))
			{
				$upd3 = $this->manageContent->updateValueWhere('mypage','status',$userData['status'],'page_id',$userData['id']);
			}
			if($upd1 != 0 || $upd2 != 0 || $upd3 != 0)
			{
				return 1;
			}
		}
		
		/*
		- method for taking action my page status
		- Auth: Dipanjan
		*/
		function actionMyPageDetails($userData)
		{
			//get values from database
			$pageValue = $this->manageContent->getValue_where('mypage','*','page_id',$userData['id']);
			if($pageValue[0]['status'] != $userData['action'])
			{
				//update the value
				$upd = $this->manageContent->updateValueWhere('mypage','status',$userData['action'],'page_id',$userData['id']);
			}
			return $upd;
		}
		
		/*
		- method for insert skills
		- Auth: Anand
		*/
		function addSkills($data)
		{
			//set column name
			$column_name = array('name');
			$column_value = array($data['skill_name']);
			//insert the values
			$insert = $this->manageContent->insertValue('skills',$column_name,$column_value);
			return $insert;
		}
		
		/*
		- method for insert Category
		- Auth: Anand
		*/
		function addCategory($data)
		{
			
			//set column name
			$column_name = array('name','skills');
			$column_value = array($data['name'],$this->_convertArrayToString($data['category_skills']));
			//insert the values
			$insert = $this->manageContent->insertValue('category',$column_name,$column_value);
			return $insert;
		}
		
		/*
		- method for insert sub-Category
		- Auth: Anand
		*/
		function addSubCategory($data)
		{
			
			//set column name
			$column_name = array('name','skills','categoryId');
			$column_value = array($data['name'],$this->_convertArrayToString($data['category_skills']),$data['category']);
			//insert the values
			$insert = $this->manageContent->insertValue('subcategory',$column_name,$column_value);
			return $insert;
		}
		
		//function to convert array into string separated by commas
		//auth anand
		private function _convertArrayToString($val_array)
		{
			if( !empty($val_array) )
			{
				$val_str = "";
				
				foreach ($val_array as $val)
				{
						$val_str .= $val.",";
				}
				
				return substr($val_str, 0, -1);
			}
		}
		
		/*
		- method for setting cookie
		- Auth: Dipanjan
		*/
		function createCookie($cookie_name,$cookie_value,$exp_time)
		{
			//creating the cookie
			$path = '/';
			setcookie($cookie_name,$cookie_value,$exp_time,$path);
		}
		
		/*
		- method for getting current date
		- Auth: Dipanjan
		*/
		function getCurrentDate()
		{
			$date = date('y-m-d');
			return $date;
		}
		
		/*
		- method for getting current time
		- Auth: Dipanjan
		*/
		function getCurrentTime()
		{
			$time = date('h:i:s a');
			return $time;
		}
		
		/*
		- method for inserting about us details
		- Auth: Thakur
		*/
		function addAboutUsContent($userdata)
		{
			if(!empty($_FILES['image_link']['name']))
			{
				$img_uploaded = $this->manageContent->getValue_descending('about_us', '*');
				$last_img_uploaded = $img_uploaded['0']['id'];
				$img_upload = $this->manageFileUploader->upload_file('aboutus'.($last_img_uploaded + 1), $_FILES['image_link'], '../../img/');
				$img_db = 'img/'.$img_upload;
			}
			else
			{
				$img_db = '';
			}
				
			//set column name
			$column_name = array('title','description','image_link','status');
			$column_value = array($userdata['title'],$userdata['description'],$img_db,1);
			//insert the values
			$insert = $this->manageContent->insertValue('about_us',$column_name,$column_value);
			return $insert;
		}
		
		/*
		- method for edit my about us
		- Auth: Thakur
		*/
		function editAboutUs($userData,$userFile)
		{
			if(isset($userData['title']) && !empty($userData['title']))
			{
				$upd1 = $this->manageContent->updateValueWhere('about_us','title',$userData['title'],'id',$userData['id']);
			}
			if(isset($userData['description']) && !empty($userData['description']))
			{
				$upd2 = $this->manageContent->updateValueWhere('about_us','description',$userData['description'],'id',$userData['id']);
			}
			if(isset($userData['image_link']) && !empty($_FILES['image_link']['name']))
			{
				$img_uploaded = $this->manageContent->getValue_descending('about_us', '*');
				$img_upload = $this->manageFileUploader->upload_file('aboutus'.$img_uploaded[0]['id'], $userFile['image_link'], '../../img/');
				
				$upd3 = $this->manageContent->updateValueWhere('about_us','image_link','img/'.$img_upload,'id',$userData['id']);
			}
			if($upd1 != 0 || $upd2 != 0 || $upd3 != 3)
			{
				return 1;
			}
		}
		
		/*
		- method for release with amount
		- Auth: Dipanjan
		*/
		function releaseWithdrawMoney($userData)
		{
			//update withdraw request
			$update = $this->manageContent->updateValueWhere('user_money_info', 'status', 'Completed', 'id', $userData['id']);
			return $update;
		}

		/*
		- method for change the open tickets to close for user
		- Auth: Riju
		*/
		function changeUserTicketStatus($userData)
		{
			$update=$this->manageContent->updateValueWhere('submit_ticket','status', 1, 'ticket_id', $userData['ticket'] );
			return $update;
		}

		/*
		- method for change the open tickets to close for guest
		- Auth: Riju
		*/
		function changeGuestTicketStatus($userData)
		{
			$update=$this->manageContent->updateValueWhere('contact_us','status', 1, 'request_id', $userData['request'] );
			return $update;
		}

		/*
		- method for update skill
		- Auth: Dipanjan
		*/
		function updateSkills($userData)
		{
			if(!empty($userData['skill_name']))
			{
				$update = $this->manageContent->updateValueWhere('skills','name', $userData['skill_name'], 'skillId', $userData['id'] );
			}
				
		}
		
		/*
		- method for update category
		- Auth: Dipanjan
		*/
		function updateCatgegory($userData)
		{
			if(!empty($userData['name']))
			{
				$update = $this->manageContent->updateValueWhere('category','name', $userData['name'], 'categoryId', $userData['id'] );
			}
			if(isset($userData['category_skills']) && !empty($userData['category_skills']))
			{
				$cat_skill = $this->_convertArrayToString($userData['category_skills']);
				$update_skiil = $this->manageContent->updateValueWhere('category','skills', $cat_skill, 'categoryId', $userData['id'] );
			}	
		}
		
		/*
		- method for update sub category
		- Auth: Dipanjan
		*/
		function updateSubCatgegory($userData)
		{
			if(!empty($userData['name']))
			{
				$update = $this->manageContent->updateValueWhere('subcategory','name', $userData['name'], 'subCategoryId', $userData['id'] );
			}
			if(!empty($userData['category']))
			{
				$update = $this->manageContent->updateValueWhere('subcategory','categoryId', $userData['category'], 'subCategoryId', $userData['id'] );
			}
			if(isset($userData['category_skills']) && !empty($userData['category_skills']))
			{
				$cat_skill = $this->_convertArrayToString($userData['category_skills']);
				$update_skiil = $this->manageContent->updateValueWhere('subcategory','skills', $cat_skill, 'subCategoryId', $userData['id'] );
			}	
		}
		
		/*
		- method for inserting advertisement details
		- Auth: Debojyoti
		*/
		function addAdvertisement($userData,$userFile)
		{
			$curdate = $this->getCurrentDate();
			$curtime = $this->getCurrentTime();
			$curdatetime=$curdate." ".$curtime;
			$id=uniqid('adv');
			//set column name
			$column_name = array('owner-name','add-type','uniqueId','value','expdate','datetime','status');
			
			if(!empty($userFile['value']['tmp_name'])){
				$extension=end(explode('.', $userFile['value']['name']));
				$destination='../../files/adv_images/';
				$img_upload = $this->manageFileUploader->upload_file($id.'-image', $userFile['value'], $destination);
				$data="files/adv_images/".$id.'-image.'.$extension;
				}
			else {
				$data=$userData['value'];
			}
			$column_value = array($userData['name'],$userData['ad_type'],$id,$data,$userData['exp_date'],$curdatetime,$userData['status']);
			//insert the values
			$insert = $this->manageContent->insertValue('advertisement',$column_name,$column_value);
			return $insert;
		}
		
		/*
		- method for edit advertisement
		- Auth: Debojyoti
		*/
		function updAdvertisement($userData,$userFile)
		{
			$curdate = $this->getCurrentDate();
			$curtime = $this->getCurrentTime();
			$curdatetime=$curdate." ".$curtime;
			if(!empty($userFile['uvalue']['name']))
			{
				
					$extension=end(explode('.', $userFile['uvalue']['name']));
					$destination='../../files/adv_images/';
					$img_upload = $this->manageFileUploader->upload_file($userData['id'].'-image', $userFile['uvalue'], $destination);
					$data="files/adv_images/".$userData['id'].'-image.'.$extension;
			}
				else{
					$data=$userData['uvalue'];
				}
				$upd1 = $this->manageContent->updateValueWhere('advertisement','value',$data,'uniqueId',$userData['id']);
			
				
			if(isset($userData['uname']) && !empty($userData['uname']))
			{
				$upd2 = $this->manageContent->updateValueWhere('advertisement','owner-name',$userData['uname'],'uniqueId',$userData['id']);
			}
			if(isset($userData['uad_type']) && !empty($userData['uad_type']))
			{
				$upd3 = $this->manageContent->updateValueWhere('advertisement','add-type',$userData['uad_type'],'uniqueId',$userData['id']);
			}
			if(isset($userData['uexp_date']) && !empty($userData['uexp_date']))
			{
				$upd4 = $this->manageContent->updateValueWhere('advertisement','expdate',$userData['uexp_date'],'uniqueId',$userData['id']);
			}
			$upd5= $this->manageContent->updateValueWhere('advertisement','status',$userData['ustatus'],'uniqueId',$userData['id']);
			if($upd1 != 0 || $upd2 != 0 || $upd3 != 0 || $upd4 != 0 || $upd5 != 0)
			{
				return 1;
			}
		}
		
	}
	
	
	
	
	/* getting data from UI layer form */
	//creating object of form data class
	$formData = new formData();
	//applying switch case
	switch ($GLOBALS['_POST']['fn'])
	{
		//for sign up info
		case md5('signup'):
		{
			
			break;
		}
		//for member action
		case md5('member_action'):
		{
			$memberAction = $formData->memberAction($GLOBALS['_POST']);
			header("Location: ../user-list.php");
			break;
		}
		//for project action
		case md5('project_action'):
		{
			$projectAction = $formData->projectAction($GLOBALS['_POST']);
			header("Location: ../project_details.php?pid=".$GLOBALS['_POST']['pid']);
			break;
		}
		//for bid action
		case md5('bid_action'):
		{
			$projectAction = $formData->bidAction($GLOBALS['_POST']);
			header("Location: ../bid_details.php?bid=".$GLOBALS['_POST']['bid']);
			break;
		}
		//for adding polling
		case md5('add_poll'):
		{
			$addPolling = $formData->insertPollQuestion($GLOBALS['_POST']);
			if($addPolling == 1)
			{
				$_SESSION['success'] = 'Polling Details Insert Successfully';
			}
			else
			{
				$_SESSION['warning'] = 'Polling Details Insert Unsuccessfully';
			}
			header("Location: ../addPoll.php");
			break;
		}
		//for action taken for polling details
		case md5('edit_poll'):
		{
			$editPolling = $formData->editPollDetails($GLOBALS['_POST']);
			if($editPolling == 1)
			{
				$_SESSION['success'] = 'Update Successfull';
			}
			else
			{
				$_SESSION['warning'] = 'Update Unsuccessfull';
			}
			header("Location: ../pollDetails.php?set_no=".$GLOBALS['_POST']['set_no']."&action=edit");
			break;
		}
		//for action taken for polling details
		case md5('action_poll'):
		{
			$pollingAction = $formData->actionForPoll($GLOBALS['_POST']);
			if($pollingAction != 0)
			{
				$_SESSION['success'] = 'Update Successfull';
			}
			else
			{
				$_SESSION['warning'] = 'Update Unsuccessfull';
			}
			header("Location: ../pollList.php");
			break;
		}
		//for inserting new survey details
		case md5('add_survey'):
		{
			$addSurvey = $formData->insertNewSurvey($GLOBALS['_POST']);
			if($addSurvey == 1)
			{
				$_SESSION['success'] = 'Survey Details Insert Successfully';
			}
			header("Location: ../addSurvey.php");
			break;
		}
		//for taking action of survey activation
		case md5('action_survey'):
		{
			$surveyAction = $formData->actionForSurvey($GLOBALS['_POST']);
			if($surveyAction != 0)
			{
				$_SESSION['success'] = 'Update Successfull';
			}
			else
			{
				$_SESSION['warning'] = 'Update Unsuccessfull';
			}
			header("Location: ../surveyList.php");
			break;
		}
		//for edit for survey details
		case md5('edit_survey'):
		{
			$editSurvey = $formData->editSurveyDetails($GLOBALS['_POST']);
			if($editSurvey == 1)
			{
				$_SESSION['success'] = 'Update Successfull';
			}
			else
			{
				$_SESSION['warning'] = 'Update Unsuccessfull';
			}
			header("Location: ../surveyDetails.php?set_no=".$GLOBALS['_POST']['set_no']."&action=edit");
			break;
		}
		//for adding faq question and answer
		case md5('add_faq'):
		{
			$addFaq = $formData->addFaqDetails($GLOBALS['_POST']);
			if($addFaq == 1)
			{
				$_SESSION['success'] = 'Insert Successfull';
			}
			else
			{
				$_SESSION['warning'] = 'Insert Unsuccessfull';
			}
			header("Location: ../addFaq.php");
			break;
		}
		//for adding faq question and answer
		case md5('edit_faq'):
		{
			$editFaq = $formData->editFaqDetails($GLOBALS['_POST']);
			if($editFaq == 1)
			{
				$_SESSION['success'] = 'Update Successfull';
			}
			else
			{
				$_SESSION['warning'] = 'Update Unsuccessfull';
			}
			header("Location: ../faqDetails.php?id=".$GLOBALS['_POST']['id']."&action=edit");
			break;
		}
		//for adding faq question and answer
		case md5('action_faq'):
		{
			$actionFaq = $formData->actionFaq($GLOBALS['_POST']);
			if($actionFaq == 1)
			{
				$_SESSION['success'] = 'Update Successfull';
			}
			else
			{
				$_SESSION['warning'] = 'Update Unsuccessfull';
			}
			header("Location: ../faqList.php");
			break;
		}
		//for adding mypage
		case md5('add_page'):
		{
			$addMyPage = $formData->addMyPageDetails($GLOBALS['_POST']);
			if($addMyPage == 1)
			{
				$_SESSION['success'] = 'Insert Successfull';
			}
			else
			{
				$_SESSION['warning'] = 'Insert Unsuccessfull';
			}
			header("Location: ../addPage.php");
			break;
		}
		//for edit mypage details
		case md5('edit_page'):
		{
			$editMyPage = $formData->editMyPageDetails($GLOBALS['_POST']);
			if($editMyPage == 1)
			{
				$_SESSION['success'] = 'Update Successfull';
			}
			else
			{
				$_SESSION['warning'] = 'Update Unsuccessfull';
			}
			header("Location: ../addPage.php?id=".$GLOBALS['_POST']['id']."&action=edit");
			break;
		}
		//for taking action of mypage status
		case md5('action_page'):
		{
			$actionMyPage = $formData->actionMyPageDetails($GLOBALS['_POST']);
			if($actionMyPage == 1)
			{
				$_SESSION['success'] = 'Update Successfull';
			}
			else
			{
				$_SESSION['warning'] = 'Update Unsuccessfull';
			}
			header("Location: ../pageList.php");
			break;
		}
		//for taking action of adding skill
		case md5('add_skill'):
		{
			$actionMyPage = $formData->addSkills($GLOBALS['_POST']);
			if($actionMyPage == 1)
			{
				$_SESSION['success'] = 'Update Successfull';
			}
			else
			{
				$_SESSION['warning'] = 'Update Unsuccessfull';
			}
			header("Location: ../addSkills.php");
			break;
		}
		//for taking action of adding category
		case md5('add_category'):
		{
			$actionMyPage = $formData->addCategory($GLOBALS['_POST']);
			if($actionMyPage == 1)
			{
				$_SESSION['success'] = 'Update Successfull';
			}
			else
			{
				$_SESSION['warning'] = 'Update Unsuccessfull';
			}
			header("Location: ../addCategory.php");
			break;
		}
		
		//for taking action of adding sub category
		case md5('add_subcategory'):
		{
			$actionMyPage = $formData->addSubCategory($GLOBALS['_POST']);
			if($actionMyPage == 1)
			{
				$_SESSION['success'] = 'Update Successfull';
			}
			else
			{
				$_SESSION['warning'] = 'Update Unsuccessfull';
			}
			header("Location: ../addSubCategory.php");
			break;
		}
		//for taking action of adding about us
		case md5('add_aboutuscontent'):
		{
			$aboutUsCont = $formData->addAboutUsContent($GLOBALS['_POST']);
			if($aboutUsCont == 1)
			{
				$_SESSION['success'] = 'Insert Successfull';
			}
			else
			{
				$_SESSION['warning'] = 'Insert Unsuccessfull';
			}
			
			header("Location: ../addAboutUsContent.php");
			break;
		}
		//for taking action of editting about us
		case md5('edit_aboutuscontent'):
		{
			$aboutUsEdit = $formData->editAboutUs($GLOBALS['_POST'],$GLOBALS['_FILES']);
			if($aboutUsEdit == 1)
			{
				$_SESSION['success'] = 'Update Successfull';
			}
			else
			{
				$_SESSION['warning'] = 'Update Unsuccessfull';
			}
			header("Location: ../editAbout.php?id=".$_POST['id']);
			break;
		}
		//for releaisng withdraw request
		case md5('action_withdraw'):
		{
			$releaseWithdraw = $formData->releaseWithdrawMoney($GLOBALS['_POST']);
			header("Location: ../withdrawList.php?list=Processing");
			break;
		}
		//for change user ticket status by riju
		case md5('user_ticket'):
		{
			$change = $formData->changeUserTicketStatus($GLOBALS['_POST']);
		    header("Location: ../manageUserTicket.php?status=0");
			break;
		}

		//for change guest ticket status auth: riju
		case md5('guest_ticket'):
		{
			$change = $formData->changeGuestTicketStatus($GLOBALS['_POST']);
		    header("Location: ../manageGuestTicket.php?status=0");
			break;
		}
		//for update skill
		case md5('edit_skill'):
		{
			$updSkill = $formData->updateSkills($GLOBALS['_POST']);
		    header("Location: ../addSkills.php?id=".$GLOBALS['_POST']['id']);
			break;
		}
		//for update category
		case md5('edit_category'):
		{
			$updCat = $formData->updateCatgegory($GLOBALS['_POST']);
		    header("Location: ../addCategory.php?id=".$GLOBALS['_POST']['id']);
			break;
		}
		//for update sub category
		case md5('edit_subcategory'):
		{
			$updSubCat = $formData->updateSubCatgegory($GLOBALS['_POST']);
		    header("Location: ../addSubCategory.php?id=".$GLOBALS['_POST']['id']);
			break;
		}
		//for adding advertisement details: Debojyoti
		case md5('add_advertisement'):
		{
			$insertAd = $formData->addAdvertisement($GLOBALS['_POST'],$GLOBALS['_FILES']);
		    header("Location: ../addAdvertisement.php");
			break;
		}
		//for updating advertisement details: Debojyoti
		case md5('upd_advertisement'):
		{
			$updateAd = $formData->updAdvertisement($GLOBALS['_POST'],$GLOBALS['_FILES']);
			if($updateAd == 1)
			{
				$_SESSION['success'] = 'Update Successfull';
			}
			else
			{
				$_SESSION['warning'] = 'Update Unsuccessfull';
			}
		    header("Location: ../editAdv.php?id=".$_POST['id']);
			break;
		}
		default:
		{
			break;
		}
	}




?>