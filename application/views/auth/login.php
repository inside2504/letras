<div class="cascaron">
    <div class='log'>
      <h3><?php echo lang('bienvenida');?></h3>
      <p class='cent'><?php echo lang('login_subheading');?></p>
    </div>
    <div id="infoMessage"><?php echo $message;?></div>
  <?php echo form_open("auth/login");?>
  <p class="foot"> <br>
    <?php echo lang('login_identity_label', 'identity');?> <br>
    <?php echo form_input($identity);?>
  </p>
  <p class="foot">
    <?php echo lang('login_password_label', 'password');?> <br>
    <?php echo form_input($password);?>
  </p>
  <p class="foot">
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>
  <p class="foot"><?php echo form_submit('submit', lang('login_submit_btn'));?></p>
<?php echo form_close();?>
<p class="foot"><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
</div>
    