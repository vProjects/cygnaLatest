<?php
	session_start();
	$pageTitle = 'Edit Advertisement';
	include 'v-templates/header.php';
	$advid = $GLOBALS['_GET']['id'];
	$advDetails = $manageContent->getAdvEditDetails($advid);
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
                    <h1 class="page-header">Update Advertisement Details</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            	<div class="col-lg-12">
                	<div class="panel panel-default">
                    	<div class="panel-heading"><i class="fa fa-plus-circle fa-fw"></i> Update Advertisement Details</div>
                        <div class="panel-body">
                        	<form action="v-includes/class.formData.php" role="form" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="control-label p_label col-sm-3">Owner Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="uname" value="<?php echo $advDetails['owner-name']?>" />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label p_label col-sm-3">Ad Type</label>
                                    <div class="col-sm-4">
                                        <select name="uad_type" class="form-control" id="adType">
                                        	<option value="-1">Select Ad Type</option>
                                        	<option value="HTML" <?php if($advDetails['add-type']=="HTML")echo "selected"?>>HTML</option>
                                            <option value="Image" <?php if($advDetails['add-type']=="Image")echo "selected"?>>Image</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group" <?php if($advDetails['add-type']=="Image")echo 'style="display: none;"' ?> id="HTML">
                                    <label class="control-label p_label col-sm-3">Insert HTML</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="uvalue" id="editor1"><?php if($advDetails['add-type']=="HTML")echo $advDetails['value'] ?></textarea>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group" <?php if($advDetails['add-type']=="HTML")echo 'style="display: none;"' ?> id="Image">
                                    <label class="control-label p_label col-sm-3">Insert Image</label>
                                    <div class="col-sm-6">
                                    	<!-- Cant set value to input type file for security reasons -->
                                    <input type="file" name="uvalue" class="form-control">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label p_label col-sm-3" >Expiry Date</label>
                                    <div class="col-sm-6">
                                    <input type="text" name="uexp_date" id="exp_date" class="form-control" value="<?php echo $advDetails['expdate'] ?>"/>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label p_label col-sm-3">Status</label>
                                    <div class="col-sm-4">
                                        <select name="ustatus" class="form-control">
                                        	<option value="1" <?php if($advDetails['status']=="1")echo "selected"?>>Active</option>
                                            <option value="0" <?php if($advDetails['status']=="0")echo "selected"?>>Deactive</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-7 col-sm-offset-3">
                                    	<input type="hidden" name="id"value="<?php echo $advid; ?>" />
                                    	<input type="hidden" name="fn" value="<?php echo md5('upd_advertisement') ?>" />
                                        <input type="submit" class="btn btn-success btn-lg" value="UPDATE" />
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
