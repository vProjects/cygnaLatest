<?php
	session_start();
	$pageTitle = 'Withdraw List';
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
                    <h1 class="page-header">Withdraw List</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="btn-group btn-section">
                    	<button class="btn btn-success"><a href="withdrawList.php?list=Processing">Pending List</a></button>
                        <button class="btn btn-primary"><a href="withdrawList.php?list=Completed">Successfull List</a></button>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            	<div class="col-lg-12">
            		<?php if(isset($GLOBALS['_GET']) && $GLOBALS['_GET']['list'] == 'Processing') { ?>
                	<div class="panel panel-default">
                        <div class="panel-heading"><i class="fa fa-tasks fa-fw"></i> List Of Withdraw Details</div>
                        <div class="panel-body">
                        	<div class="table-responsive">
                            	<table class="table table-bordered table-hover table-striped">
                                	<thead>
                                    	<tr>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Details</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
                                    		//get values of pending list
                                    		$manageContent->getPendingWithdrawList();
                                    	?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php } else if(isset($GLOBALS['_GET']) && $GLOBALS['_GET']['list'] == 'Completed') { ?>
                    <div class="panel panel-default">
                        <div class="panel-heading"><i class="fa fa-tasks fa-fw"></i> List Of Withdraw Details</div>
                        <div class="panel-body">
                        	<div class="table-responsive">
                            	<table class="table table-bordered table-hover table-striped">
                                	<thead>
                                    	<tr>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
                                    		//get values of pending list
                                    		$manageContent->getSuccessfullWithdrawList();
                                    	?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    	
                    <?php } ?>
                   
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php
	include 'v-templates/footer.php';
?>
