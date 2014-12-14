				<div class="container">
                    <h3>Ubah Data Album</h3>
                    
                    
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
                                            <form action="<?php echo site_url('admin/album/ubah/'.$album['ID_User_Album']); ?>" method="POST" class="form-horizontal form-box" enctype="multipart/form-data" >
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Karyawan</label>
                                                    <div class="col-lg-10">
                                                        <select name="user" class="col-lg-12 select2">

                                                            <?php if (isset($karyawans)): ?>
                                                                <?php foreach ($karyawans as $karyawan): ?>
                                                                    
                                                            <option value="<?php echo $karyawan['ID_user'] ?>" <?php echo ($album['ID_user'] == $karyawan['ID_user']) ? 'selected' : ''; ?>><?php echo $karyawan['NIK']; ?> - <?php echo $karyawan['NAMA']; ?> : <?php echo $karyawan['POSTITLE'] ?></option>
                                                                <?php endforeach ?>
                                                            <?php endif ?>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Album</label>
                                                    <div class="col-lg-10">
                                                        <select name="album" class="col-lg-12 select2">

                                                            <option value="Cover" <?php echo ($album['Nama_Album'] == $karyawan['ID_user']) ? 'selected' : ''; ?>>Foto Sampul</option>
                                                            <option value="Profile" <?php echo ($album['Nama_Album'] == $karyawan['ID_user']) ? 'selected' : ''; ?>>Foto Profil</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label"> Foto</label>
                                                    <div class="col-lg-10">
                                                        <input type="file" name="file" >
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