				<div class="container">
                    <h3>Tambah Data Karyawan</h3>
                    
                    
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
                                            <form action="<?php echo site_url('admin/karyawan/simpan'); ?>" method="POST" class="form-horizontal form-box">
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">NIK</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="NIK" value="<?php echo (set_value('NIK')) ? set_value('NIK') : ''; ?>" class="form-control" placeholder="Masukkan NIK">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Kode_unit_kerja</label>
                                                    <div class="col-lg-10">
                                                        <select name="kode_unit_kerja" class="col-lg-12 select2">

                                                            <?php if (isset($unit_kerjas)): ?>
                                                                <?php foreach ($unit_kerjas as $unit_kerja): ?>
                                                                    
                                                            <option value="<?php echo $unit_kerja['KODE_UNIT_KERJA'] ?>" <?php echo (set_value('kode_unit_kerja') == $unit_kerja['KODE_UNIT_KERJA']) ? 'selected' : ''; ?>><?php echo $unit_kerja['KODE_UNIT_KERJA']; ?> (<?php echo $unit_kerja['CONTENT_UNIT_KERJA']; ?>)</option>
                                                                <?php endforeach ?>
                                                            <?php endif ?>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Nama</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="nama" value="<?php echo (set_value('nama')) ? set_value('nama') : ''; ?>" class="form-control" placeholder="Masukkan nama">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Poscode</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="poscode" value="<?php echo (set_value('poscode')) ? set_value('poscode') : ''; ?>" class="form-control" placeholder="Masukkan poscode">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Jabatan</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="jabatan" value="<?php echo (set_value('jabatan')) ? set_value('jabatan') : ''; ?>" class="form-control" placeholder="Masukkan jabatan">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Postitle</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="postitle" value="<?php echo (set_value('postitle')) ? set_value('postitle') : ''; ?>" class="form-control" placeholder="Masukkan postitle">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Unit Kerja</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="unitkerja" value="<?php echo (set_value('unitkerja')) ? set_value('unitkerja') : ''; ?>" class="form-control" placeholder="Masukkan unitkerja">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Workloc</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="workloc" value="<?php echo (set_value('workloc')) ? set_value('workloc') : ''; ?>" class="form-control" placeholder="Masukkan workloc">
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