
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Knowledge Link | Admin Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Admin Panel Template">
        <?php $this->load->view('admin/include/header'); ?>
        
    </head>
    <body>
        <div class="main-wrapper">
            <div class="scroll-top">
                <a href="#" class="tip-top" title="Go Top"><i class="icon-arrow-up"></i></a>
            </div>
            <!-- TOP BAR -->
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <a href="#" class="left-toggle"><i class="icon-menu-2 "></i></a>
                            <!-- LOGO -->
                            <div class="branding">
                                <a href="index.html"><img src="images/alpona-logo.png" alt="Alpona Logo"></a>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 col-md-6 clearfix responsive-log-mnu">
                            <!-- ADMIN DRODOWN MENU -->
                            <div class="loged-nav pull-right">
                                <ul class="clearfix">
                                    <li class="log-nav dropdown pull-right"><a class="dropdown-toggle clearfix" data-toggle="dropdown">
                                            <span class="pull-left loged-user-name">Sharmin Sultana</span><span class="logged-user-thumb pull-right"><img class="img-circle" src="images/admin-avatar.jpg" alt="Admin"></span></a>
                                        <div class="dropdown-menu">
                                            <ul class="pull-right">
                                                <li><a href="#">kjamanebr@gmail.com</a></li>
                                                <li><a href="#">Edit Profile</a></li>
                                                <li><a href="#">Inbox</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#" class="logout-link"><i class="icon-lock-3"></i> Logout</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
           
            <!-- SITE CONTAINER -->
            <div class="main-container">
                <?php $this->load->view('admin/include/menu'); ?>
                <?php $this->load->view('admin/include/message'); ?>

                
                <?php if (isset($content)) $this->load->view($content); ?>
            </div>
        </div>
        <?php $this->load->view('admin/include/footer'); ?>
    </body>
</html>