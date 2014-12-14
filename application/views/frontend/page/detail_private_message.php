				<div class="row-fluid">
					<div class="span12">
						<div class="grid simple">
						 	<div class="grid-title no-border">
								<h4></h4>
								<div class="tools">
									<a class="remove" href="javascript:;"></a>
								</div>
							</div>
							<div style="min-height: 850px;" class="grid-body no-border">
								<div class="row-fluid">
									<h1 id="emailheading"><?php echo $message['Subject'] ?></h1>
									<br>
									<div class="control">									
										<div class="pull-left">
										<div class="btn-group">
										<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">
											<?php echo $message['NAMA']; ?>
										</a>
									</div>
										<label class="inline"><span class="muted">&nbsp;&nbsp;kepada</span> <span class="semi-bold small-text"> saya</span></label>
										</div>
										<div class="pull-right">
											<span class="muted small-text"><?php echo date('d-m-Y H:i:s', strtotime($message['Tgl'])) ?></span>
										</div>
										<div class="clearfix"></div>
									</div>	
									<br>
									<div class="email-body">
										<p><?php echo $message['Pesan'] ?></p>
									</div>						
								</div>							
							</div>
						</div>
					</div>
				</div>