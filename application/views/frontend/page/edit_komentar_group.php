<div class="row-fluid">
			 	<div class="tiles white span12">
				  	<form action="<?php echo site_url('user/action/ubahKomentarGroup/'.$id_group.'/'.$komentar['ID_Group_Status'].'/'.$komentar['ID_Group_Komentar']); ?>" method="POST">
						<div class="tiles white">
							<textarea rows="3" class="span12 user-status-box post-input" name="komentar" placeholder="Apa yang Anda pikirkan?"><?php echo $komentar['KOMENTAR']; ?></textarea>
						</div>
						<div class="tiles grey padding-10">
						<div class="pull-right">
							<button class="btn btn-primary btn-sm btn-small" type="submit">Edit</button>
						</div>					
						<div class="clearfix"></div>
						</div>										
				  	</form>
				</div>
			</div>