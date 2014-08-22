        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple horizontal purple">
                    <div class="grid-title no-border">
                        <h4>Profile <span class="semi-bold">Saya</span></h4>
                        <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="javascript:;" class="remove"></a> </div>
                    </div>
                    <div class="grid-body no-border">
                        <form class="form-no-horizontal-spacing" id="form-condensed" /> 
                            <div class="row-fluid column-seperation">
                                <div class="span6">
                                    <h4>Biodata</h4>            
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="karyawan_nama" id="karyawan_nama" type="text" class="span12" placeholder="Nama Lengkap" value="<?php echo (isset($profile['NAMA'])) ? $profile['NAMA'] : set_value('karyawan_nama'); ?>"/>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="karyawan_nik" id="karyawan_nik" type="text" class="span12" placeholder="NIK" value="<?php echo (isset($profile['NIK'])) ? $profile['NIK'] : set_value('karyawan_nik'); ?>"/>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="span6">
                                    <h4>Jabatan</h4>
                
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <select name="karyawan_kode_unit_kerja" id="karyawan_kode_unit_kerja" class="select2 span12">
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
                                            <input name="karyawan_poscode" id="karyawan_poscode" type="text" class="span12" placeholder="Poscode" value="<?php echo (isset($profile['POSCODE'])) ? $profile['POSCODE'] : set_value('karyawan_poscode'); ?>"/>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <select name="karyawan_jabatan" id="karyawan_jabatan" class="select2 span12">
                                                <option value="1" />Male
                                                <option value="2" />Female
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <input name="karyawan_postitle" id="karyawan_postitle" type="text" class="span12" placeholder="Postitle" value="<?php echo (isset($profile['POSTITLE'])) ? $profile['POSTITLE'] : set_value('karyawan_postitle'); ?>"/>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <input name="karyawan_unitkerja" id="karyawan_unitkerja" type="text" class="span12" placeholder="Unit kerja" value="<?php echo (isset($profile['UNITKERJA'])) ? $profile['UNITKERJA'] : set_value('karyawan_unitkerja'); ?>"/>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <input name="karyawan_workloc" id="karyawan_workloc" type="text" class="span12" placeholder="Workloc" value="<?php echo (isset($profile['WORKLOC'])) ? $profile['WORKLOC'] : set_value('karyawan_workloc'); ?>"/>
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

                        <form class="form-no-horizontal-spacing" id="form-condensed" /> 
                            <div class="row-fluid column-seperation">
                                <div class="span6">
                                    <h4>Informasi</h4>            
                                    <div class="row-fluid">
                                        <div class="span5">
                                            <input name="form3FirstName" id="form3FirstName" type="text" class="span12" placeholder="First Name" />
                                        </div>
                                        <div class="span6">
                                            <input name="form3LastName" id="form3LastName" type="text" class="span12" placeholder="Last Name" />
                                        </div>
                                    </div>
                                <div class="row-fluid">
                                    <div class="span5">
                                        <select name="form3Gender" id="form3Gender" class="select2 span12">
                                            <option value="1" />Male
                                            <option value="2" />Female
                                        </select>
                                    </div>
                                    <div class="span6">
                                        <input name="form3DateOfBirth" id="form3DateOfBirth" type="text" class="span12" placeholder="Date of Birth" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="form3Occupation" id="form3Occupation" type="text" class="span12" placeholder="Occupation" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span8">
                                        <div class="radio">
                                            <input id="male" type="radio" name="gender" value="male" checked="checked" />
                                            <label for="male">Male</label>
                                            <input id="female" type="radio" name="gender" value="female" />
                                            <label for="female">Female</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="form3Email" id="form3Email" type="text" class="span12" placeholder="email@address.com" />
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
                        <form class="form-no-horizontal-spacing" id="form-condensed" /> 
                            <div class="row-fluid column-seperation">
                                <div class="span6">
                                    <h4>Informasi</h4>            
                                    <div class="row-fluid">
                                        <div class="span5">
                                            <input name="form3FirstName" id="form3FirstName" type="text" class="span12" placeholder="First Name" />
                                        </div>
                                        <div class="span6">
                                            <input name="form3LastName" id="form3LastName" type="text" class="span12" placeholder="Last Name" />
                                        </div>
                                    </div>
                                <div class="row-fluid">
                                    <div class="span5">
                                        <select name="form3Gender" id="form3Gender" class="select2 span12">
                                            <option value="1" />Male
                                            <option value="2" />Female
                                        </select>
                                    </div>
                                    <div class="span6">
                                        <input name="form3DateOfBirth" id="form3DateOfBirth" type="text" class="span12" placeholder="Date of Birth" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="form3Occupation" id="form3Occupation" type="text" class="span12" placeholder="Occupation" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span8">
                                        <div class="radio">
                                            <input id="male" type="radio" name="gender" value="male" checked="checked" />
                                            <label for="male">Male</label>
                                            <input id="female" type="radio" name="gender" value="female" />
                                            <label for="female">Female</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="form3Email" id="form3Email" type="text" class="span12" placeholder="email@address.com" />
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
                        <form class="form-no-horizontal-spacing" id="form-condensed" /> 
                            <div class="row-fluid column-seperation">
                                <div class="span6">
                                    <h4>Informasi</h4>            
                                    <div class="row-fluid">
                                        <div class="span5">
                                            <input name="form3FirstName" id="form3FirstName" type="text" class="span12" placeholder="First Name" />
                                        </div>
                                        <div class="span6">
                                            <input name="form3LastName" id="form3LastName" type="text" class="span12" placeholder="Last Name" />
                                        </div>
                                    </div>
                                <div class="row-fluid">
                                    <div class="span5">
                                        <select name="form3Gender" id="form3Gender" class="select2 span12">
                                            <option value="1" />Male
                                            <option value="2" />Female
                                        </select>
                                    </div>
                                    <div class="span6">
                                        <input name="form3DateOfBirth" id="form3DateOfBirth" type="text" class="span12" placeholder="Date of Birth" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="form3Occupation" id="form3Occupation" type="text" class="span12" placeholder="Occupation" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span8">
                                        <div class="radio">
                                            <input id="male" type="radio" name="gender" value="male" checked="checked" />
                                            <label for="male">Male</label>
                                            <input id="female" type="radio" name="gender" value="female" />
                                            <label for="female">Female</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="form3Email" id="form3Email" type="text" class="span12" placeholder="email@address.com" />
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