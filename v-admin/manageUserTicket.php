<?php
	session_start();
	$pageTitle = 'Manage User Ticket';
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
                    <h1 class="page-header">Manage User Ticket</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="btn-group btn-section">
                    	<button class="btn btn-success"><a href="manageUserTicket.php?status=0">Open Tickets</a></button>
                        <button class="btn btn-primary"><a href="manageUserTicket.php?status=1">Closed Tickets</a></button>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            	<div class="col-lg-12">
            		
                	<div class="panel panel-default">
                        <div class="panel-heading"><i class="fa fa-tasks fa-fw"></i> You can see list of ticket submitted.</div>
                        <div class="panel-body">
                        	<div class="table-responsive">
                            	<table class="table table-bordered table-hover table-striped">
                                	<thead>
                                    	<tr>
                                            <th>Email Id</th>
                                            <th>Title</th>
                                            <th>Subject</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
                                    		//get values of open tickets
                                    		if(isset($GLOBALS['_GET']['status']) && $GLOBALS['_GET']['status'] == '0') 
                                    		{
                                    			$manageContent->getUserOpenTicketList();
											}
											//get values of closed tickets
											else if(isset($GLOBALS['_GET']['status']) && $GLOBALS['_GET']['status'] == '1')
											{
												$manageContent->getUserClosedTicketList();
											}
                                    	?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                                 
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
    