				<div class="container">
                    <h3>Tambah Data Pendidikan</h3>
                    
                    
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
                                            <form action="<?php echo site_url('admin/pendidikan/simpan'); ?>" method="POST" class="form-horizontal form-box">
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
                                                    <label class="col-lg-2 control-label">Education_level_no</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="education_level_no" value="<?php echo (set_value('education_level_no')) ? set_value('education_level_no') : ''; ?>" class="form-control" placeholder="Masukkan education_level_no">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Education_level_name</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="education_level_name" value="<?php echo (set_value('education_level_name')) ? set_value('education_level_name') : ''; ?>" class="form-control" placeholder="Masukkan education_level_name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Education_field_no</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="education_field_no" value="<?php echo (set_value('education_field_no')) ? set_value('education_field_no') : ''; ?>" class="form-control" placeholder="Masukkan education_field_no">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Education_field_name</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="education_field_name" value="<?php echo (set_value('education_field_name')) ? set_value('education_field_name') : ''; ?>" class="form-control" placeholder="Masukkan education_field_name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Location</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="location" value="<?php echo (set_value('location')) ? set_value('location') : ''; ?>" class="form-control" placeholder="Masukkan location">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Start_year</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="start_year" value="<?php echo (set_value('start_year')) ? set_value('start_year') : ''; ?>" class="form-control" placeholder="Masukkan start_year">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">End_year</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="end_year" value="<?php echo (set_value('end_year')) ? set_value('end_year') : ''; ?>" class="form-control" placeholder="Masukkan end_year">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">G_p_a</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="g_p_a" value="<?php echo (set_value('g_p_a')) ? set_value('g_p_a') : ''; ?>" class="form-control" placeholder="Masukkan g_p_a">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Achievement</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="achievement" value="<?php echo (set_value('achievement')) ? set_value('achievement') : ''; ?>" class="form-control" placeholder="Masukkan achievement">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Remark</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="remark" value="<?php echo (set_value('remark')) ? set_value('remark') : ''; ?>" class="form-control" placeholder="Masukkan remark">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Edu_institution_seq_no</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="edu_institution_seq_no" value="<?php echo (set_value('edu_institution_seq_no')) ? set_value('edu_institution_seq_no') : ''; ?>" class="form-control" placeholder="Masukkan edu_institution_seq_no">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Edu_institution_name</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="edu_institution_name" value="<?php echo (set_value('edu_institution_name')) ? set_value('edu_institution_name') : ''; ?>" class="form-control" placeholder="Masukkan edu_institution_name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Education_lvl_received</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="education_lvl_received" value="<?php echo (set_value('education_lvl_received')) ? set_value('education_lvl_received') : ''; ?>" class="form-control" placeholder="Masukkan education_lvl_received">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Prefered_education</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="prefered_education" value="<?php echo (set_value('prefered_education')) ? set_value('prefered_education') : ''; ?>" class="form-control" placeholder="Masukkan prefered_education">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Rowversion</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="rowversion" value="<?php echo (set_value('rowversion')) ? set_value('rowversion') : ''; ?>" class="form-control" placeholder="Masukkan rowversion">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Anik_baru</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="anik_baru" value="<?php echo (set_value('anik_baru')) ? set_value('anik_baru') : ''; ?>" class="form-control" placeholder="Masukkan anik_baru">
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