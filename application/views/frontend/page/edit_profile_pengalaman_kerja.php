		<div class="row-fluid">
            <div class="span12">
                <div class="grid simple horizontal green">
                    <div class="grid-title no-border">
                        <h4>Ubah Data Pengalaman <span class="semi-bold">Kerja</span></h4>
                        <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="javascript:;" class="remove"></a> </div>
                    </div>
                    <div class="grid-body no-border">
                        <form class="form-no-horizontal-spacing" id="form-condensed"  method="POST" action="<?php echo site_url('user/profile/ubah_pengalaman_kerja/'.$pengalaman_kerja['ID_pengalaman_kerja']) ?>"/> 
                            <div class="row-fluid column-seperation">
                                <div class="span6">
                                    <h4>Informasi</h4>            
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="no_sk" id="no_sk" type="text" value="<?php echo (isset($pengalaman_kerja['NO_SK'])) ? $pengalaman_kerja['NO_SK'] : ''; ?>" class="span12" placeholder="No. SK" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="tgl_sk" id="tgl_sk" type="text" class="span12" value="<?php echo (isset($pengalaman_kerja['TGL_SK'])) ? $pengalaman_kerja['TGL_SK'] : ''; ?>" placeholder="Tanggal SK" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="ma_tmt" id="ma_tmt" type="text" class="span12" value="<?php echo (isset($pengalaman_kerja['MA_TMT'])) ? $pengalaman_kerja['MA_TMT'] : ''; ?>" placeholder="TMT" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="mkt_gol" id="mkt_gol" type="text" class="span12" value="<?php echo (isset($pengalaman_kerja['MKT_GOL'])) ? $pengalaman_kerja['MKT_GOL'] : ''; ?>" placeholder="MKT GOL" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="mkb_gol" id="mkb_gol" type="text" class="span12" value="<?php echo (isset($pengalaman_kerja['MKB_GOL'])) ? $pengalaman_kerja['MKB_GOL'] : ''; ?>" placeholder="MKB GOL" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="kode_update" id="kode_update" type="text" class="span12" value="<?php echo (isset($pengalaman_kerja['KODE_UPDATE'])) ? $pengalaman_kerja['KODE_UPDATE'] : ''; ?>" placeholder="Kode Update" />
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span11">
                                            <input name="nm_jbt" id="nm_jbt" type="text" class="span12" value="<?php echo (isset($pengalaman_kerja['NM_JBT'])) ? $pengalaman_kerja['NM_JBT'] : ''; ?>" placeholder="Nama jabatan" />
                                        </div>
                                    </div>
                                    
                                </div>
                            
                            <div class="span6">
                                <h4>Informasi Tambahan</h4>
            
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="nm_pl" id="nm_pl" type="text" class="span12" value="<?php echo (isset($pengalaman_kerja['NM_PL'])) ? $pengalaman_kerja['NM_PL'] : ''; ?>" placeholder="Nama pl" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="nm_ru" id="nm_ru" type="text" class="span12" value="<?php echo (isset($pengalaman_kerja['NM_RU'])) ? $pengalaman_kerja['NM_RU'] : ''; ?>" placeholder="Nama ru" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="nm_si" id="nm_si" type="text" class="span12" value="<?php echo (isset($pengalaman_kerja['NM_SI'])) ? $pengalaman_kerja['NM_SI'] : ''; ?>" placeholder="Nama si" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="nm_bag" id="nm_bag" type="text" class="span12" value="<?php echo (isset($pengalaman_kerja['NM_BAG'])) ? $pengalaman_kerja['NM_BAG'] : ''; ?>" placeholder="Nama bag" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="nm_dep" id="nm_dep" type="text" class="span12" value="<?php echo (isset($pengalaman_kerja['NM_DEP'])) ? $pengalaman_kerja['NM_DEP'] : ''; ?>" placeholder="Nama dep" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="nm_kom" id="nm_kom" type="text" class="span12" value="<?php echo (isset($pengalaman_kerja['NM_KOM'])) ? $pengalaman_kerja['NM_KOM'] : ''; ?>" placeholder="Nama kom" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="nm_dir" id="nm_dir" type="text" class="span12" value="<?php echo (isset($pengalaman_kerja['NM_DIR'])) ? $pengalaman_kerja['NM_DIR'] : ''; ?>" placeholder="Nama dir" />
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span11">
                                        <input name="keterangan" id="keterangan" type="text" class="span12" value="<?php echo (isset($pengalaman_kerja['KETERANGAN'])) ? $pengalaman_kerja['KETERANGAN'] : ''; ?>" placeholder="keterangan" />
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