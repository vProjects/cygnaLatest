<div class="post_project_body_outline">
    <h2 class="post_project_top_heading">Post Your Job</h2>
    <p class="post_project_top_para">Describe the job or list the skills you're looking for.</p>
    <form action="v-includes/class.formData.php" method="post" role="form" enctype="multipart/form-data" class="form-horizontal">
        <div class="form-group pp_form_group">
            <label class="pp_form_label">Project Title</label>
            <input type="text" class="form-control col-md-6 pp_form_textbox" name="pp_title"/>
            <div class="clearfix"></div>
        </div>
        <div class="form-group pp_form_group">
            <label class="pp_form_label">Describe It</label>
            <textarea rows="6" class="form-control pp_form_textarea" name="pp_des"></textarea>
            <div class="clearfix"></div>
        </div>
        <div class="form-group pp_form_group">
            <label class="pp_form_label">Select the category</label>
            <div>
                <select class="form-control pp_form_selectbox pull-left" id="pro_category" name="pro_category">
                	<option value="-1">Select An Category</option>
                    <?php
                    	//get category list
                    	$manageContent->getPostProjectCategoryList();
                    ?>
                </select>
                <select class="form-control pp_form_selectbox pull-left" id="pro_sub_category" name="pro_sub_category">
                    
                </select>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group pp_form_group">
            <label class="pp_form_label">Upload File</label>
            <input type="file" name="file" />
            <div class="clearfix"></div>
        </div>
        <div class="form-group pp_form_group">
            <label class="pp_form_label">Request specific skills or groups</label>
            
            <div class="myskills_details ep_skills_list col-md-12" id="skills_list_value"></div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group pp_form_group">
            <div class="form-control pp_form_textbox scrollable-content col-md-12">
            	<?php
            		//get skill details
            		$manageContent->getPostProjectSkillList();
            	?>
            </div>
            
            
            <div class="clearfix"></div>
        </div>
        <div class="form-group pp_form_group">
            <label class="pp_form_label">Set work arrangement</label>
            <select class="form-control pp_form_selectbox" id="pp_work_type" name="pp_work_type">
                <option value="">-- select work type --</option>
                
                <option value="Fixed">Fixed</option>
            </select>
           	<div id="pp_form_work_type"></div>
        </div>
        <div class="form-group pp_form_group">
            <label class="pp_form_label">Preferred Location</label>
            <input type="text" class="form-control col-md-6 pp_form_textbox" name="pp_prefer_loc"/>
            <div class="clearfix"></div>
        </div>
        <div class="form-group pp_form_group">
            <label class="pp_form_label">Job Open For</label>
            <select class="form-control pp_form_selectbox" name="pp_project_validity">
                <option value="1 Day">1 Day</option>
                <option value="3 Days">3 Days</option>
                <option value="7 Days">7 Days</option>
                <option value="15 Days">15 Days</option>
                <option value="30 Days">30 Days</option>
                <option value="60 Days">60 Days</option>
                <option value="90 Days">90 Days</option>
            </select>
            <div class="clearfix"></div>
        </div>
        <div class="form-group pp_form_group">
        	<input type="hidden" name="fn" value="<?php echo md5('project_post'); ?>" />
            <input type="submit" class="btn btn-success btn-lg postjob-submit-btn" value="SUBMIT"/>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </form>
    <div class="clearfix"></div>
</div>