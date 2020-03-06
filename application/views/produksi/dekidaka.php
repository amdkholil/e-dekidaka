

	<div class="card">
		<div class="card-header">
			<a href="<?= site_url() ?>produksi">Produksi</a> /
			<a href="<?= site_url('produksi/line/'.$line->id) ?>"><?= $line->nama ?></a> /
			Form Dekidaka
		</div>
		<div class="card-body">
			<div class="form-group row">
				<div class="col-md-5">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">Tanggal</span>
						</div>
						<input type="date" name="tanggal" class="form-control bg-light" 
							value="<?= $prod[0]->tanggal ?>" disabled>
						<select name="shift" class="form-control bg-light" id="" disabled>
							<option> --- Shift --- </option>
							<option value="s" <?= $s = ($prod[0]->shift=='s') ? 'selected' : '' ; ?> >
								Siang
							</option>
							<option value="m" <?= $s = ($prod[0]->shift=='m') ? 'selected' : '' ; ?> >
								Malam
							</option>
						</select>
					</div>
				</div>
				<div class="col-md-5">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">Line &nbsp; &nbsp; </span>
						</div>
						<select name="line" class="form-control bg-light" id="" disabled>
							<option></option>
							<?php foreach ($lines as $row) { ?>
							<option value="<?= $row->id ?>" <?= $if = ($row->id==$line->id)? 'selected':''; ?>>
								<?= $row->nama ?>
							</option>
							<?php } ?>
						</select>
					</div>
				</div>
				<!-- <div class="col-md-1">
					<a href="" class="btn-md btn-secondary btn"><i class="fa fa-cog"></i></a>
				</div> -->
			</div>
			<!-- menu tab -->
			<div class="row">
				<!-- nav tab menu -->
				<ul class="nav nav-tabs col-md-12" id="tab-prod" role="tablist">
					<li class="nav-item">
						<a class="nav-link" id="a-prod" data-toggle="tab" href="#c-prod" role="tab"
							aria-controls="c-prod" aria-selected="true">Produksi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="a-ng" data-toggle="tab" href="#c-ng" role="tab"
							aria-controls="c-ng" aria-selected="false">NG proses</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="a-bm" data-toggle="tab" href="#c-bm" role="tab" aria-controls="c-bm"
							aria-selected="false">Breakdown</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="a-other" data-toggle="tab" href="#c-other" role="tab"
							aria-controls="c-other" aria-selected="false">Others</a>
					</li>
				</ul>
				<!-- end nav tab menu -->
				<!------------------------------------------------------------------------>
				<!----------------------------- Table tab -------------------------------->
				<div class="tab-content col-sm" id="tab-content">
					<!-- tab produksi -->
					<div class="tab-pane fade" id="c-prod" role="tabpanel" aria-labelledby="a-prod">
						<table class="table table-sm table-hover  mt-3">
							<thead style="background-color:rgba(0,0,0,.03)">
								<tr style="text-align: center">
									<th><i class="fa fa-bars"></i></th>
									<th style="width: 120px;">Jam</th>
									<th style="width: 300px;">Model</th>
									<th style="width:100px;">Qty produk</th>
									<th style="min-width: 380px;">Remark</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<?php foreach ($detailprod as $dp) { 
									$m=$this->model_m->getWhere($dp->id_model);?>
								<tr>
									<td width="80">
										<button class="btn btn-sm btn-primary"
										data-toggle="modal" data-target="#edit-prod" data-id_prod="<?= $prod[0]->id ?>"
										data-id="<?= $dp->id ?>" data-jam0="<?= date('H:i',strtotime($dp->jam0)) ?>"
										data-jam1="<?= date('H:i',strtotime($dp->jam1)) ?>" 
										data-model="<?= $m[0]->id ?>" data-qty="<?= $dp->qty ?>"
										data-remark="<?= $dp->remark ?>" >
											<i class="fa fa-edit"></i>
										</button>
										<a href="<?= site_url('dekidaka/delprod/').$dp->id ?>" class="btn btn-sm btn-danger"
											onclick="return confirm('yakin akan menghapus data?')">
											<i class="fa fa-trash"></i>
										</a>
									</td>
									<td><?= date('H:i',strtotime($dp->jam0)).' - '.date('H:i',strtotime($dp->jam1)) ?></td>
									<td>
										<?= $m[0]->nama ?>
									</td>
									<td><?= $dp->qty ?></td>
									<td><?= $dp->remark ?></td>
								</tr> <?php } ?>
							</tbody>
						</table>
						<div class="ml-3">
							<a id="btn-prod" class="btn btn-md btn-outline-primary" data-toggle="modal"
								data-target="#add-prod">
								<i class="fas fa-plus"></i> add
							</a>
						</div>
					</div>
					<!-- end tab produksi -->
					<!-- tab NG -->
					<div class="tab-pane fade" id="c-ng" role="tabpanel" aria-labelledby="a-ng">
						<table class="table table-sm table-hover  mt-3" style="min-width: 900px !important">
							<thead style="background-color:rgba(0,0,0,.03)">
								<tr style="text-align: center">
									<th><i class="fa fa-bars"></i> </th>
									<th>Jam</th>
									<th>Model</th>
									<th>Jenis NG</th>
									<th>Qty</th>
									<th>Remark</th>
								</tr>
							</thead>
							<tbody style="text-align: center">
								<?php foreach($ng_detail as $nd){ 
									$m=$this->model_m->getWhere($nd->id_model); 
									$n=$this->ng_m->getWhere($nd->id_ng); 
									?>
								<tr>
									<td width="80">
										<button href="" class="btn btn-sm btn-primary"
										data-toggle="modal" data-target="#edit-ng" data-id_prod="<?= $prod[0]->id ?>"
										data-id="<?= $nd->id ?>" data-id_model="<?= $nd->id_model ?>"
										data-id_ng="<?= $nd->id_ng ?>" data-qty="<?= $nd->qty ?>"
										data-jam="<?= $this->custom->jam($nd->jam) ?>"
										data-remark="<?= $nd->remark ?>"
										>
											<i class="fa fa-edit"></i>
										</button>
										<a href="<?= site_url('dekidaka/delng/').$nd->id ?>" class="btn btn-sm btn-danger"
											onclick="return confirm('yakin akan menghapus data?')">
											<i class="fa fa-trash"></i>
										</a>
									</td>
									<td>
										<?= $this->custom->jam($nd->jam) ?>
									</td>
									<td>
										<?= $m[0]->nama ?>
									</td>
									<td>
									<?= $n[0]->nama ?>
									</td>
									<td>
									<?= $nd->qty ?>
									</td>
									<td>
									<?= $nd->remark ?>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
						<div class="ml-3">
							<a id="btn-ng" class="btn btn-md btn-outline-primary" data-toggle="modal"
								data-target="#add-ng">
								<i class="fas fa-plus"></i> add
							</a>
						</div>
					</div>
					<!-- end tab NG -->
					<!-- tab BM -->
					<div class="tab-pane fade" id="c-bm" role="tabpanel" aria-labelledby="a-bm">
						<table class="table table-sm table-hover  mt-3" style="min-width: 900px !important">
							<thead style="background-color:rgba(0,0,0,.03)">
								<tr style="text-align: center">
									<th><i class="fa fa-bars"></i> </th>
									<th>Jam</th>
									<th>Menit</th>
									<th>Mesin</th>
									<th>Kategori</th>
									<th>Detail BM</th>
									<th>Penanganan</th>
									<th>Nama</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($bm_detail as  $bd) { 
									$j_bm=$this->bm_m->getWhere($bd->id_bm); ?>
								<tr>
									<td width="80">
									<button class="btn btn-sm btn-primary"
										data-toggle="modal" data-target="#edit-bm" 
										data-id_prod="<?= $prod[0]->id ?>"
										data-id="<?= $bd->id ?>"
										data-id_bm="<?= $bd->id_bm ?>"
										data-jam="<?= $this->custom->jam($bd->jam) ?>"
										data-menit="<?= $bd->menit ?>"
										data-mesin="<?= $bd->mesin ?>"
										data-detail="<?= $bd->detail ?>"
										data-penanganan="<?= $bd->penanganan ?>"
										data-pic="<?= $bd->pic ?>"
										>
											<i class="fa fa-edit"></i>
										</button>
										<a href="<?= site_url('dekidaka/delbm/').$bd->id ?>" class="btn btn-sm btn-danger"
											onclick="return confirm('yakin akan menghapus data?')">
											<i class="fa fa-trash"></i>
										</a>
									</td>
									<td> <?= $this->custom->jam($bd->jam) ?> </td>
									<td><?= $bd->menit ?></td>
									<td><?= $bd->mesin ?></td>
									<td><?= $j_bm[0]->nama ?></td>
									<td><?= $bd->detail ?></td>
									<td><?= $bd->penanganan ?></td>
									<td><?= $bd->pic ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
						<div class="ml-3">
							<a id="btn-bm" class="btn btn-md btn-outline-primary" data-toggle="modal"
								data-target="#add-bm">
								<i class="fas fa-plus"></i> add
							</a>
						</div>
					</div>
					<!-- end tab BM -->
					<!-- tab other -->
					<div class="tab-pane fade" id="c-other" role="tabpanel" aria-labelledby="a-other">
						<div style="color: #bbb;" class="m-2">
							<h6>this is others data</h6>
						</div>
					</div>
					<!-- end tab other -->
				</div>
				<!----------------------------- end table tab ---------------------------------------->
			</div>
		</div>

		<?php $this->load->view('_tools/flashdata'); ?>
		<div class="card-footer">
			<div class="ml-3">
				<table style="font-size:small">
					<tr>
						<td>Total Produksi &nbsp; </td>
						<td>:</td>
						<td>1024 pcs</td>
					</tr>
					<tr>
						<td>Total Part NG</td>
						<td>:</td>
						<td>6 pcs</td>
					</tr>
					<tr>
						<td>Total Part OK</td>
						<td>:</td>
						<td>1018 pcs</td>
					</tr>
				</table>
				<div id="tes"></div>
			</div>
		</div>
	</dv>
<?php $this->load->view('produksi/modal') ?>

	<script type="text/javascript" src="<?= site_url() ?>assets/js/dekidaka.js"></script>
