                <div class="container">
                    <h3>Daftar Private Message</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-info pull-right" href="<?php echo site_url('admin/private_message/tambah'); ?>">
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
                                                ID Pesan
                                            </th>
                                            <th>
                                                ID Pengirim
                                            </th>
                                            <th>
                                                ID Penerima
                                            </th>
                                            <th>
                                                Judul
                                            </th>
                                            <th>
                                                Pesan
                                            </th>
                                            <th>
                                                Tanggal
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (isset($private_messages)) { ?>
                                        <?php foreach ($private_messages as $private_message) { ?>
                                        <tr>
                                            <td><?php echo $private_message['ID_Pesan']; ?></td>
                                            <td><?php echo $private_message['ID_Pengirim']; ?></td>
                                            <td><?php echo $private_message['ID_Penerima']; ?></td>
                                            <td><?php echo $private_message['Subject']; ?></td>
                                            <td><?php echo $private_message['Pesan']; ?></td>
                                            <td><?php echo $private_message['Tgl']; ?></td>
                                            <td>
                                                <a class="btn btn-warning" href="<?php echo site_url('admin/private_message/edit/'.$private_message['ID_Pesan']); ?>">Edit</a>
                                                <a class="btn btn-danger" href="<?php echo site_url('admin/private_message/hapus/'.$private_message['ID_Pesan']); ?>">Hapus</a>
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