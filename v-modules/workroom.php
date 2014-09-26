<?php
	//check the whether the user is employer or contractor
	$is_employer = $manageContent->isEmployer($wid);
	//getting workroom details count
	$work_details = $manageContent->getWorkroomDetailsCount($wid);
?>
<div class="profile_box_outline project_list_leftbar_outline">
   <div class="profile_box_heading">WORKROOM</div>
    <ul class="profile_overview profile_overview_modify">
        <li class="profile_overview_modify_list"><a href="workroom.php?wid=<?php echo $wid; ?>">Message
        	<div class="job-count pull-right"><?php echo $work_details[0] ?></div></a></li>
        <li class="profile_overview_modify_list"><a href="escrow.php?wid=<?php echo $wid; ?>"><?php if($is_employer == 1){ echo 'Milestones'; } else{ echo 'Billings & Invoice'; } ?><div class="job-count pull-right"><?php echo $work_details[1] ?></div></a></li>
        <li class="profile_overview_modify_list"><a href="fileList.php?wid=<?php echo $wid; ?>">Files<div class="job-count pull-right"><?php echo $work_details[2] ?></div></a></li>
        <?php if($is_employer != 1 ){ ?>
        <li class="profile_overview_modify_list"><a href="post-bid.php?bid=<?php echo $bid_id ; ?>">My Proposal</a></li>
        <?php } ?>
        <?php if($is_employer == 1 ){ ?>
        <li class="profile_overview_modify_list"><a href="userProjectDetails.php?pid=<?php echo $manageContent->getProjectId($wid) ; ?>">Go to My Project</a></li>
        <?php } ?>
    </ul>
</div>