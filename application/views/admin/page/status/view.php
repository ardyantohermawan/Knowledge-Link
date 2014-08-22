                <div class="container">
                    <h3>Daftar Status</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-info pull-right" href="<?php echo site_url('admin/status/tambah'); ?>">
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
                                                ID Status
                                            </th>
                                            <th>
                                                ID User
                                            </th>
                                            <th>
                                                Status User
                                            </th>
                                            
                                            <th>
                                                Action
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (isset($statuss)) { ?>
                                        <?php foreach ($statuss as $status) { ?>
                                        <tr>
                                            <td><?php echo $status['ID_Status']; ?></td>
                                            <td><?php echo $status['ID_user']; ?></td>
                                            <td><?php echo $status['User_status']; ?></td>
                                            <td>
                                                <a class="btn btn-warning" href="<?php echo site_url('admin/status/edit/'.$status['ID_Status']); ?>">Edit</a>
                                                <a class="btn btn-danger" href="<?php echo site_url('admin/status/hapus/'.$status['ID_Status']); ?>">Hapus</a>
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