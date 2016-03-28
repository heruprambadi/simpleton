<div class="box box-default">
  <div class="box-header with-border">
<h1><?php echo lang('deactivate_heading');?></h1>
<p><?php echo sprintf(lang('deactivate_subheading'), $user->email);?></p> 
  <div class="box-tools pull-right">
  </div>
</div><!-- /.box-header -->
<div class="box-body">
<?php echo form_open("auth/deactivate/".$user->id);?>
<div class="radio">
	<label>
		<input type="radio" name="confirm" value="yes" checked="checked" />
		Ya
	</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<label>
		<input type="radio" name="confirm" value="no" />
		Tidak
	</label>
</div>

  <?php echo form_hidden($csrf); ?>
  <?php echo form_hidden(array('id'=>$user->id)); ?>

  <p><?php echo form_submit('submit', lang('deactivate_submit_btn'));?></p>

<?php echo form_close();?>
</div><!-- /.box-body -->

<div class="box-footer">
</div>