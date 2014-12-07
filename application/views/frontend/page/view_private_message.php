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
		<div class="grid simple">
			<div style="min-height: 850px;" class="grid-body no-border email-body">
				<br>
				<div class="row-fluid">
					<h2>Pesan Pribadi </h2>
					<br>
					<a class="btn btn-block btn-primary" href="<?php echo site_url('user/messages/buat') ?>">
						Tulis
					</a>
					<div id="email-list">									
						<table id="emails" class="table table-striped table-fixed-layout table-hover"> 
							<thead>
								<tr>
									<th class="medium-cell"></th>
									<th></th>
									<th class="medium-cell"></th>
								</tr>
							</thead>
							<tbody>
								<?php if (isset($messages)): ?>
									<?php foreach ($messages as $message): ?>
										
								<tr>
									<td valign="middle" class="clickable"><?php echo $message['NAMA'] ?></td>
									<td valign="middle" class="clickable tablefull"><span class="muted"><?php echo $message['Pesan'] ?></span></td>
									<td class="clickable"><span class="muted"><?php echo time_elapsed_string(strtotime($message['Tgl'])) ?> </span></td>
								</tr>											
									<?php endforeach ?>
								<?php endif ?>
								<?php if (count($messages) == 0): ?>
								
								<tr>
									<td valign="middle" class="clickable"></td>
									<td valign="middle" class="clickable tablefull">Daftar Pesan Kosong</td>
									<td class="clickable"><span class="muted"></td>
								</tr>
								<?php endif ?>
							</tbody>
						</table>
					</div>							
				</div>	
			</div>
		</div>	
	</div>
</div>