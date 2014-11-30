                <div class="container">
                    <h3>Daftar Sertifikasi</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-info pull-right" href="<?php echo site_url('admin/sertifikasi/tambah'); ?>">
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
                                                NIK
                                            </th>
                                            <th>
                                                Kode Unit Kerja
                                            </th>
                                            <th>
                                                Training Event ID
                                            </th>
                                            <th>
                                                Course ID
                                            </th>
                                            <th>
                                                Nama Sertifikasi
                                            </th>
                                            <th>
                                                Topik
                                            </th>
                                            <th>
                                                Durasi
                                            </th>
                                            <th>
                                                Mulai
                                            </th>
                                            <th>
                                                Selesai
                                            </th>
                                            <th>
                                                Tempat
                                            </th>
                                            <th>
                                                Penyelenggara
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (isset($sertifikasis)) { ?>
                                        <?php foreach ($sertifikasis as $sertifikasi) { ?>
                                        <tr>
                                            <td><?php echo $sertifikasi['NIK']; ?></td>
                                            <td><?php echo $sertifikasi['KODE_UNIT_KERJA']; ?></td>
                                            <td><?php echo $sertifikasi['TRAINING_EVENT_ID']; ?></td>
                                            <td><?php echo $sertifikasi['COURSE_ID']; ?></td>
                                            <td><?php echo $sertifikasi['NAMA_TRAINING']; ?></td>
                                            <td><?php echo $sertifikasi['TOPIK']; ?></td>
                                            <td><?php echo $sertifikasi['DURASI']; ?></td>
                                            <td><?php echo $sertifikasi['START_DATE']; ?></td>
                                            <td><?php echo $sertifikasi['END_DATE']; ?></td>
                                            <td><?php echo $sertifikasi['TEMPAT']; ?></td>
                                            <td><?php echo $sertifikasi['PENYELENGGARA']; ?></td>
                                            <td>
                                                <a class="btn btn-warning" href="<?php echo site_url('admin/sertifikasi/edit/'.$sertifikasi['ID_sertifikasi']); ?>">Edit</a>
                                                <a class="btn btn-danger" href="<?php echo site_url('admin/sertifikasi/hapus/'.$sertifikasi['ID_sertifikasi']); ?>">Hapus</a>
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