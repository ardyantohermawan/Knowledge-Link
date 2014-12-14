                <div class="container">
                    <h3>Daftar Album Karyawan</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-info pull-right" href="<?php echo site_url('admin/album/tambah'); ?>">
                                <icon class="icon-plus"></icon>Tambah
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-widget">
                                <div class="widget-head clearfix">
                                    <h4 class="pull-left">Galeri Foto</h4>
                                </div>
                                <div class="widget-container">
                                    <div class="widget-content box-padding">
                                        <!--box-spacing define 20px padding for all content here-->
                                        <div class="widget-block">
                                            <div class="row">
                                                <?php if (isset($albums)): ?>
                                                    <?php foreach ($albums as $album): ?>
                                                        
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="thumbnail">
                                                        <img style="width: 300px; height: 200px;" data-src="<?php echo base_url().$album['Nama_Foto'] ?>" alt="300x200" src="<?php echo base_url().$album['Nama_Foto'] ?>">
                                                        <div class="caption">
                                                            <h3><?php echo $album['Nama_Album'] ?></h3>
                                                            <p>
                                                                <?php echo $album['NAMA'] ?>
                                                            </p>
                                                            <p>
                                                                <a class="btn btn-warning" href="<?php echo site_url('admin/album/edit/'.$album['ID_User_Album']); ?>">Edit</a>
                                                                <a class="btn btn-danger" href="<?php echo site_url('admin/album/hapus/'.$album['ID_User_Album']); ?>">Hapus</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <?php endforeach ?>
                                                <?php endif ?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>