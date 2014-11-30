				<div class="container">
                    <h3>Ubah Data Training</h3>
                    
                    
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
                                            <form action="<?php echo site_url('admin/sertifikasi/ubah/'.$sertifikasi['ID_sertifikasi']); ?>" method="POST" class="form-horizontal form-box">
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">NIK</label>
                                                    <div class="col-lg-10">
                                                        <select name="NIK" class="col-lg-12 select2">

                                                            <?php if (isset($karyawans)): ?>
                                                                <?php foreach ($karyawans as $karyawan): ?>
                                                                    
                                                            <option value="<?php echo $karyawan['NIK'] ?>" <?php echo (set_value('NIK') == $karyawan['NIK']) ? 'selected' : ''; ?>><?php echo $karyawan['NIK']; ?> (<?php echo $karyawan['NAMA']; ?>)</option>
                                                                <?php endforeach ?>
                                                            <?php endif ?>

                                                        </select>
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
                                                    <label class="col-lg-2 control-label">Training_event_id</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="training_event_id" value="<?php echo (set_value('training_event_id')) ? set_value('training_event_id') : $sertifikasi['TRAINING_EVENT_ID']; ?>" class="form-control" placeholder="Masukkan training_event_id">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Course_id</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="course_id" value="<?php echo (set_value('course_id')) ? set_value('course_id') : $sertifikasi['COURSE_ID']; ?>" class="form-control" placeholder="Masukkan course_id">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Nama_training</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="nama_training" value="<?php echo (set_value('nama_training')) ? set_value('nama_training') : $sertifikasi['NAMA_TRAINING']; ?>" class="form-control" placeholder="Masukkan nama_training">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Topik</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="topik" value="<?php echo (set_value('topik')) ? set_value('topik') : $sertifikasi['TOPIK']; ?>" class="form-control" placeholder="Masukkan topik">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Durasi</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="durasi" value="<?php echo (set_value('durasi')) ? set_value('durasi') : $sertifikasi['DURASI']; ?>" class="form-control" placeholder="Masukkan durasi">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Start_date</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="start_date" value="<?php echo (set_value('start_date')) ? set_value('start_date') : $sertifikasi['START_DATE']; ?>" class="form-control" placeholder="Masukkan start_date">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">End_date</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="end_date" value="<?php echo (set_value('end_date')) ? set_value('end_date') : $sertifikasi['END_DATE']; ?>" class="form-control" placeholder="Masukkan end_date">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Tempat</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="tempat" value="<?php echo (set_value('tempat')) ? set_value('tempat') : $sertifikasi['TEMPAT']; ?>" class="form-control" placeholder="Masukkan tempat">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Penyelenggara</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="penyelenggara" value="<?php echo (set_value('penyelenggara')) ? set_value('penyelenggara') : $sertifikasi['PENYELENGGARA']; ?>" class="form-control" placeholder="Masukkan penyelenggara">
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