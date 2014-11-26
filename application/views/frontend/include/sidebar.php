        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar" id="main-menu">
            <!-- BEGIN MINI-PROFILE -->
            <div class="user-info-wrapper">
                <div class="profile-wrapper"> <img src="<?php echo base_url(); ?>/<?php echo $profile['GAMBAR_PROFIL']; ?>" data-src="<?php echo base_url(); ?>/<?php echo $profile['GAMBAR_PROFIL']; ?>" data-src-retina="<?php echo base_url(); ?>/<?php echo $profile['GAMBAR_PROFIL']; ?>" width="69" height="69" /> </div>
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
            <p class="menu-title">BROWSE </p>
            <ul>
                <li class="<?php echo (isset($page) ? (($page == 'timeline') ? 'active' : '') : '') ?>"> <a href="<?php echo site_url('user/timeline'); ?>"> <i class="icon-custom-home"></i> <span class="title">Timeline</span> <span class="selected"></span></a> </li>
                <li class="<?php echo (isset($page) ? (($page == 'myprofile') ? 'active' : '') : '') ?>"> <a href="<?php echo site_url('user/profile'); ?>"> <i class="icon-user"></i> <span class="title">Profile Saya</span></a> </li>
                <li class="<?php echo (isset($page) ? (($page == 'friends') ? 'active' : '') : '') ?>"> <a href="<?php echo site_url('user/friends'); ?>"> <i class="icon-group"></i> <span class="title">Teman</span> <span class=" badge badge-disable pull-right "> </span></a> </li>
                <li class="<?php echo (isset($page) ? (($page == 'friends_search') ? 'active' : '') : '') ?>"> <a href="<?php echo site_url('user/friends/search'); ?>"> <i class="icon-group"></i> <span class="title">Cari Teman</span> <span class=" badge badge-disable pull-right "> </span></a> </li>
            </ul>

            <p class="menu-title">GROUPS </p>
            <ul>
                <?php if (isset($groups)): ?>
                    <?php foreach ($groups as $row): ?>
                        
                <li class=""> <a href="javascript:;"> <i class="icon-custom-ui"></i> <span class="title"><?php echo ucfirst(strtolower($row['NAMA_GROUP'])); ?></span> <span class="arrow "></span> </a>
                    <ul class="sub-menu">
                        <?php if (isset($child_groups)): ?>
                            <?php foreach ($child_groups as $rowChild): ?>
                                <?php if ($rowChild['PARENT_ID_GROUP'] == $row['ID_GROUP']): ?>
                                    <li> <a href="<?php echo site_url('group/timeline/id/'.$rowChild['ID_GROUP']); ?>"> <?php echo ucfirst(strtolower($rowChild['NAMA_GROUP'])); ?> </a> </li>
                                    
                                <?php endif ?>
                                
                            <?php endforeach ?>
                        <?php endif ?>
                    </ul>
                </li>
                    
                    <?php endforeach ?>
                <?php endif ?>
            </ul>

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