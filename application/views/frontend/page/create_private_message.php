<div class="row-fluid">
	<div class="span12">
		<div class="row-fluid">
			<div class="span12">
				<div class="grid simple">
					<div class="grid-body no-border">
						<br>
						<div class="row-fluid">
							<h2>Pesan baru </h2>
							<form action="<?php echo site_url('user/messages/tambahPrivateMessage') ?>" method="POST">
							<div class="control-group">
								<label class="control-label">Pengerima</label>
								<div class="controls">
									<select id="source" style="width:100%" name="penerima">
					                    <?php if (isset($friends)): ?>
					                    	<?php foreach ($friends as $friend): ?>
					                    		<option value="<?php echo $friend['ID_user'] ?>"><?php echo $friend['NAMA'] ?></option>
					                    	<?php endforeach ?>
					                    <?php endif ?>
					                </select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Judul</label>
								<span class="help">e.g. "Meeting Agenda"</span>
								<div class="controls">
									<input type="text" class="span12" name="judul">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Pesan</label>
								<textarea name="pesan" rows="10" class="span12" placeholder="Enter text ..."></textarea>
							</div>
							<div class="form-actions">
                                <div class="pull-right">
                                    <button class="btn btn-primary btn-cons" type="submit"><i class="icon-ok"></i> Simpan</button>
                                    <button class="btn btn-white btn-cons" type="reset">Reset</button>
                                </div>
                            </div>
							</form>
						</div>							
					</div>							
				</div>
			</div>	
		</div>
	</div>
</div>
