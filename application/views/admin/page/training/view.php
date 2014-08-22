                <div class="container">
                    <h3>Daftar Training</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-info pull-right" href="<?php echo site_url('admin/training/tambah'); ?>">
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
                                                Training_event_id
                                            </th>
                                            <th>
                                                Course_id
                                            </th>
                                            <th>
                                                Nama_training
                                            </th>
                                            <th>
                                                Topik
                                            </th>
                                            <th>
                                                Durasi
                                            </th>
                                            <th>
                                                Start_date
                                            </th>
                                            <th>
                                                End_date
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
                                        <?php if (isset($trainings)) { ?>
                                        <?php foreach ($trainings as $training) { ?>
                                        <tr>
                                            <td><?php echo $training['NIK']; ?></td>
                                            <td><?php echo $training['KODE_UNIT_KERJA']; ?></td>
                                            <td><?php echo $training['TRAINING_EVENT_ID']; ?></td>
                                            <td><?php echo $training['COURSE_ID']; ?></td>
                                            <td><?php echo $training['NAMA_TRAINING']; ?></td>
                                            <td><?php echo $training['TOPIK']; ?></td>
                                            <td><?php echo $training['DURASI']; ?></td>
                                            <td><?php echo $training['START_DATE']; ?></td>
                                            <td><?php echo $training['END_DATE']; ?></td>
                                            <td><?php echo $training['TEMPAT']; ?></td>
                                            <td><?php echo $training['PENYELENGGARA']; ?></td>
                                            <td>
                                                <a class="btn btn-warning" href="<?php echo site_url('admin/training/edit/'.$training['ID_training']); ?>">Edit</a>
                                                <a class="btn btn-danger" href="<?php echo site_url('admin/training/hapus/'.$training['ID_training']); ?>">Hapus</a>
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