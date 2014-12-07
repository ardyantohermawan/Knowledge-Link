		<div class="row-fluid">
			<div class="span12">
				<div class="tiles white span12">
					<div class="tiles green cover-pic-wrapper">						
						<div class="overlayer bottom-right">
							<div class="overlayer-wrapper">
								<div class="padding-10 hidden-phone">									
									<!-- <button type="button" class="btn btn-primary btn-small"><i class="icon-plus"></i> Tambahkan sebagai teman</button> -->
								</div>
							</div>
						</div>
						<?php if ($profile_karyawan['GAMBAR_COVER_FOTO'] != ''): ?>
							<img src="<?php echo base_url(); ?><?php echo $profile_karyawan['GAMBAR_COVER_FOTO'];?>" />
						<?php else: ?>
							<img src="<?php echo base_url(); ?>assets/frontend/img/cover_pic.png" />
						<?php endif ?>
					</div>
					<div class="tiles white">
						<div class="row-fluid">
							<div class="span3">
								<div class="user-profile-pic">	
									<img width="69" height="69" data-src-retina="<?php echo base_url(); ?>/<?php echo $profile_karyawan['GAMBAR_PROFIL']; ?>" data-src="<?php echo base_url(); ?>/<?php echo $profile_karyawan['GAMBAR_PROFIL']; ?>" src="<?php echo base_url(); ?>/<?php echo $profile_karyawan['GAMBAR_PROFIL_KECIL']; ?>" />
								</div>
							</div>
							<div class="span5 user-description-box  ">
								<h4 class="semi-bold no-margin"><?php echo $profile_karyawan['NAMA'] ?></h4>
								<h6 class="no-margin"><?php echo $profile_karyawan['POSTITLE'] ?> di <?php echo $profile_karyawan['NAMA_GROUP'] ?></h6>
							</div>			
						</div>
				
						<div class="tiles-body">
							<div class="grid simple horizontal purple">
								<div class="grid-title no-border">
									<h4><i class="icon-user"></i>Informasi <span class="semi-bold">Karyawan</span></h4>
			                        <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="javascript:;" class="remove"></a> </div>
								</div>
								<div class="grid-body no-border">
									<div class="row-fluid">		        						
										<ul class="nav nav-tabs" id="tab-01">
						            		<li class="active"><a href="#pendidikan">Pendidikan</a></li>
						           			<li><a href="#pengalaman_kerja">Pengalaman Kerja</a></li>
								            <li><a href="#sertifikasi">Sertifikasi</a></li>
								            <li><a href="#pelatihan">Pelatihan</a></li>
								            <li><a href="#minat">Minat</a></li>
								            <li><a href="#album">Album</a></li>
								        </ul>
								        <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
						          		<div class="tab-content">
						            		<div class="tab-pane active" id="pendidikan">
						              			<div class="row-fluid">
							                		<div class="span12">
							                			<div class="grid simple horizontal">
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
									                                </tr>
									                            </thead>
									                            <tbody>
									                                <?php if (isset($pendidikans)) { ?>
									                                <?php foreach ($pendidikans as $pendidikan) { ?>
									                                <tr>
									                                    <td><?php echo $pendidikan['EDUCATION_LEVEL_NAME']; ?></td>
									                                    <td><?php echo $pendidikan['EDUCATION_FIELD_NAME']; ?></td>
									                                    <td><?php echo $pendidikan['LOCATION']; ?></td>
									                                    <td><?php echo date('d-m-Y', strtotime($pendidikan['START_YEAR'])); ?></td>
									                                    <td><?php echo date('d-m-Y', strtotime($pendidikan['END_YEAR'])); ?></td>
									                                    
									                                </tr>
									                                <?php } ?>
									                                <?php } ?>
									                            </tbody>
									                        </table>
							                  			</div>
							                		</div>
						              			</div>
						            		</div>
						            		<div class="tab-pane" id="pengalaman_kerja">
							              		<div class="row-fluid">
							                		<div class="span12">
							                  			<div class="grid simple horizontal">
									                        <table class="table table-hover no-more-tables table-bordered">
									                            <thead>
									                                <tr>
									                                    <th>
									                                        No. SK
									                                    </th>
									                                    <th>
									                                        Mkt Gol
									                                    </th>
									                                    <th>
									                                        Nama Jabatan
									                                    </th>
									                                    <th>
									                                        Nama pl
									                                    </th>
									                                    <th>
									                                        Nama bag
									                                    </th>
									                                    <th>
									                                        Keterangan
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
									                                    
									                                </tr>
									                                
									                                <?php } ?>
									                                <?php } ?>
									                            </tbody>
									                        </table>
							                  			</div>
							                		</div>
							              		</div>
							            	</div>
							            	<div class="tab-pane" id="sertifikasi">
							              		<div class="row-fluid">
							                		<div class="span12">
							                  			<div class="grid simple horizontal">
									                        <table class="table table-hover no-more-tables table-bordered">
									                            <thead>
									                                <tr>
									                                    <th>
									                                        Nama
									                                    </th>
									                                    <th>
									                                        Topik Sertifikasi
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
									                                </tr>
									                            </thead>
									                            <tbody>
									                                <?php if (isset($sertifikasis)) { ?>
									                                <?php foreach ($sertifikasis as $sertifikasi) { ?>
									                                <tr>
									                                    <td><?php echo $sertifikasi['NAMA_TRAINING']; ?></td>
									                                    <td><?php echo $sertifikasi['TOPIK']; ?></td>
									                                    <td><?php echo date('d-m-Y', strtotime($sertifikasi['START_DATE'])); ?></td>
									                                    <td><?php echo date('d-m-Y', strtotime($sertifikasi['END_DATE'])); ?></td>
									                                    <td><?php echo $sertifikasi['TEMPAT']; ?></td>
									                                    <td><?php echo $sertifikasi['PENYELENGGARA']; ?></td>
									                                    
									                                </tr>
									                                
									                                <?php } ?>
									                                <?php } ?>
									                            </tbody>
									                        </table>
										                </div>
							                		</div>
							              		</div>
							            	</div>
							            	<div class="tab-pane" id="pelatihan">
							              		<div class="row-fluid">
							                		<div class="span12">
							                  			<div class="grid simple horizontal">
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
									                                    
									                                </tr>
									                                
									                                <?php } ?>
									                                <?php } ?>
									                            </tbody>
									                        </table>
										                </div>
							                		</div>
							              		</div>
							            	</div>
							            	<div class="tab-pane" id="minat">
							              		<div class="row-fluid">
							                		<div class="span12">
							                  			<div class="grid simple horizontal">
									                        <ol class="bold">
                                    							<?php if (isset($list_minats)): ?>
                                    								<?php foreach ($list_minats as $row): ?>
                                    									
                                    									<li class="normal"><?php echo $row['NAMA_GROUP'] ?></li>
                                    								<?php endforeach ?>
                                    							<?php endif ?>
									                        </ol>
										                </div>
							                		</div>
							              		</div>
							            	</div>
							            	<div class="tab-pane" id="album">
							              		<div class="row-fluid">
							                		<div class="span12">
							                  			<div class="grid simple horizontal">
									                        <div class="superbox">
									                        	<?php if (isset($foto_albums)): ?>
									                        		<?php foreach ($foto_albums as $row): ?>
									                        			
																<div class="superbox-list">
																	<img class="superbox-img" alt="" data-img="<?php echo base_url(); ?><?php echo $row['Nama_Foto'] ?>" src="<?php echo base_url(); ?><?php echo $row['Nama_Foto_Kecil'] ?>">
																</div>
									                        		<?php endforeach ?>
									                        	<?php endif ?>
																
																<div class="superbox-float"></div>
															</div>
										                </div>
							                		</div>
							              		</div>
							            	</div>
							         	</div>
								    </div>
								</div>
							</div>
							<div class="grid simple horizontal green">
								<div class="grid-title no-border">
									<h4><i class="icon-archive"></i>Status <span class="semi-bold">Karyawan</span></h4>
			                        <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="javascript:;" class="remove"></a> </div>
								</div>
								<div class="grid-body no-border">
									<div class="row-fluid">
										<?php if (isset($statuss)): ?>
										<?php foreach ($statuss as $status): ?>
											
											<div class="post">
												<div class="user-profile-pic-wrapper">
													<div class="user-profile-pic-normal">
															<img width="35" height="35" src="<?php echo base_url(); ?>/<?php echo $status['GAMBAR_PROFIL']; ?>" data-src="<?php echo base_url(); ?>/<?php echo $status['GAMBAR_PROFIL']; ?>" data-src-retina="<?php echo base_url(); ?>/<?php echo $status['GAMBAR_PROFIL']; ?>" />
														</div>
												</div>
												<div class="info-wrapper">					
													<div class="username">
														<a href="<?php echo site_url('user/profile/detail/'.$status['ID_user']); ?>"><?php echo $status['NAMA'] ?></a>
													</div>
													<div class="info">
														<?php echo $status['User_status']; ?>
													</div>	
													<div class="more-details">
														<ul class="post-links">
															<li><a href="#" class="muted"> 2 Minutes ago</a></li>
														</ul>
													</div>
													<div class="clearfix"></div>
												
													<ul class="action-bar">
														<li><a href="<?php echo site_url('user/status/komentar/'.$status['ID_Status']); ?>" class="muted"><i class="icon-comment"></i> <?php echo $status['jumlah_komentar'] ?> Komentar</a></li>
													</ul>
													<div class="clearfix"></div>
												</div>	
												<div class="clearfix"></div>						
											</div>
										<?php endforeach ?>
										<?php endif ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>