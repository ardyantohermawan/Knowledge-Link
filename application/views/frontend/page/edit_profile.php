        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple horizontal purple">
                    <div class="grid-title no-border">
                        <h4>Profile <span class="semi-bold">Saya</span></h4>
                        <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="javascript:;" class="remove"></a> </div>
                    </div>
                    <div class="grid-body no-border">
                        <form class="form-no-horizontal-spacing" id="form-condensed" method="POST" action="<?php echo site_url('user/profile/simpan_profile') ?>"/> 
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
                                            <select name="jabatan" id="jabatan" class="select2 span12">
                                                <option value="1" />Male
                                                <option value="2" />Female
                                            </select>
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
                                    <button class="btn btn-white btn-cons" type="reset">Batal</button>
                                </div>
                            </div>
                        </form>
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
                                    <td>
                                        <a class="btn btn-warning" href="<?php echo site_url('user/pendidikan/edit/'.$pendidikan['ID_pendidikan']); ?>">Edit</a>
                                        <a class="btn btn-danger" href="<?php echo site_url('user/pendidikan/hapus/'.$pendidikan['ID_pendidikan']); ?>">Hapus</a>
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
                                            <input name="education_level_no" id="education_level_no" type="text" class="span12" placeholder="Education Level No" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="education_level_name" id="education_level_name" type="text" class="span12" placeholder="Education Level Name" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span5">
                                            <input name="education_field_no" id="education_field_no" type="text" class="span12" placeholder="Education Field No" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="education_field_name" id="education_field_name" type="text" class="span12" placeholder="Education Field Name" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="location" id="location" type="text" class="span12" placeholder="Location" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="start_year" id="start_year" type="text" class="span12" placeholder="start year" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="end_year" id="end_year" type="text" class="span12" placeholder="end year" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="g_p_a" id="g_p_a" type="text" class="span12" placeholder="GPA" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="achievement" id="achievement" type="text" class="span12" placeholder="Achievement" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="remark" id="remark" type="text" class="span12" placeholder="Remark" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="edu_institution_seq_no" id="edu_institution_seq_no" type="text" class="span12" placeholder="GPA" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="edu_institution_name" id="edu_institution_name" type="text" class="span12" placeholder="GPA" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="education_lvl_received" id="education_lvl_received" type="text" class="span12" placeholder="GPA" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="prefered_education" id="prefered_education" type="text" class="span12" placeholder="Occupation" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="rowversion" id="rowversion" type="text" class="span12" placeholder="email@address.com" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="anik_baru" id="anik_baru" type="text" class="span12" placeholder="email@address.com" />
                                        </div>
                                    </div>
                                </div>
                            
                            <div class="span6">
                                <h4>Informasi Tambahan</h4>
            
                                <div class="row-fluid">
                                    <div class="span12">
                                        <input name="form3Address" id="form3Address" type="text" class="span12" placeholder="Address" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span6">
                                        <input name="form3City" id="form3City" type="text" class="span12" placeholder="City" />
                                    </div>
                                    <div class="span6">
                                        <input name="form3State" id="form3State" type="text" class="span12" placeholder="State" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span8">
                                        <input name="form3Country" id="form3Country" type="text" class="span12" placeholder="Country" />
                                    </div>
                                    <div class="span4">
                                        <input name="form3PostalCode" id="form3PostalCode" type="text" class="span12" placeholder="Postal Code" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span4">
                                        <input name="form3TeleCode" id="form3TeleCode" type="text" class="span12" placeholder="+94" />
                                    </div>
                                    <div class="span8">
                                        <input name="form3TeleNo" id="form3TeleNo" type="text" class="span12" placeholder="Phone Number" />
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
                                        No_sk
                                    </th>
                                    <th>
                                        Mkt_gol
                                    </th>
                                    <th>
                                        Nm_jbt
                                    </th>
                                    <th>
                                        Nm_pl
                                    </th>
                                    <th>
                                        Nm_bag
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
                                    <td>
                                        <a class="btn btn-warning" href="<?php echo site_url('admin/pengalaman_kerja/edit/'.$pengalaman_kerja['ID_pengalaman_kerja']); ?>">Edit</a>
                                        <a class="btn btn-danger" href="<?php echo site_url('admin/pengalaman_kerja/hapus/'.$pengalaman_kerja['ID_pengalaman_kerja']); ?>">Hapus</a>
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
                                            <input name="no_sk" id="no_sk" type="text" class="span12" placeholder="Last Name" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="tgl_sk" id="tgl_sk" type="text" class="span12" placeholder="Last Name" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="ma_tmt" id="ma_tmt" type="text" class="span12" placeholder="Last Name" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="mkt_gol" id="mkt_gol" type="text" class="span12" placeholder="Last Name" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="mkb_gol" id="mkb_gol" type="text" class="span12" placeholder="Last Name" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="kode_update" id="kode_update" type="text" class="span12" placeholder="Last Name" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="nm_jbt" id="nm_jbt" type="text" class="span12" placeholder="Last Name" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="nm_pl" id="nm_pl" type="text" class="span12" placeholder="Last Name" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="nm_ru" id="nm_ru" type="text" class="span12" placeholder="Last Name" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="nm_si" id="nm_si" type="text" class="span12" placeholder="Last Name" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="nm_bag" id="nm_bag" type="text" class="span12" placeholder="Last Name" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="nm_dep" id="nm_dep" type="text" class="span12" placeholder="Last Name" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="nm_kom" id="nm_kom" type="text" class="span12" placeholder="Last Name" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="nm_dir" id="nm_dir" type="text" class="span12" placeholder="Last Name" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="keterangan" id="keterangan" type="text" class="span12" placeholder="Last Name" />
                                        </div>
                                    </div>
                                </div>
                            
                            <div class="span6">
                                <h4>Informasi Tambahan</h4>
            
                                <div class="row-fluid">
                                    <div class="span12">
                                        <input name="form3Address" id="form3Address" type="text" class="span12" placeholder="Address" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span6">
                                        <input name="form3City" id="form3City" type="text" class="span12" placeholder="City" />
                                    </div>
                                    <div class="span6">
                                        <input name="form3State" id="form3State" type="text" class="span12" placeholder="State" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span8">
                                        <input name="form3Country" id="form3Country" type="text" class="span12" placeholder="Country" />
                                    </div>
                                    <div class="span4">
                                        <input name="form3PostalCode" id="form3PostalCode" type="text" class="span12" placeholder="Postal Code" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span4">
                                        <input name="form3TeleCode" id="form3TeleCode" type="text" class="span12" placeholder="+94" />
                                    </div>
                                    <div class="span8">
                                        <input name="form3TeleNo" id="form3TeleNo" type="text" class="span12" placeholder="Phone Number" />
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
                                    <td><?php echo $training['START_DATE']; ?></td>
                                    <td><?php echo $training['END_DATE']; ?></td>
                                    <td><?php echo $training['TEMPAT']; ?></td>
                                    <td><?php echo $training['PENYELENGGARA']; ?></td>
                                    <td>
                                        <a class="btn btn-warning" href="<?php echo site_url('admin/training/edit/'.$training['ID_training']); ?>">Edit</a>
                                        <a class="btn btn-danger" href="<?php echo site_url('admin/training/hapus/'.$training['ID_training']); ?>">Hapus</a>
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
                                            <input name="nama" id="nama" type="text" class="span12" placeholder="nama" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="poscode" id="poscode" type="text" class="span12" placeholder="poscode" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="jabatan" id="jabatan" type="text" class="span12" placeholder="jabatan" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="postitle" id="postitle" type="text" class="span12" placeholder="postitle" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="unitkerja" id="unitkerja" type="text" class="span12" placeholder="unitkerja" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="workloc" id="workloc" type="text" class="span12" placeholder="workloc" />
                                        </div>
                                    </div>
                                </div>
                            
                            <div class="span6">
                                <h4>Informasi Tambahan</h4>
            
                                <div class="row-fluid">
                                    <div class="span12">
                                        <input name="form3Address" id="form3Address" type="text" class="span12" placeholder="Address" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span6">
                                        <input name="form3City" id="form3City" type="text" class="span12" placeholder="City" />
                                    </div>
                                    <div class="span6">
                                        <input name="form3State" id="form3State" type="text" class="span12" placeholder="State" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span8">
                                        <input name="form3Country" id="form3Country" type="text" class="span12" placeholder="Country" />
                                    </div>
                                    <div class="span4">
                                        <input name="form3PostalCode" id="form3PostalCode" type="text" class="span12" placeholder="Postal Code" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span4">
                                        <input name="form3TeleCode" id="form3TeleCode" type="text" class="span12" placeholder="+94" />
                                    </div>
                                    <div class="span8">
                                        <input name="form3TeleNo" id="form3TeleNo" type="text" class="span12" placeholder="Phone Number" />
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

        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple horizontal purple">
                    <div class="grid-title no-border">
                        <h4>Minat <span class="semi-bold">Saya</span></h4>
                        <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="javascript:;" class="remove"></a> </div>
                    </div>
                    <div class="grid-body no-border">
                        <form class="form-no-horizontal-spacing" id="form-condensed" method="POST" action="<?php echo site_url('user/profile/simpan_profile') ?>"/> 
                            <div class="row-fluid">
                                    
                            <?php if (isset($groups)): ?>
                                <?php foreach ($groups as $row): ?>
                                
                                <div class="span5">
                                    <h4><?php echo ucfirst(strtolower($row['NAMA_GROUP'])); ?></h4>            
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <div class="row-fluid">
                                            <?php if (isset($child_groups)): ?>
                                                <?php foreach ($child_groups as $rowChild): ?>
                                                    <?php if ($rowChild['PARENT_ID_GROUP'] == $row['ID_GROUP']): ?>
                                                <div class="checkbox check-primary">
                                                    <input id="checkbox3" type="checkbox" value="<?php echo $rowChild['ID_GROUP']; ?>" />
                                                    <label for="checkbox3"><?php echo ucfirst(strtolower($rowChild['NAMA_GROUP'])); ?></label>
                                                </div>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            <?php endif ?>
                                                
                                            </div>            

                                        </div>
                                    </div>
                                </div>
                                
                                <?php endforeach ?>
                            <?php endif ?>

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