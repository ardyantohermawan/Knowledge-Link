        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar" id="main-menu">
            <!-- BEGIN MINI-PROFILE -->
            <div class="user-info-wrapper">
                <div class="profile-wrapper"> <img src="<?php echo base_url(); ?>assets/frontend/img/profiles/avatar.jpg" data-src="<?php echo base_url(); ?>assets/frontend/img/profiles/avatar.jpg" data-src-retina="<?php echo base_url(); ?>assets/frontend/img/profiles/avatar2x.jpg" width="69" height="69" /> </div>
                <div class="user-info">
                    <!-- <div class="greeting">Hai</div> -->
                    <div class="username"><?php echo $profile['NAMA']; ?></div>
                    <!-- <div class="status">Status
                        <a href="#">
                            <div class="status-icon green"></div>
                            Online
                        </a>
                    </div> -->
                </div>
            </div>
            <!-- END MINI-PROFILE -->

            <!-- BEGIN SIDEBAR MENU -->
            <p class="menu-title">BROWSE <span class="pull-right"><i class="icon-refresh"></i></span></p>
            <ul>
                <li class="start active"> <a href="<?php echo site_url('user/timeline'); ?>"> <i class="icon-custom-home"></i> <span class="title">Timeline</span> <span class="selected"></span> <span class="badge badge-important pull-right">5</span></a> </li>
                <li class=""> <a href="<?php echo site_url('user/profile'); ?>"> <i class="icon-user"></i> <span class="title">Profile Saya</span></a> </li>
                <li class=""> <a href="<?php echo site_url('user/connections'); ?>"> <i class="icon-group"></i> <span class="title">Koneksi</span> <span class=" badge badge-disable pull-right ">203</span></a> </li>
                <li class=""> <a href="javascript:;"> <i class="icon-custom-ui"></i> <span class="title">UI Elements</span> <span class="arrow "></span> </a>
                    <ul class="sub-menu">
                        <li> <a href="typography.html"> Typography </a> </li>
                    </ul>
                </li>
            </ul>
          
            <div class="side-bar-widgets">
                <p class="menu-title">FOLDER <span class="pull-right"><a href="#" class="create-folder"><i class="icon-plus"></i></a></span></p>
                <ul class="folders" id="folders">
                    <li>
                        <a href="#">
                            <div class="status-icon green"></div> My quick tasks 
                        </a> 
                    </li>
                    <li>
                        <a href="#">
                            <div class="status-icon red"></div> To do list 
                        </a> 
                    </li>
                    <li>
                        <a href="#">
                            <div class="status-icon blue"></div> Projects
                        </a> 
                    </li>
                    <li id="folder-input" class="folder-input" style="display:none">
                        <input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="" id="folder-name" />
                    </li>
                </ul>
                <p class="menu-title">PROJECTS </p>
                <div class="status-widget">
                    <div class="status-widget-wrapper">
                        <div class="title">Freelancer
                            <a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a>
                        </div>
                        <p>Redesign home page</p>
                    </div>
                </div>
                <div class="status-widget">
                    <div class="status-widget-wrapper">
                        <div class="title">envato
                            <a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a>
                        </div>
                        <p>Statistical report</p>
                    </div>
                </div>
            </div>
            
            <a href="#" class="scrollup">Scroll</a>
            <div class="clearfix"></div>
            <!-- END SIDEBAR MENU -->
        </div>
        <div class="footer-widget">
            <div class="progress transparent progress-success progress-small no-radius no-margin">
                <div data-percentage="79%" class="bar animate-progress-bar"></div>
            </div>
            <div class="pull-right">
                <div class="details-status"> <span data-animation-duration="560" data-value="86" class="animate-number"></span>% </div>
                <a href="login.html"><i class="icon-off"></i></a>
            </div>
        </div>
        <!-- END SIDEBAR -->