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
			<div class="row-fluid">
			 	<div class="tiles white span12">
				  	<form action="<?php echo site_url('user/action/tambahStatus'); ?>" method="POST">
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
			<br />
			<br />
			<?php if (isset($statuss)): ?>
			<?php foreach ($statuss as $status): ?>

			<div class="row-fluid">
				<div class="span12">
					<div class="grid simple vertical green">
						<div class="grid-title no-border">
							<h4><?php echo $status['UNITKERJA'] ?></h4>
							<div class="tools">
								<a href="javascript:;" class="collapse" title="collapse"></a>

								<?php if ($status['NIK'] === $this->session->userdata('NIK')): ?>
									
								<a href="<?php echo site_url('user/action/ubahStatus/'.$status['ID_Status']); ?>" class="reload" title="edit"></a>
								<a href="<?php echo site_url('user/action/hapusStatus/'.$status['ID_Status']); ?>" class="remove" title="hapus"></a>
								<?php endif ?>
							
							</div>
						</div>
						<div class="grid-body no-border">
							<div class="row-fluid">
								<div class="post">
									<div class="user-profile-pic-wrapper">
										<div class="user-profile-pic-normal">
											<img width="35" height="35" src="<?php echo base_url(); ?>/<?php echo $status['GAMBAR_PROFIL']; ?>" data-src="<?php echo base_url(); ?>/<?php echo $status['GAMBAR_PROFIL']; ?>" data-src-retina="<?php echo base_url(); ?>/<?php echo $status['GAMBAR_PROFIL']; ?>" />
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
												<li><a href="#" class="muted"> <?php echo time_elapsed_string(strtotime($status['Create_Date'])) ?></a></li>
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
							</div>
						</div>
					</div>
				</div>
				
			</div>
				
			<?php endforeach ?>
			<?php endif ?>

		</div>