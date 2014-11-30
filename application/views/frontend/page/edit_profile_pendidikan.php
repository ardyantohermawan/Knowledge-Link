        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple horizontal red">
                    <div class="grid-title no-border">
                        <h4>Ubah Data <span class="semi-bold">Pendidikan</span></h4>
                        <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="javascript:;" class="remove"></a> </div>
                    </div>
                    <div class="grid-body no-border">

                        <form class="form-no-horizontal-spacing" id="form-condensed" method="POST" action="<?php echo site_url('user/profile/ubah_pendidikan/'.$pendidikan['ID_pendidikan']) ?>"/> 
                            <div class="row-fluid column-seperation">
                                <div class="span6">
                                    <h4>Informasi</h4>            
                                    <div class="row-fluid">
                                        <div class="span5">
                                            <input name="education_level_no" id="education_level_no" type="text" class="span12" value="<?php echo (isset($pendidikan['EDUCATION_LEVEL_NO'])) ? $pendidikan['EDUCATION_LEVEL_NO'] : '' ; ?>" placeholder="No. Level Pendidikan" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="education_level_name" id="education_level_name" type="text" class="span12" value="<?php echo (isset($pendidikan['EDUCATION_LEVEL_NAME'])) ? $pendidikan['EDUCATION_LEVEL_NAME'] : '' ; ?>" placeholder="Nama Level" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span5">
                                            <input name="education_field_no" id="education_field_no" type="text" class="span12" value="<?php echo (isset($pendidikan['EDUCATION_FIELD_NO'])) ? $pendidikan['EDUCATION_FIELD_NO'] : '' ; ?>" placeholder="No. Bidang Pendidikan" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="education_field_name" id="education_field_name" type="text" class="span12" value="<?php echo (isset($pendidikan['EDUCATION_FIELD_NAME'])) ? $pendidikan['EDUCATION_FIELD_NAME'] : '' ; ?>" placeholder="Nama Bidang Pendidikan" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="location" id="location" type="text" class="span12" value="<?php echo (isset($pendidikan['LOCATION'])) ? $pendidikan['LOCATION'] : '' ; ?>" placeholder="Lokasi" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="start_year" id="start_year" type="text" class="span12" value="<?php echo (isset($pendidikan['START_YEAR'])) ? $pendidikan['START_YEAR'] : '' ; ?>" placeholder="Tahun Mulai" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="end_year" id="end_year" type="text" class="span12" value="<?php echo (isset($pendidikan['END_YEAR'])) ? $pendidikan['END_YEAR'] : '' ; ?>" placeholder="Tahun selesai" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="g_p_a" id="g_p_a" type="text" class="span12" value="<?php echo (isset($pendidikan['G_P_A'])) ? $pendidikan['G_P_A'] : '' ; ?>" placeholder="GPA" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="achievement" id="achievement" type="text" class="span12" value="<?php echo (isset($pendidikan['ACHIEVEMENT'])) ? $pendidikan['ACHIEVEMENT'] : '' ; ?>" placeholder="Penghargaan" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="remark" id="remark" type="text" class="span12" value="<?php echo (isset($pendidikan['REMARK'])) ? $pendidikan['REMARK'] : '' ; ?>" placeholder="Remark" />
                                        </div>
                                    </div>
                                    
                                </div>
                            
                            <div class="span6">
                                <h4>Informasi Tambahan</h4>
            
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="edu_institution_seq_no" id="edu_institution_seq_no" type="text" class="span12" value="<?php echo (isset($pendidikan['EDU_INSTITUTION_SEQ_NO'])) ? $pendidikan['EDU_INSTITUTION_SEQ_NO'] : '' ; ?>" placeholder="No Institusi" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="edu_institution_name" id="edu_institution_name" type="text" class="span12" value="<?php echo (isset($pendidikan['EDU_INSTITUTION_NAME'])) ? $pendidikan['EDU_INSTITUTION_NAME'] : '' ; ?>" placeholder="Nama Institusi" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="education_lvl_received" id="education_lvl_received" type="text" class="span12" value="<?php echo (isset($pendidikan['EDUCATION_LVL_RECEIVED'])) ? $pendidikan['EDUCATION_LVL_RECEIVED'] : '' ; ?>" placeholder="Level pendidikan" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="prefered_education" id="prefered_education" type="text" class="span12" value="<?php echo (isset($pendidikan['PREFERED_EDUCATION'])) ? $pendidikan['PREFERED_EDUCATION'] : '' ; ?>" placeholder="Prefered Education" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="rowversion" id="rowversion" type="text" class="span12" value="<?php echo (isset($pendidikan['ROWVERSION'])) ? $pendidikan['ROWVERSION'] : '' ; ?>" placeholder="Row Version" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="anik_baru" id="anik_baru" type="text" class="span12" value="<?php echo (isset($pendidikan['ANIK_BARU'])) ? $pendidikan['ANIK_BARU'] : '' ; ?>" placeholder="Anik Baru" />
                                    </div>
                                </div>
                            </div>
                          </div>
                            <div class="form-actions">
                                <div class="pull-right">
                                    <button class="btn btn-primary btn-cons" type="submit"><i class="icon-ok"></i> Simpan</button>
                                    <button class="btn btn-white btn-cons" type="reset">Batal</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>