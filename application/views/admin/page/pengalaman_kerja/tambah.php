				<div class="container">
                    <h3>Tambah Data Pengalaman Kerja</h3>
                    
                    
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
                                            <form action="<?php echo site_url('admin/pengalaman_kerja/simpan'); ?>" method="POST" class="form-horizontal form-box">
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
                                                    <label class="col-lg-2 control-label">No_sk</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="no_sk" value="<?php echo (set_value('no_sk')) ? set_value('no_sk') : ''; ?>" class="form-control" placeholder="Masukkan no_sk">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Tgl_sk</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="tgl_sk" value="<?php echo (set_value('tgl_sk')) ? set_value('tgl_sk') : ''; ?>" class="form-control" placeholder="Masukkan tgl_sk">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Ma_tmt</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="ma_tmt" value="<?php echo (set_value('ma_tmt')) ? set_value('ma_tmt') : ''; ?>" class="form-control" placeholder="Masukkan ma_tmt">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Mkt_gol</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="mkt_gol" value="<?php echo (set_value('mkt_gol')) ? set_value('mkt_gol') : ''; ?>" class="form-control" placeholder="Masukkan mkt_gol">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Mkb_gol</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="mkb_gol" value="<?php echo (set_value('mkb_gol')) ? set_value('mkb_gol') : ''; ?>" class="form-control" placeholder="Masukkan mkb_gol">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Kode_update</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="kode_update" value="<?php echo (set_value('kode_update')) ? set_value('kode_update') : ''; ?>" class="form-control" placeholder="Masukkan kode_update">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Nm_jbt</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="nm_jbt" value="<?php echo (set_value('nm_jbt')) ? set_value('nm_jbt') : ''; ?>" class="form-control" placeholder="Masukkan nm_jbt">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Nm_pl</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="nm_pl" value="<?php echo (set_value('nm_pl')) ? set_value('nm_pl') : ''; ?>" class="form-control" placeholder="Masukkan nm_pl">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Nm_ru</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="nm_ru" value="<?php echo (set_value('nm_ru')) ? set_value('nm_ru') : ''; ?>" class="form-control" placeholder="Masukkan nm_ru">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Nm_si</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="nm_si" value="<?php echo (set_value('nm_si')) ? set_value('nm_si') : ''; ?>" class="form-control" placeholder="Masukkan nm_si">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Nm_bag</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="nm_bag" value="<?php echo (set_value('nm_bag')) ? set_value('nm_bag') : ''; ?>" class="form-control" placeholder="Masukkan nm_bag">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Nm_dep</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="nm_dep" value="<?php echo (set_value('nm_dep')) ? set_value('nm_dep') : ''; ?>" class="form-control" placeholder="Masukkan nm_dep">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Nm_kom</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="nm_kom" value="<?php echo (set_value('nm_kom')) ? set_value('nm_kom') : ''; ?>" class="form-control" placeholder="Masukkan nm_kom">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Nm_dir</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="nm_dir" value="<?php echo (set_value('nm_dir')) ? set_value('nm_dir') : ''; ?>" class="form-control" placeholder="Masukkan nm_dir">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Keterangan</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="keterangan" value="<?php echo (set_value('keterangan')) ? set_value('keterangan') : ''; ?>" class="form-control" placeholder="Masukkan keterangan">
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