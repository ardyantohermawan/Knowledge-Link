				<div class="container">
                    <h3>Tambah Data User</h3>
                    
                    
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
                                            <form action="<?php echo site_url('admin/user/simpan'); ?>" method="POST" enctype="multipart/form-data" class="form-horizontal form-box">
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">NIK</label>
                                                    <div class="col-lg-10">
                                                        <select name="NIK" class="col-lg-12 select2">

                                                            <?php if (isset($karyawans)): ?>
                                                                <?php foreach ($karyawans as $karyawan): ?>
                                                                    
                                                            <option value="<?php echo $karyawan['NIK'] ?>" <?php echo (set_value('NIK') == $karyawan['NIK']) ? 'selected' : ''; ?>><?php echo $karyawan['NIK']; ?> - <?php echo $karyawan['NAMA']; ?> : <?php echo $karyawan['POSTITLE'] ?> <?php echo ($karyawan['TRAINING_EVENT_ID'] != '') ? '(Sertifikasi: '.$karyawan['NAMA_TRAINING'].')' : ''; ?></option>
                                                                <?php endforeach ?>
                                                            <?php endif ?>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Kode Unit Kerja</label>
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
                                                    <label class="col-lg-2 control-label">Group</label>
                                                    <div class="col-lg-10">
                                                        <select name="id_group" class="col-lg-12 select2">

                                                            <?php if (isset($groups)): ?>
                                                                <?php foreach ($groups as $group): ?>
                                                                    
                                                            <option value="<?php echo $group['ID_GROUP'] ?>" <?php echo (set_value('id_group') == $group['ID_GROUP']) ? 'selected' : ''; ?>><?php echo $group['NAMA_GROUP']; ?> (level  <?php echo $group['LEVEL_GROUP']; ?>)</option>
                                                                <?php endforeach ?>
                                                            <?php endif ?>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Akses</label>
                                                    <div class="col-lg-10">
                                                        <select name="id_akses" class="col-lg-12 select2">

                                                            <?php if (isset($aksess)): ?>
                                                                <?php foreach ($aksess as $akses): ?>
                                                                    
                                                            <option value="<?php echo $akses['ID_AKSES'] ?>" <?php echo (set_value('id_akses') == $akses['ID_AKSES']) ? 'selected' : ''; ?>><?php echo $akses['LEVEL_AKSES']; ?></option>
                                                                <?php endforeach ?>
                                                            <?php endif ?>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Username</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="username" value="<?php echo (set_value('username')) ? set_value('username') : ''; ?>" class="form-control" placeholder="Masukkan username">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Password</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="password_user" value="<?php echo (set_value('password_user')) ? set_value('password_user') : ''; ?>" class="form-control" placeholder="Masukkan password_user">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Foto</label>
                                                    <div class="col-lg-10">
                                                    <input type="file" id="file" name="file">
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