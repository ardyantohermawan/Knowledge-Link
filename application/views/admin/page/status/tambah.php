				<div class="container">
                    <h3>Tambah Data Status</h3>
                    
                    
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
                                            <form action="<?php echo site_url('admin/status/simpan'); ?>" method="POST" class="form-horizontal form-box">
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">ID User</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="id_user" value="<?php echo (set_value('id_user')) ? set_value('id_user') : ''; ?>" class="form-control" placeholder="Masukkan ID_user">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label">User Status</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="user_status" value="<?php echo (set_value('user_status')) ? set_value('user_status') : ''; ?>" class="form-control" placeholder="Masukkan User_status">
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