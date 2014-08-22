				<div class="container">
                    <h3>Ubah Data Group</h3>
                    
                    
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
                                            <form action="<?php echo site_url('admin/group/ubah/'.$group['ID_GROUP']); ?>" method="POST" class="form-horizontal form-box">
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Level Group</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="level_group" value="<?php echo (set_value('level_group')) ? set_value('level_group') : $group['LEVEL_GROUP']; ?>" class="form-control" placeholder="Masukkan level group">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">Nama Group</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="nama_group" value="<?php echo (set_value('nama_group')) ? set_value('nama_group') : $group['NAMA_GROUP']; ?>" class="form-control" placeholder="Masukkan nama group">
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