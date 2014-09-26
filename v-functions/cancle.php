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
		
		header("Location: ../escrow.php?wid=".$milestone_info['workroom_id']);
	}
	
	header("Location: ../cygna.php?op=pro");
?>