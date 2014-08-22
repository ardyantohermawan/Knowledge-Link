            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($this->session->flashdata('message_success')){ ?>
			            <div class="alert alert-success">
			                <a class="close" data-dismiss="alert" href="#">×</a>
			                <h4>Well Done!</h4>
			                <?php echo $this->session->flashdata('message_success');  ?>
			            </div>
			            <?php } ?>
			            <?php if($this->session->flashdata('message_error')){ ?>
			            <div class="alert alert-danger">
			                <a class="close" data-dismiss="alert" href="#">×</a>
			                <h4>Oh Snap!</h4>
			                <?php echo $this->session->flashdata('message_error');  ?>
			            </div>
			            <?php } ?>
			            <?php if(validation_errors()){ ?>
			            <div class="alert alert-danger">
			                <a class="close" data-dismiss="alert" href="#">×</a>
			                <h4>Oh Snap!</h4>
			                <?php echo validation_errors();?>
			            </div>
			            <?php } ?>
			            <?php if ($this->session->flashdata('upload_error')){ ?>
			            <div class="alert alert-danger">
			                <a class="close" data-dismiss="alert" href="#">×</a>
			                <h4>Oh Snap!</h4>
			                <?php echo $this->session->flashdata('upload_error'); ?>
			            </div>
			            <?php } ?>
                    </div>
                </div>
            </div>