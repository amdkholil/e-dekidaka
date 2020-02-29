<div class="card m-2">
	<div class="card-header">
		Produksi
	</div>
	<div class="card-body">
		<div class="form-group row">
				<div class="col-md-5">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">Tanggal</span>
						</div>
						<input type="date" name="tanggal" class="form-control" value="2020-01-19">
						<select name="shift" class="form-control" id="">
							<option> --- Shift --- </option>
							<option value="s" selected>Siang</option>
							<option value="s">Malam</option>
						</select>
					</div>
				</div>
				<div class="col-md-5">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">Line &nbsp; &nbsp; </span>
						</div>
						<select name="line" class="form-control" id="">
							<option> --- Line --- </option>
							<option value="" selected="">Line Abcdefg</option>
							<option value="">Line Hijklmn</option>
							<option value="">Line Opqrstu</option>
						</select>
					</div>
				</div>
				<div class="col-md-1">
					<a href="" class="btn-md btn-secondary btn"><i class="fa fa-cog"></i></a>
				</div>
			</div>
		<table class="table table-sm table-hover mt-2">
			<thead>
				<th>No.</th>
				<th>Nama Model</th>
				<th>Part No.</th>
				<th>Plan</th>
				<th>Actual</th>
				<th>Ratio</th>
			</thead>
			<tbody>
				<?php for ($i=0; $i < 4; $i++) { ?>
				<tr>
					<td><?= $i+1 ?></td>
					<td>
						Model <?= $i+1 ?>
					</td>
					<td>Jk0000<?= ($i+3)*7 ?></td>
					<td><?php $x=300; echo $x; ?></td>
					<td><?php $y=280+($i*2); echo $y; ?></td>
					<td><?= number_format($y/$x*100,2).'%' ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>