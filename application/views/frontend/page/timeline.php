		<div class="row-fluid">
			<div class="span12">
				<div class="tiles white span12">			
					<div class="tiles-body">
						<h5><span class="semi-bold">You many also know</span>&nbsp;&nbsp; <a href="#" class="text-info normal-text">view more</a></h5>
						<div class="row-fluid">
							<div class="span6">
								<div class="friend-list">
									<div class="friend-profile-pic">
										<div class="user-profile-pic-normal">
										<img width="35" height="35" src="<?php echo base_url(); ?>assets/frontend/img/profiles/d.jpg" data-src="<?php echo base_url(); ?>assets/frontend/img/profiles/d.jpg" data-src-retina="<?php echo base_url(); ?>assets/frontend/img/profiles/d2x.jpg" />
										</div>
									</div>
									<div class="friend-details-wrapper">
										<div class="friend-name">
											Johne Drake
										</div>
										<div class="friend-description">
											James Smith in commman
										</div>
									</div>
									<div class="action-bar pull-right">
										<button class="btn btn-primary" type="button">Add</button>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="span6">
								<div class="friend-list">
									<div class="friend-profile-pic">
										<div class="user-profile-pic-normal">
										<img width="35" height="35" alt="" src="<?php echo base_url(); ?>assets/frontend/img/profiles/b.jpg" data-src="<?php echo base_url(); ?>assets/frontend/img/profiles/b.jpg" data-src-retina="<?php echo base_url(); ?>assets/frontend/img/profiles/b2x.jpg" />
										</div>
									</div>
									<div class="friend-details-wrapper">
										<div class="friend-name">
											Johne Drake
										</div>
										<div class="friend-description">
											James Smith in commman
										</div>
									</div>
									<div class="action-bar pull-right">
										<button class="btn btn-primary" type="button">Add</button>
									</div>
									<div class="clearfix"></div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<br />
			<div class="row-fluid">
			 	<div class="span12">
				  	<form action="<?php echo site_url('user/action/tambahStatus'); ?>" method="POST">
						<div class="tiles white">
							<textarea rows="3" class="span12 user-status-box post-input" name="user_status" placeholder="Whats on your mind?"></textarea>
						</div>
						<div class="tiles grey padding-10">
						<div class="pull-right">
							<button class="btn btn-primary btn-sm btn-small" type="submit">POST</button>
						</div>					
						<div class="clearfix"></div>
						</div>										
				  	</form>
				</div>
			</div>
			<br />
			<br />
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
							<span class="dark-text"><a href="<?php echo site_url('user/profile/detail/'.$status['ID_user']); ?>"><?php echo $status['NAMA'] ?></a></span>
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