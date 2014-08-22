                <div class="container">
                    <h3>Daftar User</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-info pull-right" href="<?php echo site_url('admin/user/tambah'); ?>">
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
                                                Nik
                                            </th>
                                            <th>
                                                Kode_unit_kerja
                                            </th>
                                            <th>
                                                Id_group
                                            </th>
                                            <th>
                                                Id_akses
                                            </th>
                                            <th>
                                                Username
                                            </th>
                                            <th>
                                                Password_user
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (isset($users)) { ?>
                                        <?php foreach ($users as $user) { ?>
                                        <tr>
                                            <td><?php echo $user['NIK']; ?></td>
                                            <td><?php echo $user['KODE_UNIT_KERJA']; ?></td>
                                            <td><?php echo $user['ID_GROUP']; ?></td>
                                            <td><?php echo $user['ID_AKSES']; ?></td>
                                            <td><?php echo $user['USERNAME']; ?></td>
                                            <td><?php echo $user['PASSWORD_USER']; ?></td>
                                            <td>
                                                <a class="btn btn-warning" href="<?php echo site_url('admin/user/edit/'.$user['ID_user']); ?>">Edit</a>
                                                <a class="btn btn-danger" href="<?php echo site_url('admin/user/hapus/'.$user['ID_user']); ?>">Hapus</a>
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