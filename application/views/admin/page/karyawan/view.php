                <div class="container">
                    <h3>Daftar Karyawan</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-info pull-right" href="<?php echo site_url('admin/karyawan/tambah'); ?>">
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
                                                Nama
                                            </th>
                                            <th>
                                                Poscode
                                            </th>
                                            <th>
                                                Jabatan
                                            </th>
                                            <th>
                                                Postitle
                                            </th>
                                            <th>
                                                Unit Kerja
                                            </th>
                                            <th>
                                                Workloc
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (isset($karyawans)) { ?>
                                        <?php foreach ($karyawans as $karyawan) { ?>
                                        <tr>
                                            <td><?php echo $karyawan['NIK']; ?></td>
                                            <td><?php echo $karyawan['KODE_UNIT_KERJA']; ?></td>
                                            <td><?php echo $karyawan['NAMA']; ?></td>
                                            <td><?php echo $karyawan['POSCODE']; ?></td>
                                            <td><?php echo $karyawan['JABATAN']; ?></td>
                                            <td><?php echo $karyawan['POSTITLE']; ?></td>
                                            <td><?php echo $karyawan['UNITKERJA']; ?></td>
                                            <td><?php echo $karyawan['WORKLOC']; ?></td>
                                            <td>
                                                <a class="btn btn-warning" href="<?php echo site_url('admin/karyawan/edit/'.$karyawan['NIK']); ?>">Edit</a>
                                                <a class="btn btn-danger" href="<?php echo site_url('admin/karyawan/hapus/'.$karyawan['NIK']); ?>">Hapus</a>
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