<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Knowledge Link</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link href="<?php echo base_url(); ?>assets/frontend/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url(); ?>assets/frontend/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="<?php echo base_url(); ?>assets/frontend/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/frontend/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/frontend/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/frontend/css/animate.min.css" rel="stylesheet" type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->

    <!-- BEGIN CSS TEMPLATE -->
    <link href="<?php echo base_url(); ?>assets/frontend/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/frontend/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/frontend/css/custom-icon-set.css" rel="stylesheet" type="text/css" />
    <!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="">
    
    <?php $this->load->view('frontend/include/header'); ?>

    <!-- BEGIN CONTAINER -->
    <div class="page-container row-fluid">
        
        <?php $this->load->view('frontend/include/sidebar'); ?>
     
        <!-- BEGIN PAGE CONTAINER-->
        <div class="page-content"> 
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div id="portlet-config" class="modal hide">
                <div class="modal-header">
                    <button data-dismiss="modal" class="close" type="button"></button>
                    <h3>Widget Settings</h3>
                </div>
                <div class="modal-body"> Widget settings form goes here </div>
            </div>
            <div class="clearfix"></div>
            <div class="content"> 
                <div class="row-fluid">
                    <?php $this->load->view('frontend/include/message'); ?>
                </div>

                <?php ($content) ? $this->load->view($content) : ''; ?>

            </div>
        </div>
        
        <?php // $this->load->view('frontend/include/chat'); ?>

    </div>
    <!-- END CONTAINER --> 

    
    <!-- END CONTAINER -->

    <!-- BEGIN CORE JS FRAMEWORK--> 
    <script src="<?php echo base_url(); ?>assets/frontend/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
    <script src="<?php echo base_url(); ?>assets/frontend/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
    <script src="<?php echo base_url(); ?>assets/frontend/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
    <script src="<?php echo base_url(); ?>assets/frontend/plugins/breakpoints.js" type="text/javascript"></script> 
    <script src="<?php echo base_url(); ?>assets/frontend/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
    <!-- END CORE JS FRAMEWORK --> 
    <!-- BEGIN PAGE LEVEL JS -->    
    <script src="<?php echo base_url(); ?>assets/frontend/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>  
    <script src="<?php echo base_url(); ?>assets/frontend/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
    <script src="<?php echo base_url(); ?>assets/frontend/plugins/pace/pace.min.js" type="text/javascript"></script>  
    <script src="<?php echo base_url(); ?>assets/frontend/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/plugins/jquery-mixitup/jquery.mixitup.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/tabs_accordian.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->     
    
    <script src="<?php echo base_url(); ?>assets/frontend/js/search_results.js" type="text/javascript"></script> 

    <!-- BEGIN CORE TEMPLATE JS --> 
    <script src="<?php echo base_url(); ?>assets/frontend/js/core.js" type="text/javascript"></script> 
    <script src="<?php echo base_url(); ?>assets/frontend/js/demo.js" type="text/javascript"></script> 
    <!-- END CORE TEMPLATE JS --> 
</body>
</html>