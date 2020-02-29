<div class="card">
	<div class="card-header">
		<a href="<?= site_url() ?>pengaturan">Pengaturan</a> / No Good
		<span class="float-right">
			<a href="#" class="btn-sm btn-primary mb-2" data-toggle="modal" data-target="#m-line"><i class="fa fa-plus"></i> Tambah</a>
		</span>
	</div>
	<div class="card-body">
		
		<table class="table table-sm table-hover table-bordered table-striped">
			<tr class="text-center">
				<th><i class="fa fa-bars"></i></th>
				<th>Nama No Good</th>
			</tr>
			<?php foreach ($ng as $row) { ?>
			<tr class="text-center">
				<td width="80">
					<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#m-lineEdit" data-line="<?= $row->nama ?>" data-id="<?= $row->id ?>"><i class="fa fa-edit"></i></button>
					<a href="<?= site_url('pengaturan/nogood/del/').$row->id ?>" class="btn btn-sm btn-danger"
						onclick="return confirm('yakin akan menghapus data?')">
						<i class="fa fa-trash"></i>
					</a>
				</td>
				<td><?= $row->nama ?></td>
			</tr>
			<?php } ?>
		</table>
		<?php $this->load->view('_tools/flashdata'); ?>
	</div>
</div>
<div class="modal fade" id="m-line" tabindex="-1" role="dialog" aria-labelledby="b-line" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<form method="POST" action="<?= site_url() ?>pengaturan/nogood/add">
				<div class="modal-header">
					<h6>Tambah No good</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Nama NG</span>
							</div>
							<input type="text" name="ng" class="form-control" required>
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
			<form method="POST" action="<?= site_url() ?>pengaturan/nogood/edit">
				<div class="modal-header">
					<h6>Edit No good</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Nama NG</span>
							</div>
							<input type="hidden" id="id" name="id" class="form-control" required>
							<input type="text" id="line" name="ng" class="form-control" required>
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
var modal = $(this)
modal.find('.modal-body input#id').val(did)
modal.find('.modal-body input#line').val(line)
})
</script>