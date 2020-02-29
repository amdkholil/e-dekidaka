<div class="card">
	<div class="card-header">
		<a href="<?= site_url() ?>pengaturan">Pengaturan</a> / Model
		<span class="float-right">
			<a href="#" class="btn-sm btn-primary mb-2" data-toggle="modal" data-target="#m-line"><i class="fa fa-plus"></i> Tambah</a>
		</span>
	</div>
	<div class="card-body">
		
		<table class="table table-sm table-hover table-bordered table-striped">
			<tr class="text-center">
				<th><i class="fa fa-bars"></i></th>
				<th>Nama model</th>
				<th>Part Number</th>
			</tr>
			<?php foreach ($model as $row) { ?>
			<tr class="text-center">
				<td width="80">
					<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#m-lineEdit"
					data-line="<?= $row->nama ?>" data-id="<?= $row->id ?>"
					data-pn="<?= $row->part_number ?>">
					<i class="fa fa-edit"></i>
					</button>
					<a href="<?= site_url('pengaturan/model/del/').$row->id ?>" class="btn btn-sm btn-danger"
						onclick="return confirm('yakin akan menghapus data?')">
						<i class="fa fa-trash"></i>
					</a>
				</td>
				<td><?= $row->nama ?></td>
				<td><?= $row->part_number ?></td>
			</tr>
			<?php } ?>
		</table>
		<?php $this->load->view('_tools/flashdata'); ?>
	</div>
</div>
<div class="modal fade" id="m-line" tabindex="-1" role="dialog" aria-labelledby="b-line" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<form method="POST" action="<?= site_url() ?>pengaturan/model/add">
				<div class="modal-header">
					<h6>Tambah Line</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Nama Model</span>
							</div>
							<input type="text" name="model" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Part No.</span>
							</div>
							<input type="text" name="pn" class="form-control" required>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="m-lineEdit" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<form method="POST" action="<?= site_url() ?>pengaturan/model/edit">
				<div class="modal-header">
					<h6>Edit Model</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Nama Model</span>
							</div>
							<input type="hidden" id="id" name="id" class="form-control" required>
							<input type="text" id="line" name="model" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Part No.</span>
							</div>
							<input type="text" id="pn" name="pn" class="form-control" required>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('#m-lineEdit').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var did = button.data('id')
var line = button.data('line')
var pn = button.data('pn')
var modal = $(this)
modal.find('.modal-body input#id').val(did)
modal.find('.modal-body input#line').val(line)
modal.find('.modal-body input#pn').val(pn)
})
</script>