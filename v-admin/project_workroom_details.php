<?php
	session_start();
	$pageTitle = 'Project Details';
	include 'v-templates/header.php';
?>
	<?php
		include 'v-templates/left_sidebar.php';
	?>
    
        <div id="page-wrapper">
        	<!-- div for showing success message--->
            <div class="alert alert-success" id="success_msg"></div>
            <!-- div for showing warning message--->
            <div class="alert alert-danger" id="warning_msg"></div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Project Details</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            	<div class="col-lg-8">
            		<?php if($GLOBALS['_GET']['list'] == 'milestone'){ ?>
                	<div class="panel panel-default">
                        <div class="panel-heading"><i class="fa fa-list fa-fw"></i> Milestone Details</div>
                        <div class="panel-body">
                        	<div class="table-responsive">
                        		<table class="table table-bordered table-hover">
                        			<thead>
                        				<tr>
                        					<th>Name</th>
                        					<th>Start Date</th>
                        					<th>End Date</th>
                        					<th>Amount</th>
                        					<th>Fund</th>
                        					<th>Release</th>
                        				</tr>
                        			</thead>
                        			<tbody>
                        				<?php
                        					//getting milestone details
                        					$manageContent->getMilestoneList($_GET['wid']);
                        				?>
                        			</tbody>
                        		</table>
                        	</div>
                        </div>
                    </div>
                    <?php } ?>
                    
                    
                    
                    
                </div>
                <!-- /.col-lg-8 -->
                
                <div class="col-lg-4">
                	<div class="panel panel-default">
                    	<div class="panel-heading"><i class="fa fa-bell fa-fw"></i> Quick Info</div>
                        <div class="panel-body">
                        	<?php
								//getting the project details
								if(isset($GLOBALS['_GET']['pid']))
								{
									$manageContent->getProjectQuickLinks($GLOBALS['_GET']['pid']);
								}
								else if(isset($GLOBALS['_GET']['bid']))
								{
									$manageContent->getBidQuickLinks($GLOBALS['_GET']['bid']);
								}
								
							?>
                        </div>
                    </div>
                    
                    
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php
	include 'v-templates/footer.php';
?>
