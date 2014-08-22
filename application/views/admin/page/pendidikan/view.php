                <div class="container">
                    <h3>Daftar Pendidikan</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-info pull-right" href="<?php echo site_url('admin/pendidikan/tambah'); ?>">
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
                                                Education_level_no
                                            </th>
                                            <th>
                                                Education_level_name
                                            </th>
                                            <th>
                                                Education_field_no
                                            </th>
                                            <th>
                                                Education_field_name
                                            </th>
                                            <th>
                                                Location
                                            </th>
                                            <th>
                                                Start_year
                                            </th>
                                            <th>
                                                End_year
                                            </th>
                                            <th>
                                                G_p_a
                                            </th>
                                            <th>
                                                Achievement
                                            </th>
                                            <th>
                                                Remark
                                            </th>
                                            <th>
                                                Edu_institution_seq_no
                                            </th>
                                            <th>
                                                Edu_institution_name
                                            </th>
                                            <th>
                                                Education_lvl_received
                                            </th>
                                            <th>
                                                Prefered_education
                                            </th>
                                            <th>
                                                Rowversion
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (isset($pendidikans)) { ?>
                                        <?php foreach ($pendidikans as $pendidikan) { ?>
                                        <tr>
                                            <td><?php echo $pendidikan['NIK']; ?></td>
                                            <td><?php echo $pendidikan['KODE_UNIT_KERJA']; ?></td>
                                            <td><?php echo $pendidikan['EDUCATION_LEVEL_NO']; ?></td>
                                            <td><?php echo $pendidikan['EDUCATION_LEVEL_NAME']; ?></td>
                                            <td><?php echo $pendidikan['EDUCATION_FIELD_NO']; ?></td>
                                            <td><?php echo $pendidikan['EDUCATION_FIELD_NAME']; ?></td>
                                            <td><?php echo $pendidikan['LOCATION']; ?></td>
                                            <td><?php echo $pendidikan['START_YEAR']; ?></td>
                                            <td><?php echo $pendidikan['END_YEAR']; ?></td>
                                            <td><?php echo $pendidikan['G_P_A']; ?></td>
                                            <td><?php echo $pendidikan['ACHIEVEMENT']; ?></td>
                                            <td><?php echo $pendidikan['REMARK']; ?></td>
                                            <td><?php echo $pendidikan['EDU_INSTITUTION_SEQ_NO']; ?></td>
                                            <td><?php echo $pendidikan['EDU_INSTITUTION_NAME']; ?></td>
                                            <td><?php echo $pendidikan['EDUCATION_LVL_RECEIVED']; ?></td>
                                            <td><?php echo $pendidikan['PREFERED_EDUCATION']; ?></td>
                                            <td><?php echo $pendidikan['ROWVERSION']; ?></td>
                                            <td><?php echo $pendidikan['ANIK_BARU']; ?></td>
                                            <td>
                                                <a class="btn btn-warning" href="<?php echo site_url('admin/pendidikan/edit/'.$pendidikan['ID_pendidikan']); ?>">Edit</a>
                                                <a class="btn btn-danger" href="<?php echo site_url('admin/pendidikan/hapus/'.$pendidikan['ID_pendidikan']); ?>">Hapus</a>
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