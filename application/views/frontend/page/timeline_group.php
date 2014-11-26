<?php
function time_elapsed_string($ptime)
{
    $etime = time() - $ptime;

    if ($etime < 1)
    {
        return '0 seconds';
    }

    $a = array( 12 * 30 * 24 * 60 * 60  =>  'tahun',
                30 * 24 * 60 * 60       =>  'bulan',
                24 * 60 * 60            =>  'hari',
                60 * 60                 =>  'jam',
                60                      =>  'menit',
                1                       =>  'detik'
                );

    foreach ($a as $secs => $str)
    {
        $d = $etime / $secs;
        if ($d >= 1)
        {
            $r = round($d);
            return $r . ' ' . $str . ($r > 1 ? '' : '') . ' yang lalu';
        }
    }
}
?>
		<div class="row-fluid">
			<div class="span12">
				<div class="tiles white span12">			
					<div class="tiles-body">
						<div class="row-fluid">
							<div class="span12">
								<div class="tiles green cover-pic-wrapper">						
									<div class="overlayer bottom-right">
										<div class="overlayer-wrapper">
											<div class="padding-10 hidden-phone">									
												<a href="<?php echo site_url('user/action/joinGroup/'.$id_group); ?>" class="btn btn-primary btn-small"> <?php echo ($anggota) ? '<icon class="icon-ok"></icon> ': ''; ?> Bergabung</a>
											</div>
										</div>
									</div>
									<img src="<?php echo base_url(); ?>assets/frontend/img/cover_pic.png" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br />
			<?php if ($anggota): ?>
				
			<div class="row-fluid">
			 	<div class="span12">
				  	<form action="<?php echo site_url('user/action/tambahStatusGroup/'.$id_group); ?>" method="POST">
						<div class="tiles white">
							<textarea rows="3" class="span12 user-status-box post-input" name="user_status" placeholder="Apa yang Anda pikirkan?"></textarea>
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
			<?php endif ?>
			<br />
			<br />
			<?php if (isset($statuss)): ?>
			<?php foreach ($statuss as $status): ?>
			<div class="row-fluid">
				<div class="span12">
					<div class="grid simple vertical green">
						<div class="grid-title no-border">
							<h4><?php echo time_elapsed_string(strtotime($status['Create_Date'])) ?></h4>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="#grid-config" data-toggle="modal" class="config"></a>
								<a href="javascript:;" class="reload"></a>
								<a href="javascript:;" class="remove"></a>
							</div>
						</div>
						<div class="grid-body no-border">
							<div class="row-fluid">
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
										<!-- <div class="more-details">
											<ul class="post-links">
												<li><a href="#" class="muted"> 2 Minutes ago</a></li>
											</ul>
										</div> -->
										<div class="clearfix"></div>
									
										<ul class="action-bar">
											<li><a href="<?php echo site_url('user/status/komentar/'.$status['ID_Group_Status']); ?>" class="muted"><i class="icon-comment"></i> <?php echo $status['jumlah_komentar'] ?> Komentar</a></li>
										</ul>
										<div class="clearfix"></div>
									</div>	
									<div class="clearfix"></div>						
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
				
			<?php endforeach ?>
			<?php endif ?>

		</div>