				<div class="container">
                    <h3>Ubah Data Status</h3>
                    
                    
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
                                            <form action="<?php echo site_url('admin/private_message/ubah/'.$private_message['ID_Pesan']); ?>" method="POST" class="form-horizontal form-box">
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Pengirim</label>
                                                    <div class="col-lg-10">
                                                        <select name="pengirim" class="col-lg-12 select2">

                                                            <?php if (isset($karyawans)): ?>
                                                                <?php foreach ($karyawans as $karyawan): ?>
                                                                    
                                                            <option value="<?php echo $karyawan['ID_user'] ?>" <?php echo ($private_message['ID_Pengirim'] == $karyawan['ID_user']) ? 'selected' : ''; ?>><?php echo $karyawan['NIK']; ?> - <?php echo $karyawan['NAMA']; ?> : <?php echo $karyawan['POSTITLE'] ?></option>
                                                                <?php endforeach ?>
                                                            <?php endif ?>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Penerima</label>
                                                    <div class="col-lg-10">
                                                        <select name="penerima" class="col-lg-12 select2">

                                                            <?php if (isset($karyawans)): ?>
                                                                <?php foreach ($karyawans as $karyawan): ?>
                                                                    
                                                            <option value="<?php echo $karyawan['ID_user'] ?>" <?php echo ($private_message['ID_Penerima'] == $karyawan['ID_user']) ? 'selected' : ''; ?>><?php echo $karyawan['NIK']; ?> - <?php echo $karyawan['NAMA']; ?> : <?php echo $karyawan['POSTITLE'] ?></option>
                                                                <?php endforeach ?>
                                                            <?php endif ?>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Subject</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="judul" value="<?php echo (set_value('judul')) ? set_value('judul') : $private_message['Subject']; ?>" class="form-control" placeholder="Masukkan judul">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Pesan</label>
                                                    <div class="col-lg-10">
                                                        <textarea name="pesan" class="form-control" placeholder="masukkan pesan"><?php echo (set_value('id_user')) ? set_value('id_user') : $private_message['Pesan']; ?></textarea>
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