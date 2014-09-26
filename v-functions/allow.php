<?php
	session_start();
	
	//include the BLL class
	include('../v-includes/BLL.getData.php');
	//create a BLL object
	$BLL_Obj = new BLL_manageData();
	
	if( !empty( $_GET['m'] ) )
	{
		//get the milestone info from the database
		$milestone_info = $BLL_Obj->getMilestoneInfo($_GET['m'] );
		//get the employer id using workroom id
		$emp_id = $BLL_Obj->getWorkroomInfo($milestone_info['workroom_id']);
		
		if( !empty($milestone_info) && $_SESSION['user_id'] == $emp_id)
		{
			//allow escrow and set the flag to 1
			$up_r = $BLL_Obj->allowEscrow($_GET['m']);
			if( $up_r == 0 )
			{
				$result = "Please try again.";
			}
		}
		else
		{
			$result = "Please try again.";
		}
	}
	
	$_SESSION['warning'] = $result;
	
	header("Location: ../escrow.php?wid=".$milestone_info['workroom_id']);
?>