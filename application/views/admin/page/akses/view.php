                <div class="container">
                    <h3>Daftar Level Akses</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-info pull-right" href="<?php echo site_url('admin/akses/tambah'); ?>">
                                <icon class="icon-plus"></icon>Tambah
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-widget">
                                <table class="table data-tbl-boxy responsive">
                                    <thead>
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                                Level Level Akses
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (isset($aksess)) { ?>
                                        <?php foreach ($aksess as $akses) { ?>
                                        <tr>
                                            <td><?php echo $akses['ID_AKSES']; ?></td>
                                            <td><?php echo $akses['LEVEL_AKSES']; ?></td>
                                            <td>
                                                <a class="btn btn-warning" href="<?php echo site_url('admin/akses/edit/'.$akses['ID_AKSES']); ?>">Edit</a>
                                                <a class="btn btn-danger" href="<?php echo site_url('admin/akses/hapus/'.$akses['ID_AKSES']); ?>">Hapus</a>
                                            </td>
                                        </tr>
                                        
                                        <?php } ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>