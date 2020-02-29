<?php
$shift = date("a");
?>
<div class="card">
	<div class="card-header">
		<a href="<?= site_url() ?>produksi"> Produksi </a> / <?= $line->nama ?>
		<span class="float-right">
			<a href="#" id="btn-form" class="btn-sm btn-primary"
				data-toggle="modal" data-target="#add-form">
				<i class="fas fa-plus"></i> Create new
			</a>
		</span>
	</div>
	<div class="card-body">
		<table class="table table-sm table-hover text-justify mt-3 table-bordered table-striped">
			<thead>
				<tr class="text-center">
					<th>Tannggal</th>
					<th colspan="2">Shift</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($tgl as $row) { ?>
				<tr class="text-center">
					<td><?= $this->custom->ftgl($row->tanggal) ?> </td>
					<?php $sft = $this->produksi_m->getWheres(['id_line'=> $line->id ,'tanggal' =>$row->tanggal]);
						foreach ($sft as $shift) { 
							if (count($sft)==2) { $s = ($shift->shift=='s') ? 'Siang' : 'Malam' ; ?>

								<td><a href="<?= site_url() ?>produksi/dekidaka/<?= $row->id ?>"><?= $s ?></a></td>
							<?php } else {
								if($shift->shift=='s'){?>
									<td><a href="<?= site_url() ?>produksi/dekidaka/<?= $row->id ?>">Siang</a></td>
									<td></td>
								<?php }
								else{ ?>
									<td></td>
									<td><a href="<?= site_url() ?>produksi/dekidaka/<?= $row->id ?>">Malam</a></td>
								<?php }
							} } ?>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<?php $this->load->view('_tools/flashdata'); ?>
	</div>
</div>
<!-- Modal add form -->
<div class="modal fade" id="add-form" tabindex="-1" role="dialog" aria-labelledby="btn-form" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form method="POST" action="<?= site_url() ?>produksi/buatform">
				<div class="modal-header">
					<h6 class="modal-title">Buat form E-Dekidaka</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Tanggal </span>
							</div>
							<input type="date" name="tanggal" class="form-control"
							value="<?= date('Y-m-d') ?>" required>
							<div class="input-group-append">
								<span class="input-group-text"> Shift </span>
							</div>
							<select type="text" name="shift" class="form-control" required>
								<option></option>
								<option value="s" <?= $sh = ($shift=="am") ? "selected" : "" ;?>>Siang</option>
								<option value="m" <?= $sh = ($shift=="pm") ? "selected" : "" ;?>>Malam</option>
							</select>
						</div>
					</div>
					<input type="hidden" name="line" value="<?= $line->id ?>">
					<fieldset disabled>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Line</span>
								</div>
								<select type="text" name="line-dis" class="form-control">
									<option></option>
									<option value="<?= $line->id ?>"  selected ><?= $line->nama ?></option>
								</select>
							</div>
						</div>
					</fieldset>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-md btn-primary">
					<i class="fa fa-save"></i> Buat form
					</button>
				</div>
			</form>
		</div>
	</div>
</div>