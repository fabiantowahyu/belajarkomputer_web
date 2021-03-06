<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div class="row-fluid">
	<div class="span12 offset panel-box2">
		<div><h3><?php echo $title_head; ?></h3></div>
		<?php echo form_open($url,array('name'=>'fmAward','class'=>'form-horizontal','id'=>'validation-form')); ?>
		<fieldset>
			<h4 class="header blue bolder smaller">General</h4>
			<div class="control-group">
				<label for="reff_no" class="control-label">Reference No</label>
				<div class="controls">
					<?php
						$input = array('name'=>'reff_no','maxlength'=>16,'value'=>$request_no,'id'=>'reff_no','class'=>'input-medium','disabled'=>'disabled');
						echo form_input($input);
					?>
				</div>
			</div>
			<div class="control-group">
				<label for="emp_name" class="control-label">Employee Name <span class="red bolder smaller">*</span></label>
				<div class="controls">
					<?php
						echo form_dropdown('emp_name',$option_empname,$emp_name,'id="emp_name" class="span4"');
					?>
				</div>
			</div>
			<div class="control-group">
				<label for="disciplines_type" class="control-label">Disciplines Name <span class="red bolder smaller">*</span></label>
				<div class="controls">
					<?php
						echo form_dropdown('disciplines_type',$option_disciplinestype,$disciplines_type,'id="disciplines_type" class="span4"');
					?>
				</div>
			</div>
			<div class="control-group">
				<label for="start_date" class="control-label">Start Date <span class="red bolder smaller">*</span></label>
				<div class="controls">
					<?php
						$input = array('name'=>'start_date','id'=>'start_date','class'=>'input-xsmall');
						echo form_input($input);
					?>
				</div>
			</div>
			<div class="control-group">
				<label for="end_date" class="control-label">End Date <span class="red bolder smaller">*</span></label>
				<div class="controls">
					<?php
						$input = array('name'=>'end_date','id'=>'end_date','class'=>'input-xsmall');
						echo form_input($input);
					?>
				</div>
			</div>
			<div class="control-group">
				<label for="description" class="control-label">Description</label>
				<div class="controls">
					<?php
						$txtarea = array('name'=>'description','rows'=>5,'id'=>'description','class'=>'span7');
						echo form_textarea($txtarea);
					?>
				</div>
			</div>
            <i><span class="red bolder smaller">*</span>) Required</i>
			<div class="hr"></div>
			<div class="form-actions">
				<button type="submit" name="submit" value="Save" class="btn btn-small btn-info"><i class="icon-save"></i> Save</button> &nbsp;
				<?php 
					echo anchor('disciplines_history', '<i class="icon-reply"></i>&nbsp;Cancel', array('class'=>'btn btn-small btn-primary'));
				?>
			</div>
		</fieldset>
		<?php echo form_close(); ?>
	</div>
</div>