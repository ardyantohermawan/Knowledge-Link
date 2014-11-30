		<div class="row-fluid">
            <div class="span12">
                <div class="grid simple horizontal yellow">
                    <div class="grid-title">
                        <h4>Pelatihan <span class="semi-bold">Saya</span></h4>
                        <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="javascript:;" class="remove"></a> </div>
                    </div>
                    <div class="grid-body no-border">
                        <form class="form-no-horizontal-spacing" id="form-condensed"  method="POST" action="<?php echo site_url('user/profile/ubah_training/'.$training['ID_training']) ?>"/> 
                            <div class="row-fluid column-seperation">
                                <div class="span6">
                                    <h4>Informasi</h4>            
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="training_event_id" id="training_event_id" type="text" class="span12" value="<?php echo (isset($training['TRAINING_EVENT_ID'])) ? $training['TRAINING_EVENT_ID'] : ''; ?>" placeholder="training_event_id" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="course_id" id="course_id" type="text" class="span12" value="<?php echo (isset($training['COURSE_ID'])) ? $training['COURSE_ID'] : ''; ?>" placeholder="course_id" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="nama_training" id="nama_training" type="text" class="span12" value="<?php echo (isset($training['NAMA_TRAINING'])) ? $training['NAMA_TRAINING'] : ''; ?>" placeholder="nama_training" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="topik" id="topik" type="text" class="span12" value="<?php echo (isset($training['TOPIK'])) ? $training['TOPIK'] : ''; ?>" placeholder="topik" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="durasi" id="durasi" type="text" class="span12" value="<?php echo (isset($training['DURASI'])) ? $training['DURASI'] : ''; ?>" placeholder="durasi" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="start_date" id="start_date" type="text" class="span12" value="<?php echo (isset($training['START_DATE'])) ? $training['START_DATE'] : ''; ?>" placeholder="start_date" />
                                        </div>
                                    </div>
                                </div>
                            
                            <div class="span6">
                                <h4>Informasi Tambahan</h4>
            
                                <div class="row-fluid">
                                    <div class="span12">
                                        <input name="end_date" id="end_date" type="text" class="span12" value="<?php echo (isset($training['END_DATE'])) ? $training['END_DATE'] : ''; ?>" placeholder="end_date" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span6">
                                        <input name="tempat" id="tempat" type="text" class="span12" value="<?php echo (isset($training['TEMPAT'])) ? $training['TEMPAT'] : ''; ?>" placeholder="tempat" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span6">
                                        <input name="penyelenggara" id="penyelenggara" type="text" class="span12" value="<?php echo (isset($training['PENYELENGGARA'])) ? $training['PENYELENGGARA'] : ''; ?>" placeholder="penyelenggara" />
                                    </div>
                                </div>
                            </div>
                          </div>
                            <div class="form-actions">
                                <div class="pull-right">
                                    <button class="btn btn-primary btn-cons" type="submit"><i class="icon-ok"></i> Simpan</button>
                                    <button class="btn btn-white btn-cons" type="reset">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>