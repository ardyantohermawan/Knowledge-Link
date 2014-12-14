				<div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- SHORTCUT BAR -->
                            <div class="shortcut-bar">
                                <ul class="shortcut-items">
                                    <!-- <li><a href="<?php // echo site_url('admin/dashboard'); ?>"><i class="icon-desktop"></i><span class="shortcut-label">Dashboard</span></a></li> -->
                                    <li><a href="<?php echo site_url('admin/akses'); ?>"><i class="icon-cogs"></i><span class="shortcut-label">Akses</span></a></li>
                                    <li><a href="<?php echo site_url('admin/group'); ?>"><i class="icon-group"></i><span class="shortcut-label">Group</span></a></li>
                                    <li><a href="<?php echo site_url('admin/karyawan'); ?>"><i class="icon-users-2"></i><span class="shortcut-label">Karyawan</span></a></li>
                                    <li><a href="<?php echo site_url('admin/pendidikan'); ?>"><i class="icon-books"></i><span class="shortcut-label">Pendidikan</span></a></li>
                                    <li><a href="<?php echo site_url('admin/pengalaman_kerja'); ?>"><i class="icon-trophy"></i><span class="shortcut-label">Pengalaman</span></a></li>
                                    <li><a href="<?php echo site_url('admin/status'); ?>"><i class="icon-stack-list"></i><span class="shortcut-label">Status</span></a></li>
                                    <li><a href="<?php echo site_url('admin/sertifikasi'); ?>"><i class="icon-certificate"></i><span class="shortcut-label">Sertifikasi</span></a></li>
                                    <li><a href="<?php echo site_url('admin/training'); ?>"><i class="icon-brain"></i><span class="shortcut-label">Training</span></a></li>
                                    <li><a href="<?php echo site_url('admin/unit_kerja'); ?>"><i class="icon-office"></i><span class="shortcut-label">Unit Kerja</span></a></li>
                                    <li><a href="<?php echo site_url('admin/user'); ?>"><i class="icon-user"></i><span class="shortcut-label">User</span></a></li>
                                    <li><a href="<?php echo site_url('admin/private_message'); ?>"><i class="icon-envelope"></i><span class="shortcut-label">Pesan</span></a></li>
                                    <!-- <li><a href="<?php // echo site_url('admin/koneksi'); ?>"><i class="icon-user-plus"></i><span class="shortcut-label">Koneksi</span></a></li> -->
                                    <li><a href="<?php echo site_url('admin/album'); ?>"><i class="icon-images"></i><span class="shortcut-label">Album</span></a></li>
                                </ul>
                            </div>
                            <ul class="breadcrumb">
                                <li><a href="#"><i class="icon-home"></i></a></li>
                                <li><a href="#">Admin</a></li>
                                <li class="active"><?php echo ucfirst($this->uri->segment(2)) ?></li>
                            </ul>
                        </div>
                    </div>
                </div>