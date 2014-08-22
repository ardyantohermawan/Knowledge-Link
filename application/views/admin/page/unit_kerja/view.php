                <div class="container">
                    <h3>Daftar Unit Kerja</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-info pull-right" href="<?php echo site_url('admin/unit_kerja/tambah'); ?>">
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
                                                Kode Unit Kerja
                                            </th>
                                            <th>
                                                Content Unit Kerja
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (isset($unit_kerjas)) { ?>
                                        <?php foreach ($unit_kerjas as $unit_kerja) { ?>
                                        <tr>
                                            <td><?php echo $unit_kerja['KODE_UNIT_KERJA']; ?></td>
                                            <td><?php echo $unit_kerja['CONTENT_UNIT_KERJA']; ?></td>
                                            <td>
                                                <a class="btn btn-warning" href="<?php echo site_url('admin/unit_kerja/edit/'.$unit_kerja['KODE_UNIT_KERJA']); ?>">Edit</a>
                                                <a class="btn btn-danger" href="<?php echo site_url('admin/unit_kerja/hapus/'.$unit_kerja['KODE_UNIT_KERJA']); ?>">Hapus</a>
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