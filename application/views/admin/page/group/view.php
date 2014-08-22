				<div class="container">
                    <h3>Daftar Group</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-info pull-right" href="<?php echo site_url('admin/group/tambah'); ?>">
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
                                                Level Group
                                            </th>
                                            <th>
                                                Nama Group
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (isset($groups)) { ?>
                                        <?php foreach ($groups as $group) { ?>
                                        <tr>
                                            <td><?php echo $group['ID_GROUP']; ?></td>
                                        	<td><?php echo $group['LEVEL_GROUP']; ?></td>
                                            <td><?php echo $group['NAMA_GROUP']; ?></td>
                                            <td>
                                                <a class="btn btn-warning" href="<?php echo site_url('admin/group/edit/'.$group['ID_GROUP']); ?>">Edit</a>
                                                <a class="btn btn-danger" href="<?php echo site_url('admin/group/hapus/'.$group['ID_GROUP']); ?>">Hapus</a>
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