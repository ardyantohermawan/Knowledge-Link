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
	                <div class="grid simple horizontal green">
	                    <div class="grid-title no-border">
	                        <h4><span class="semi-bold">Detail</span></h4>
	                        <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="javascript:;" class="remove"></a> </div>
	                    </div>
	                    <div class="grid-body no-border">
						<?php if (isset($status)): ?>
							
							<div class="post">
								<div class="user-profile-pic-wrapper">
									<div class="user-profile-pic-normal">
										<img width="35" height="35" src="<?php echo base_url(); ?>/<?php echo $status['GAMBAR_PROFIL_KECIL']; ?>" data-src="<?php echo base_url(); ?>/<?php echo $status['GAMBAR_PROFIL_KECIL']; ?>" data-src-retina="<?php echo base_url(); ?>/<?php echo $status['GAMBAR_PROFIL_KECIL']; ?>" />
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
											<li><a href="#" class="muted"><?php echo time_elapsed_string(strtotime($status['Create_Date'])) ?></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								
									<ul class="action-bar">
										<li><a href="#" class="muted"><i class="icon-comment"></i> <?php echo (count($komentars) > 0) ? count($komentars) : 0; ?></a> Komentar</li>
										<li></li>
									</ul>

									<div class="clearfix"></div>
								<?php if (isset($komentars)): ?>
								<?php foreach ($komentars as $komentar): ?>
									
									<div class="post comments-section">
										<div class="user-profile-pic-wrapper">
											<div class="user-profile-pic-normal">
												<img width="35" height="35" data-src-retina="<?php echo base_url(); ?>/<?php echo $komentar['GAMBAR_PROFIL_KECIL']; ?>" data-src="<?php echo base_url(); ?>/<?php echo $komentar['GAMBAR_PROFIL_KECIL']; ?>" src="<?php echo base_url(); ?>/<?php echo $komentar['GAMBAR_PROFIL_KECIL']; ?>" alt="" />
											</div>
										</div>
										<div class="info-wrapper">					
											<div class="username">
												<a href="<?php echo site_url('user/profile/detail/'.$komentar['ID_user']); ?>"><?php echo $komentar['NAMA'] ?></a>
											</div>
											<div class="info">
												<?php echo $komentar['KOMENTAR']; ?>
											</div>	
											<div class="more-details">
												<ul class="post-links">
													<li><a href="#" class="muted"><?php echo time_elapsed_string(strtotime($komentar['Create_Date'])) ?></a></li>
												</ul>
												<?php if (($komentar['ID_user'] == $this->session->userdata('id_user'))  OR ($this->session->userdata('akses') == 5 && $this->session->userdata('group') == $id_group) ): ?>
												<ul class="post-links">
													<li><a href="<?php echo site_url('user/action/ubahKomentarGroup/'.$id_group.'/'.$komentar['ID_Group_Status'].'/'.$komentar['ID_Group_Komentar']); ?>">Ubah</a></li>
													<li><a href="<?php echo site_url('user/action/hapusKomentarGroup/'.$id_group.'/'.$komentar['ID_Group_Status'].'/'.$komentar['ID_Group_Komentar']); ?>">Hapus</a></li>
												</ul>
												<?php endif ?>
											</div>
											
										</div>	
										<div class="clearfix"></div>						
									</div>
								<?php endforeach ?>
								<?php endif ?>

									<div class="post comments-section">							
										<div class="row-fluid">
											<form action="<?php echo site_url('user/action/tambahKomentarGroup/'.$status['ID_Group_Status']); ?>" method="POST">
												<div class="input-append success date span12">
													<input type="text" class="span11" name="komentar"/>
													<button type="submit"><span class="add-on"><span class="arrow"></span><i class="icon-th"></i></span></button>
												</div>
											</form>
										</div>
									</div>
								</div>	
								<div class="clearfix"></div>						
							</div>
						<?php endif ?>

						</div>
					</div>
				</div>
			</div>