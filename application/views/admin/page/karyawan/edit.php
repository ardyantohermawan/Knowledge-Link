				<div class="container">
                    <h3>Ubah Data Karyawan</h3>
                    
                    
                    <div class="row">
                        <div class="col-md-12 widget-module">
                            <div class="box-widget">
                                <div class="widget-head clearfix">
                                    <span class="h-icon"><i class="icon-paragraph-justify-2"></i></span>
                                    <h4 class="pull-left">Form </h4>
                                    <div class="pull-right widget-action">
                                        <ul>
                                            <li><a href="#" class="widget-collapse"><i class="icon-arrow-down"></i></a></li>
                                            <li><a href="#" class="widget-remove"><i class=" icon-remove-sign"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget-container">
                                    <div class="widget-block">
                                        <div class="widget-content">
                                            <form action="<?php echo site_url('admin/karyawan/ubah/'.$karyawan['NIK']); ?>" method="POST" class="form-horizontal form-box">
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">NIK</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="NIK" value="<?php echo (set_value('NIK')) ? set_value('NIK') : $karyawan['NIK']; ?>" class="form-control" placeholder="Masukkan NIK">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Kode_unit_kerja</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="kode_unit_kerja" value="<?php echo (set_value('kode_unit_kerja')) ? set_value('kode_unit_kerja') : $karyawan['KODE_UNIT_KERJA']; ?>" class="form-control" placeholder="Masukkan kode_unit_kerja">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Nama</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="nama" value="<?php echo (set_value('nama')) ? set_value('nama') : $karyawan['NAMA']; ?>" class="form-control" placeholder="Masukkan nama">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Poscode</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="poscode" value="<?php echo (set_value('poscode')) ? set_value('poscode') : $karyawan['POSCODE']; ?>" class="form-control" placeholder="Masukkan poscode">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Jabatan</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="jabatan" value="<?php echo (set_value('jabatan')) ? set_value('jabatan') : $karyawan['JABATAN']; ?>" class="form-control" placeholder="Masukkan jabatan">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Postitle</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="postitle" value="<?php echo (set_value('postitle')) ? set_value('postitle') : $karyawan['POSTITLE']; ?>" class="form-control" placeholder="Masukkan postitle">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Unit Kerja</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="unitkerja" value="<?php echo (set_value('unitkerja')) ? set_value('unitkerja') : $karyawan['UNITKERJA']; ?>" class="form-control" placeholder="Masukkan unitkerja">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Workloc</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="workloc" value="<?php echo (set_value('workloc')) ? set_value('workloc') : $karyawan['WORKLOC']; ?>" class="form-control" placeholder="Masukkan workloc">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">&nbsp;</label>
                                                    <div class="col-lg-10">
                                                        <div class="form-actions">
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                            <button type="reset" class="btn">Reset</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>