<?php if($this->session->flashdata('message')){ ?>
<div class="alert">
	<button class="close" data-dismiss="alert"></button>
	<?php echo $this->session->flashdata('message_success'); ?>
</div>
<?php } ?>

<?php if($this->session->flashdata('message_error')){ ?>
<div class="alert alert-error">
    <button class="close" data-dismiss="alert"></button>
    <?php echo $this->session->flashdata('message_error');  ?>
</div>
<?php } ?>

<?php if(validation_errors()){ ?>
<div class="alert alert-error">
	<button class="close" data-dismiss="alert"></button>
	<?php echo validation_errors(); ?>
</div>
<?php } ?>