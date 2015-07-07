<div class='cascaron'>
	<div class='log'>
		<h3><?php echo lang('deactivate_heading');?></h3>
		<p class='cent'><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>
	</div>
	<?php echo form_open("auth/deactivate/".$user->id);?>
	<div class='row'>
	  	<p>
		  	<div class='col-lg-4'>
		  		<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
		    	<input type="radio" name="confirm" value="yes" checked="checked" />
		    </div>
		    <div class='col-lg-4'>
			    <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
			    <input type="radio" name="confirm" value="no" />
			</div>
			<div class='col-lg-3'>
		    	<?php echo form_submit('submit', lang('deactivate_submit_btn'));?>
		    </div>
	  	</p>
	  </div>
	  <?php echo form_hidden($csrf); ?>
	  <?php echo form_hidden(array('id'=>$user->id)); ?>
	<?php echo form_close();?>
</div>