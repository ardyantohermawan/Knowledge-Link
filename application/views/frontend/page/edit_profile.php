        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple horizontal purple">
                    <div class="grid-title no-border">
                        <h4>Profile <span class="semi-bold">Saya</span></h4>
                        <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="javascript:;" class="remove"></a> </div>
                    </div>
                    <div class="grid-body no-border">
                        <form class="form-no-horizontal-spacing" id="form-condensed" method="POST" action="<?php echo site_url('user/profile/simpan_profile/'.$profile['NIK']) ?>"/> 
                            <div class="row-fluid column-seperation">
                                <div class="span6">
                                    <h4>Biodata</h4>            
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="nama" id="nama" type="text" class="span12" placeholder="Nama Lengkap" value="<?php echo (isset($profile['NAMA'])) ? $profile['NAMA'] : set_value('nama'); ?>"/>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="NIK" id="NIK" type="text" class="span12" placeholder="NIK" value="<?php echo (isset($profile['NIK'])) ? $profile['NIK'] : set_value('NIK'); ?>"/>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="span6">
                                    <h4>Jabatan</h4>
                
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <select name="kode_unit_kerja" id="kode_unit_kerja" class="select2 span12">
                                                <?php if (isset($unit_kerjas)): ?>
                                                    <?php foreach ($unit_kerjas as $unit_kerja): ?>
                                                        
                                                <option value="<?php echo $unit_kerja['KODE_UNIT_KERJA'] ?>" <?php echo (set_value('kode_unit_kerja') == $unit_kerja['KODE_UNIT_KERJA']) ? 'selected' : ''; ?>><?php echo $unit_kerja['KODE_UNIT_KERJA']; ?> (<?php echo $unit_kerja['CONTENT_UNIT_KERJA']; ?>)</option>
                                                    <?php endforeach ?>
                                                <?php endif ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <input name="poscode" id="poscode" type="text" class="span12" placeholder="Poscode" value="<?php echo (isset($profile['POSCODE'])) ? $profile['POSCODE'] : set_value('poscode'); ?>"/>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <input type="text" name="jabatan" value="<?php echo (isset($profile['JABATAN'])) ? $profile['JABATAN'] : set_value('jabatan'); ?>" class="form-control" placeholder="Masukkan jabatan">
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <input name="postitle" id="postitle" type="text" class="span12" placeholder="Postitle" value="<?php echo (isset($profile['POSTITLE'])) ? $profile['POSTITLE'] : set_value('postitle'); ?>"/>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <input name="unitkerja" id="unitkerja" type="text" class="span12" placeholder="Unit kerja" value="<?php echo (isset($profile['UNITKERJA'])) ? $profile['UNITKERJA'] : set_value('unitkerja'); ?>"/>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <input name="workloc" id="workloc" type="text" class="span12" placeholder="Workloc" value="<?php echo (isset($profile['WORKLOC'])) ? $profile['WORKLOC'] : set_value('workloc'); ?>"/>
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

        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple horizontal purple">
                    <div class="grid-title no-border">
                        <h4>Foto <span class="semi-bold">Saya</span></h4>
                        <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="javascript:;" class="remove"></a> </div>
                    </div>
                    <div class="grid-body no-border">
                        <div class="row-fluid column-seperation">
                            <div class="span6">
                                <form class="form-no-horizontal-spacing" id="form-condensed" method="POST" action="<?php echo site_url('user/profile/simpanFotoProfile/'.$profile['ID_user']) ?>" enctype="multipart/form-data" /> 
                                <h4><span class="semi-bold">Profile</span></h4>            
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input type="file" id="file" name="file">
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

                            <div class="span6">
                                <form class="form-no-horizontal-spacing" id="form-condensed" method="POST" action="<?php echo site_url('user/profile/simpanFotoCover/'.$profile['ID_user']) ?>" enctype="multipart/form-data" /> 
                                <h4><span class="semi-bold">Cover</span></h4>            
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input type="file" id="file" name="file">
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
            </div>
        </div>

        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple horizontal red">
                    <div class="grid-title no-border">
                        <h4>Riwayat <span class="semi-bold">Pendidikan</span></h4>
                        <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="javascript:;" class="remove"></a> </div>
                    </div>
                    <div class="grid-body no-border">
                        <table class="table table-hover no-more-tables table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        Jenjang
                                    </th>
                                    <th>
                                        Institusi
                                    </th>
                                    <th>
                                        Lokasi
                                    </th>
                                    <th>
                                        Mulai
                                    </th>
                                    <th>
                                        Selesai
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($pendidikans)) { ?>
                                <?php foreach ($pendidikans as $pendidikan) { ?>
                                <tr>
                                    <td><?php echo $pendidikan['EDUCATION_LEVEL_NAME']; ?></td>
                                    <td><?php echo $pendidikan['EDUCATION_FIELD_NAME']; ?></td>
                                    <td><?php echo $pendidikan['LOCATION']; ?></td>
                                    <td><?php echo $pendidikan['START_YEAR']; ?></td>
                                    <td><?php echo $pendidikan['END_YEAR']; ?></td>
                                    <td width="12%">
                                        <a class="btn btn-warning" href="<?php echo site_url('user/profile/edit_pendidikan/'.$pendidikan['ID_pendidikan']); ?>"><i class="icon icon-pencil"></i></a>
                                        <a class="btn btn-danger" href="<?php echo site_url('user/profile/hapus_pendidikan/'.$pendidikan['ID_pendidikan']); ?>"><i class="icon icon-trash"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="grid-body no-border">

                        <form class="form-no-horizontal-spacing" id="form-condensed" method="POST" action="<?php echo site_url('user/profile/simpan_pendidikan') ?>"/> 
                            <div class="row-fluid column-seperation">
                                <div class="span6">
                                    <h4>Informasi</h4>            
                                    <div class="row-fluid">
                                        <div class="span5">
                                            <input name="education_level_no" id="education_level_no" type="text" class="span12" value="<?php echo set_value('education_level_no') ?>" placeholder="No. Level Pendidikan" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="education_level_name" id="education_level_name" type="text" class="span12" value="<?php echo set_value('education_level_name') ?>" placeholder="Nama Level" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span5">
                                            <input name="education_field_no" id="education_field_no" type="text" class="span12" value="<?php echo set_value('education_field_no') ?>" placeholder="No. Bidang Pendidikan" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="education_field_name" id="education_field_name" type="text" class="span12" value="<?php echo set_value('education_field_name') ?>" placeholder="Nama Bidang Pendidikan" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="location" id="location" type="text" class="span12" value="<?php echo set_value('location') ?>" placeholder="Lokasi" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="start_year" id="start_year" type="text" class="span12" value="<?php echo set_value('start_year') ?>" placeholder="Tahun Mulai" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="end_year" id="end_year" type="text" class="span12" value="<?php echo set_value('end_year') ?>" placeholder="Tahun selesai" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="g_p_a" id="g_p_a" type="text" class="span12" value="<?php echo set_value('g_p_a') ?>" placeholder="GPA" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="achievement" id="achievement" type="text" class="span12" value="<?php echo set_value('achievement') ?>" placeholder="Penghargaan" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="remark" id="remark" type="text" class="span12" value="<?php echo set_value('remark') ?>" placeholder="Remark" />
                                        </div>
                                    </div>
                                    
                                </div>
                            
                            <div class="span6">
                                <h4>Informasi Tambahan</h4>
            
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="edu_institution_seq_no" id="edu_institution_seq_no" type="text" class="span12" value="<?php echo set_value('edu_institution_seq_no') ?>" placeholder="No Institusi" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="edu_institution_name" id="edu_institution_name" type="text" class="span12" value="<?php echo set_value('edu_institution_name') ?>" placeholder="Nama Institusi" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="education_lvl_received" id="education_lvl_received" type="text" class="span12" value="<?php echo set_value('education_lvl_received') ?>" placeholder="Level pendidikan" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="prefered_education" id="prefered_education" type="text" class="span12" value="<?php echo set_value('prefered_education') ?>" placeholder="Prefered Education" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="rowversion" id="rowversion" type="text" class="span12" value="<?php echo set_value('rowversion') ?>" placeholder="Row Version" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="anik_baru" id="anik_baru" type="text" class="span12" value="<?php echo set_value('anik_baru') ?>" placeholder="Anik Baru" />
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

        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple horizontal green">
                    <div class="grid-title no-border">
                        <h4>Pengalaman <span class="semi-bold">Kerja</span></h4>
                        <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="javascript:;" class="remove"></a> </div>
                    </div>
                    <div class="grid-body no-border">
                        <table class="table table-hover no-more-tables table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        No. SK
                                    </th>
                                    <th>
                                        GOL
                                    </th>
                                    <th>
                                        Jabatan
                                    </th>
                                    <th>
                                        Nm_pl
                                    </th>
                                    <th>
                                        Bagian
                                    </th>
                                    <th>
                                        Keterangan
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($pengalaman_kerjas)) { ?>
                                <?php foreach ($pengalaman_kerjas as $pengalaman_kerja) { ?>
                                <tr>
                                    <td><?php echo $pengalaman_kerja['NO_SK']; ?></td>
                                    <td><?php echo $pengalaman_kerja['MKT_GOL']; ?></td>
                                    <td><?php echo $pengalaman_kerja['NM_JBT']; ?></td>
                                    <td><?php echo $pengalaman_kerja['NM_PL']; ?></td>
                                    <td><?php echo $pengalaman_kerja['NM_BAG']; ?></td>
                                    <td><?php echo $pengalaman_kerja['KETERANGAN']; ?></td>
                                    <td width="12%">
                                        <a class="btn btn-warning" href="<?php echo site_url('user/profile/edit_pengalaman_kerja/'.$pengalaman_kerja['ID_pengalaman_kerja']); ?>"><i class="icon icon-pencil"></i></a>
                                        <a class="btn btn-danger" href="<?php echo site_url('user/profile/hapus_pengalaman_kerja/'.$pengalaman_kerja['ID_pengalaman_kerja']); ?>"><i class="icon icon-trash"></i></a>
                                    </td>
                                </tr>
                                
                                <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="grid-body no-border">
                        <form class="form-no-horizontal-spacing" id="form-condensed"  method="POST" action="<?php echo site_url('user/profile/simpan_pengalaman_kerja') ?>"/> 
                            <div class="row-fluid column-seperation">
                                <div class="span6">
                                    <h4>Informasi</h4>            
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="no_sk" id="no_sk" type="text" value="<?php echo set_value('no_sk'); ?>" class="span12" placeholder="No. SK" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="tgl_sk" id="tgl_sk" type="text" class="span12" value="<?php echo set_value('tgl_sk'); ?>" placeholder="Tanggal SK" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="ma_tmt" id="ma_tmt" type="text" class="span12" value="<?php echo set_value('ma_tmt'); ?>" placeholder="TMT" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="mkt_gol" id="mkt_gol" type="text" class="span12" value="<?php echo set_value('mkt_gol'); ?>" placeholder="MKT GOL" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="mkb_gol" id="mkb_gol" type="text" class="span12" value="<?php echo set_value('mkb_gol'); ?>" placeholder="MKB GOL" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="kode_update" id="kode_update" type="text" class="span12" value="<?php echo set_value('kode_update'); ?>" placeholder="Kode Update" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="nm_jbt" id="nm_jbt" type="text" class="span12" value="<?php echo set_value('nm_jbt'); ?>" placeholder="Nama jabatan" />
                                        </div>
                                    </div>
                                    
                                </div>
                            
                            <div class="span6">
                                <h4>Informasi Tambahan</h4>
            
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="nm_pl" id="nm_pl" type="text" class="span12" value="<?php echo set_value('nm_pl'); ?>" placeholder="Nama pl" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="nm_ru" id="nm_ru" type="text" class="span12" value="<?php echo set_value('nm_ru'); ?>" placeholder="Nama ru" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="nm_si" id="nm_si" type="text" class="span12" value="<?php echo set_value('nm_si'); ?>" placeholder="Nama si" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="nm_bag" id="nm_bag" type="text" class="span12" value="<?php echo set_value('nm_bag'); ?>" placeholder="Nama bag" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="nm_dep" id="nm_dep" type="text" class="span12" value="<?php echo set_value('nm_dep'); ?>" placeholder="Nama dep" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="nm_kom" id="nm_kom" type="text" class="span12" value="<?php echo set_value('nm_kom'); ?>" placeholder="Nama kom" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="nm_dir" id="nm_dir" type="text" class="span12" value="<?php echo set_value('nm_dir'); ?>" placeholder="Nama dir" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="keterangan" id="keterangan" type="text" class="span12" value="<?php echo set_value('keterangan'); ?>" placeholder="keterangan" />
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

        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple horizontal yellow">
                    <div class="grid-title">
                        <h4>Pelatihan <span class="semi-bold">Saya</span></h4>
                        <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="javascript:;" class="remove"></a> </div>
                    </div>
                    <div class="grid-body no-border">
                        <table class="table table-hover no-more-tables table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        Nama
                                    </th>
                                    <th>
                                        Topik
                                    </th>
                                    <th>
                                        Mulai
                                    </th>
                                    <th>
                                        Selesai
                                    </th>
                                    <th>
                                        Tempat
                                    </th>
                                    <th>
                                        Penyelenggara
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($trainings)) { ?>
                                <?php foreach ($trainings as $training) { ?>
                                <tr>
                                    <td><?php echo $training['NAMA_TRAINING']; ?></td>
                                    <td><?php echo $training['TOPIK']; ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($training['START_DATE'])); ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($training['END_DATE'])); ?></td>
                                    <td><?php echo $training['TEMPAT']; ?></td>
                                    <td><?php echo $training['PENYELENGGARA']; ?></td>
                                    <td width="12%">
                                        <a class="btn btn-warning" href="<?php echo site_url('user/profile/edit_training/'.$training['ID_training']); ?>"><i class="icon icon-pencil"></i></a>
                                        <a class="btn btn-danger" href="<?php echo site_url('user/profile/hapus_training/'.$training['ID_training']); ?>"><i class="icon icon-trash"></i></a>
                                    </td>
                                </tr>
                                
                                <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="grid-body no-border">
                        <form class="form-no-horizontal-spacing" id="form-condensed"  method="POST" action="<?php echo site_url('user/profile/simpan_training') ?>"/> 
                            <div class="row-fluid column-seperation">
                                <div class="span6">
                                    <h4>Informasi</h4>            
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="training_event_id" id="training_event_id" type="text" class="span12" placeholder="training_event_id" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="course_id" id="course_id" type="text" class="span12" placeholder="course_id" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="nama_training" id="nama_training" type="text" class="span12" placeholder="nama_training" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="topik" id="topik" type="text" class="span12" placeholder="topik" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="durasi" id="durasi" type="text" class="span12" placeholder="durasi" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="start_date" id="start_date" type="text" class="span12" placeholder="start_date" />
                                        </div>
                                    </div>
                                </div>
                            
                            <div class="span6">
                                <h4>Informasi Tambahan</h4>
            
                                <div class="row-fluid">
                                    <div class="span12">
                                        <input name="end_date" id="end_date" type="text" class="span12" placeholder="end_date" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span6">
                                        <input name="tempat" id="tempat" type="text" class="span12" placeholder="tempat" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span6">
                                        <input name="penyelenggara" id="penyelenggara" type="text" class="span12" placeholder="penyelenggara" />
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

        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple horizontal purple">
                    <div class="grid-title no-border">
                        <h4>Minat <span class="semi-bold">Saya</span></h4>
                        <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="javascript:;" class="remove"></a> </div>
                    </div>
                    <div class="grid-body no-border">
                        <form class="form-no-horizontal-spacing" id="form-condensed" method="POST" action="<?php echo site_url('user/profile/simpan_minat/'.$profile['ID_user']) ?>"/> 
                            <div class="row-fluid">
                                    
                                <div class="span6">
                            <?php if (isset($groups)): ?>
                                <?php foreach ($groups as $row): ?>
                                
                                    <h4><?php echo ucfirst(strtolower($row['NAMA_GROUP'])); ?></h4>            
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <div class="row-fluid">
                                            <?php if (isset($child_groups)): ?>
                                                <?php foreach ($child_groups as $rowChild): ?>
                                                    <?php if ($rowChild['PARENT_ID_GROUP'] == $row['ID_GROUP']): ?>
                                                <div class="checkbox">
                                                    <input id="checkbox<?php echo $rowChild['ID_GROUP']; ?>" name="minat[]" type="checkbox" value="<?php echo $rowChild['ID_GROUP']; ?>" <?php echo (in_array($rowChild['ID_GROUP'], $minats)) ? 'checked' : '' ?>/>
                                                    <label for="checkbox<?php echo $rowChild['ID_GROUP']; ?>"><?php echo ucfirst(strtolower($rowChild['NAMA_GROUP'])); ?></label>
                                                </div>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            <?php endif ?>
                                                
                                            </div>            

                                        </div>
                                    </div>
                                
                                <?php endforeach ?>
                            <?php endif ?>
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