<?php
	session_start();
	$pageTitle = 'Add Advertisement';
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
                    <h1 class="page-header">Advertisement Details</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            	<div class="col-lg-12">
                	<div class="panel panel-default">
                    	<div class="panel-heading"><i class="fa fa-plus-circle fa-fw"></i> Add Advertisement Details</div>
                        <div class="panel-body">
                        	<form action="v-includes/class.formData.php" role="form" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="control-label p_label col-sm-3">Owner Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="name" />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label p_label col-sm-3">Ad Type</label>
                                    <div class="col-sm-4">
                                        <select name="ad_type" class="form-control" id="adType">
                                        	<option value="-1">Select Ad Type</option>
                                        	<option value="HTML">HTML</option>
                                            <option value="Image">Image</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group" style="display: none;" id="HTML">
                                    <label class="control-label p_label col-sm-3">Insert HTML</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="value" id="editor1"></textarea>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group" style="display: none;" id="Image">
                                    <label class="control-label p_label col-sm-3">Insert Image</label>
                                    <div class="col-sm-6">
                                    <input type="file" name="value" class="form-control">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label p_label col-sm-3" >Expiry Date</label>
                                    <div class="col-sm-6">
                                    <input type="text" name="exp_date" id="exp_date" class="form-control"/>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label p_label col-sm-3">Status</label>
                                    <div class="col-sm-4">
                                        <select name="status" class="form-control">
                                        	<option value="1">Active</option>
                                            <option value="0">Deactive</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-7 col-sm-offset-3">
                                    	<input type="hidden" name="fn" value="<?php echo md5('add_advertisement') ?>" />
                                        <input type="submit" class="btn btn-success btn-lg" value="SUBMIT" />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                      </div>
                </div>
            </div>
             <div class="row">
            	<div class="col-lg-12">
                	<div class="panel panel-default">
                        <div class="panel-heading"><i class="fa fa-plus-circle fa-fw"></i> About Us Title on the system(Click to Edit)</div>
                        <div class="panel-body">
                        	<?php
                        		//menus to edit in advertisement
                        		$manageContent->getAdvertisementEditButton();
                        	?>
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
