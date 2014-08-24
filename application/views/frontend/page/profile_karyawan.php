		<div class="row-fluid">
			<div class="span12">
				<div class="tiles white span12">
					<div class="tiles green cover-pic-wrapper">						
						<div class="overlayer bottom-right">
							<div class="overlayer-wrapper">
								<div class="padding-10 hidden-phone">									
									<button type="button" class="btn btn-primary btn-small"><i class="icon-ok"></i>&nbsp;&nbsp;Following</button> <button type="button" class="btn btn-primary btn-small">Add</button>
								</div>
							</div>
						</div>
					<img src="<?php echo base_url(); ?>assets/frontend/img/cover_pic.png" />
					</div>
					<div class="tiles white">
						<div class="row-fluid">
							<div class="span3">
								<div class="user-profile-pic">	
									<img width="69" height="69" data-src-retina="<?php echo base_url(); ?>assets/frontend/img/profiles/avatar2x.jpg" data-src="<?php echo base_url(); ?>assets/frontend/img/profiles/avatar.jpg" src="<?php echo base_url(); ?>assets/frontend/img/profiles/avatar.jpg" />
								</div>
								 <div class="user-mini-description">
									<h3 class="text-success semi-bold">
									2548
									</h3>
									<h5>Followers</h5>
									<h3 class="text-success semi-bold">
									457
									</h3>
									<h5>Following</h5>
								</div>
							</div>
							<div class="span5 user-description-box  ">
								<h4 class="semi-bold no-margin"><?php echo $profile_karyawan['NAMA'] ?></h4>
								<h6 class="no-margin"><?php echo $profile_karyawan['POSTITLE'] ?> di <?php echo $profile_karyawan['NAMA_GROUP'] ?></h6>
							</div>
							<div class="span3">
								<h5 class="normal">Friends ( <span class="text-success">1223</span> )</h5>
								<ul class="my-friends">
									<li><div class="profile-pic"> 
										<img width="35" height="35" data-src-retina="<?php echo base_url(); ?>assets/frontend/img/profiles/d2x.jpg" data-src="<?php echo base_url(); ?>assets/frontend/img/profiles/d.jpg" src="<?php echo base_url(); ?>assets/frontend/img/profiles/d.jpg" />
										</div>
									</li>
									<li><div class="profile-pic"> 
										<img width="35" height="35" data-src-retina="<?php echo base_url(); ?>assets/frontend/img/profiles/c2x.jpg" data-src="<?php echo base_url(); ?>assets/frontend/img/profiles/c.jpg" src="<?php echo base_url(); ?>assets/frontend/img/profiles/c.jpg" />
										</div>
									</li>
									<li><div class="profile-pic"> 
										<img width="35" height="35" data-src-retina="<?php echo base_url(); ?>assets/frontend/img/profiles/h2x.jpg" data-src="<?php echo base_url(); ?>assets/frontend/img/profiles/h.jpg" src="<?php echo base_url(); ?>assets/frontend/img/profiles/h.jpg" />
										</div>
									</li>
									<li><div class="profile-pic"> 
										<img width="35" height="35" data-src-retina="<?php echo base_url(); ?>assets/frontend/img/profiles/avatar_small2x.jpg" data-src="<?php echo base_url(); ?>assets/frontend/img/profiles/avatar_small.jpg" src="<?php echo base_url(); ?>assets/frontend/img/profiles/avatar_small.jpg" alt="" /> 
										</div>
									</li>
									<li><div class="profile-pic"> 
										<img width="35" height="35" data-src-retina="<?php echo base_url(); ?>assets/frontend/img/profiles/e2x.jpg" data-src="<?php echo base_url(); ?>assets/frontend/img/profiles/e.jpg" src="<?php echo base_url(); ?>assets/frontend/img/profiles/e.jpg" alt="" /> 
										</div>
									</li>
									<li><div class="profile-pic"> 
										<img width="35" height="35" data-src-retina="<?php echo base_url(); ?>assets/frontend/img/profiles/b2x.jpg" data-src="<?php echo base_url(); ?>assets/frontend/img/profiles/b.jpg" src="<?php echo base_url(); ?>assets/frontend/img/profiles/b.jpg" alt="" /> 
										</div>
									</li>
									<li><div class="profile-pic"> 
										<img width="35" height="35" data-src-retina="<?php echo base_url(); ?>assets/frontend/img/profiles/h2x.jpg" data-src="<?php echo base_url(); ?>assets/frontend/img/profiles/h.jpg" src="<?php echo base_url(); ?>assets/frontend/img/profiles/h.jpg" />
										</div>
									</li>
									<li><div class="profile-pic"> 
										<img width="35" height="35" data-src-retina="<?php echo base_url(); ?>assets/frontend/img/profiles/d2x.jpg" data-src="<?php echo base_url(); ?>assets/frontend/img/profiles/d.jpg" src="<?php echo base_url(); ?>assets/frontend/img/profiles/d.jpg" />
										</div>
									</li>

								</ul>	
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
								            <li><a href="#pelatihan">Pelatihan</a></li>
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
									                                    <td><?php echo $pendidikan['START_YEAR']; ?></td>
									                                    <td><?php echo $pendidikan['END_YEAR']; ?></td>
									                                    
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
									                                    <td><?php echo $training['START_DATE']; ?></td>
									                                    <td><?php echo $training['END_DATE']; ?></td>
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
															<img width="35" height="35" src="<?php echo base_url(); ?>assets/frontend/img/profiles/c.jpg" data-src="<?php echo base_url(); ?>assets/frontend/img/profiles/c.jpg" data-src-retina="<?php echo base_url(); ?>assets/frontend/img/profiles/c2x.jpg" />
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