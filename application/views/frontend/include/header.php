    <!-- BEGIN HEADER -->
    <div class="header navbar navbar-inverse ">
        <!-- BEGIN TOP NAVIGATION BAR -->
        <div class="navbar-inner">
            <div class="header-seperation">
                <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">
                    <li class="dropdown">
                        <a id="main-menu-toggle" href="#main-menu" class="">
                            <div class="iconset top-menu-toggle-white"></div>
                        </a>
                    </li>
                </ul>
                <!-- BEGIN LOGO -->
                <a href="<?php echo site_url('user/timeline') ?>"><img src="<?php echo base_url(); ?>images/pic04.png" class="logo" data-src="<?php echo base_url(); ?>images/pic04.png" data-src-retina="<?php echo base_url(); ?>images/pic04.png" width="150" height="106" /></a>
                <!-- END LOGO -->
                <ul class="nav pull-right notifcation-center">

                    <li id="header_inbox_bar" class="dropdown">
                        <a class="dropdown-toggle" href="<?php echo site_url('user/messages') ?>">
                            <div class="iconset top-messages"></div>
                            <span id="msgs-badge" class="badge animated bounceIn"><?php echo (isset($jumlah_messages)) ? (($jumlah_messages == 0) ? '' : $jumlah_messages) : ''; ?></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END RESPONSIVE MENU TOGGLER -->
            
            <div class="header-quick-nav">
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="pull-left">
                    <ul class="nav quick-section">
                        <li class="quicklinks">
                            <a href="#" class="" id="layout-condensed-toggle">
                                <div class="iconset top-menu-toggle-dark"></div>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav quick-section">
                        <!-- <div class="input-prepend inside search-form no-boarder">
                            <span class="add-on">
                                <a href="#" class="">
                                    <div class="iconset top-search"></div>
                                </a>
                            </span>
                            <input name="" type="text" class="no-boarder " placeholder="Cari di profile" style="width:250px;" />
                        </div> -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
                
                <!-- BEGIN CHAT TOGGLER -->
                <div class="pull-right"> 
                    <div class="chat-toggler">  
                        <a href="#" class="dropdown-toggle" id="my-task-list" data-placement="bottom" data-content='
                                <div style="width:300px" class="scroller" data-height="100px">
                                    <?php if (isset($notifications)): ?>
                                    <?php foreach ($notifications as $row): ?>

                                    <a href="<?php echo $row['url'] ?>">
                                    <div class="notification-messages info">
                                            <div class="user-profile">
                                                <img src="<?php echo base_url().$row["GAMBAR_PROFIL_KECIL"]; ?>" data-src="<?php echo base_url().$row["GAMBAR_PROFIL_KECIL"]; ?>" data-src-retina="<?php echo base_url().$row["GAMBAR_PROFIL_KECIL"]; ?>" width="35" height="35">
                                            </div>
                                            <div class="message-wrapper">
                                                <div class="heading">
                                                    <?php echo $row["NAMA"] ?>
                                                </div>
                                                <div class="description">
                                                    <?php echo $row["Pesan"] ?>
                                                </div>
                                                <div class="date pull-left">
                                                <?php echo $row["Tgl"]; ?>
                                                </div>                                      
                                            </div>
                                            <div class="clearfix"></div>                                    
                                    </div>    
                                    </a>
                                    <?php endforeach ?>
                                    <?php endif ?>

                                </div>' data-toggle="dropdown" data-original-title="Notifications">
                            <div class="user-details"> 
                                <div class="username">
                                    <span class="badge badge-important"><?php echo (isset($notifications)) ? ((count($notifications) > 0) ? count($notifications) : '') : ''; ?></span> 
                                    <?php echo $profile['NAMA'] ?>
                                </div>                      
                            </div> 
                            <div class="iconset top-down-arrow"></div>
                        </a>                        
                        <div class="profile-pic"> 
                            <img alt="" src="<?php echo base_url(); ?>/<?php echo $profile['GAMBAR_PROFIL_KECIL']; ?>" data-src="<?php echo base_url(); ?>/<?php echo $profile['GAMBAR_PROFIL_KECIL']; ?>" data-src-retina="<?php echo base_url(); ?>/<?php echo $profile['GAMBAR_PROFIL_KECIL']; ?>" width="35" height="35" /> 
                        </div>                  
                    </div>
                    
                    <ul class="nav quick-section ">
                        <li class="quicklinks"> 
                            <a data-toggle="dropdown" class="dropdown-toggle  pull-right" href="#">                     
                                <div class="iconset top-settings-dark "></div>  
                            </a>
                            <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="dropdownMenu">
                                <li>
                                    <a href="<?php echo site_url('user/profile/edit') ?>"> Akun Saya</a>
                                </li>
                                <li class="divider"></li>                
                                <li><a href="<?php echo site_url('user/action/logout'); ?>"><i class="icon-off"></i>&nbsp;&nbsp;Log Out</a></li>
                            </ul>
                        </li> 
                        <li class="quicklinks"> <span class="h-seperate"></span></li> 
                        <!-- <li class="quicklinks">     
                            <a id="chat-menu-toggle" href="#sidr" class="chat-menu-toggle"><div class="iconset top-chat-dark "><span class="badge badge-important hide" id="chat-message-count">1</span></div>
                            </a> 
                            <div class="simple-chat-popup chat-menu-toggle hide">
                                <div class="simple-chat-popup-arrow"></div><div class="simple-chat-popup-inner">
                                    <div style="width:100px">
                                        <div class="semi-bold">David Nester</div>
                                        <div class="message">Hey you there </div>
                                    </div>
                                </div>
                            </div>
                        </li>  -->
                    </ul>
                </div>
                <!-- END CHAT TOGGLER -->
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
      <!-- END TOP NAVIGATION BAR -->
    </div>
    <!-- END HEADER -->