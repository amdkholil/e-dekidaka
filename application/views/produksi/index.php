<div class="card">
	<div class="card-header">
		Produksi
	</div>
	<div class="card-body">
			<div class="row">
				<?php $i=1; foreach ($line as $row) {  ?>
				<div class="col-lg-3 col-md-4 col-sm-6 mb-lg-3 mb-md-2 mb-sm-1 mb-1">
					<a href="<?= site_url('produksi/line/').$row->id ?>" class="form-control btn-outline-dark">
						<?= $row->nama ?>
					</a>
				</div>
				<?php if ($i==4) { echo `</div><div class="row">`; $i=0; } $i++; } ?>

			</div>
	</div>
</div>