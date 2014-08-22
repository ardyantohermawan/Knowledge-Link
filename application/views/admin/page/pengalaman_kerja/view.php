                <div class="container">
                    <h3>Daftar Pengalaman Kerja</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-info pull-right" href="<?php echo site_url('admin/pengalaman_kerja/tambah'); ?>">
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
                                                No_sk
                                            </th>
                                            <th>
                                                Tgl_sk
                                            </th>
                                            <th>
                                                Ma_tmt
                                            </th>
                                            <th>
                                                Mkt_gol
                                            </th>
                                            <th>
                                                Mkb_gol
                                            </th>
                                            <th>
                                                Kode_update
                                            </th>
                                            <th>
                                                Nm_jbt
                                            </th>
                                            <th>
                                                Nm_pl
                                            </th>
                                            <th>
                                                Nm_ru
                                            </th>
                                            <th>
                                                Nm_si
                                            </th>
                                            <th>
                                                Nm_bag
                                            </th>
                                            <th>
                                                Nm_dep
                                            </th>
                                            <th>
                                                Nm_kom
                                            </th>
                                            <th>
                                                Nm_dir
                                            </th>
                                            <th>
                                                Keterangan
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (isset($pengalaman_kerjas)) { ?>
                                        <?php foreach ($pengalaman_kerjas as $pengalaman_kerja) { ?>
                                        <tr>
                                            <td><?php echo $pengalaman_kerja['NIK']; ?></td>
                                            <td><?php echo $pengalaman_kerja['KODE_UNIT_KERJA']; ?></td>
                                            <td><?php echo $pengalaman_kerja['NO_SK']; ?></td>
                                            <td><?php echo $pengalaman_kerja['TGL_SK']; ?></td>
                                            <td><?php echo $pengalaman_kerja['MA_TMT']; ?></td>
                                            <td><?php echo $pengalaman_kerja['MKT_GOL']; ?></td>
                                            <td><?php echo $pengalaman_kerja['MKB_GOL']; ?></td>
                                            <td><?php echo $pengalaman_kerja['KODE_UPDATE']; ?></td>
                                            <td><?php echo $pengalaman_kerja['NM_JBT']; ?></td>
                                            <td><?php echo $pengalaman_kerja['NM_PL']; ?></td>
                                            <td><?php echo $pengalaman_kerja['NM_RU']; ?></td>
                                            <td><?php echo $pengalaman_kerja['NM_SI']; ?></td>
                                            <td><?php echo $pengalaman_kerja['NM_BAG']; ?></td>
                                            <td><?php echo $pengalaman_kerja['NM_DEP']; ?></td>
                                            <td><?php echo $pengalaman_kerja['NM_KOM']; ?></td>
                                            <td><?php echo $pengalaman_kerja['NM_DIR']; ?></td>
                                            <td><?php echo $pengalaman_kerja['KETERANGAN']; ?></td>
                                            <td>
                                                <a class="btn btn-warning" href="<?php echo site_url('admin/pengalaman_kerja/edit/'.$pengalaman_kerja['ID_pengalaman_kerja']); ?>">Edit</a>
                                                <a class="btn btn-danger" href="<?php echo site_url('admin/pengalaman_kerja/hapus/'.$pengalaman_kerja['ID_pengalaman_kerja']); ?>">Hapus</a>
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