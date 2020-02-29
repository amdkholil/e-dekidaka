	<!---------------------------------------------------------------------------------------------->
	<!--------------------------------- Kumpulan modal --------------------------------------------->
	<!---------------------------------------------------------------------------------------------->
	<!-- modal tambah produksi -->
	<div class="modal fade" id="add-prod" tabindex="-1" role="dialog" aria-labelledby="btn-prod" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form method="POST" action="<?= site_url() ?>dekidaka/addprod">
					<div class="modal-header">
						<h6 class="modal-title">Tambah data produksi</h6>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<input type="hidden" name="id_prod" value="<?= $prod[0]->id ?>">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Jam</span>
								</div>
								<input type="time" name="jam0" class="form-control" required>
								<div class="input-group-append">
									<span class="input-group-text"> - </span>
								</div>
								<input type="time" name="jam1" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">model</span>
								</div>
								<select type="text" name="id_model" class="form-control" required>
									<option></option>
									<?php foreach ($models as $model) { ?>
									<option value="<?= $model->id ?>"><?= $model->nama ?></option>
								<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Qty Produksi</span>
								</div>
								<input type="number" name="qty" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Remark</span>
								</div>
								<textarea name="remark" class="form-control"></textarea>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-md btn-primary">
							<i class="fa fa-save"></i> Simpan
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- end modal tambah produksi -->

	<!-- Modal edit produksi -->
	<div class="modal fade" id="edit-prod" tabindex="-1" role="dialog" aria-labelledby="btn-prod" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form method="POST" action="<?= site_url() ?>dekidaka/editprod">
					<div class="modal-header">
						<h6 class="modal-title">Ubah data produksi</h6>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<input type="hidden" name="id_prod" id="id_prod">
						<input type="hidden" name="id" id="id">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Jam</span>
								</div>
								<input type="time" name="jam0" class="form-control" id="jam0" required>
								<div class="input-group-append">
									<span class="input-group-text"> - </span>
								</div>
								<input type="time" name="jam1" class="form-control" id="jam1" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">model</span>
								</div>
								<select type="text" name="id_model" class="form-control" id="id_model" required>
									<option></option>
									<?php foreach ($models as $model) { ?>
									<option value="<?= $model->id ?>"><?= $model->nama ?></option>
								<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Qty Produksi</span>
								</div>
								<input type="number" name="qty" class="form-control" id="qty" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Remark</span>
								</div>
								<textarea name="remark" class="form-control" id="remark"></textarea>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-md btn-primary">
							<i class="fa fa-save"></i> Simpan
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- End Model edit produksi -->

	<!-- modal tambah NG -->
	<div class="modal fade" id="add-ng" tabindex="-1" role="dialog" aria-labelledby="btn-ng" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form method="POST" action="<?= site_url('dekidaka/addng')?>">
					<div class="modal-header">
						<h6 class="modal-title">Tambah data NG prosesss</h6>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<input type="hidden" name="id_prod" value="<?= $prod[0]->id ?>">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Jam</span>
								</div>
								<input type="time" name="jam" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Model</span>
								</div>
								<select type="text" name="id_model" class="form-control" required>
									<option></option>
									<?php foreach($models as $m){ ?>
									<option value="<?= $m->id ?>"><?= $m->nama ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Jenis NG</span>
								</div>
								<select type="text" name="id_ng" class="form-control" required>
									<option></option>
									<?php foreach($ng as $n ){ ?>
									<option value="<?= $n->id ?>"><?= $n->nama ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Qty NG</span>
								</div>
								<input type="number" name="qty" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Remark</span>
								</div>
								<textarea name="remark" class="form-control"></textarea>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-md btn-primary">
							<i class="fa fa-save"></i> Simpan
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- end modal tambah NG -->


	<!-- modal edit NG -->
	<div class="modal fade" id="edit-ng" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form method="POST" action="<?= site_url('dekidaka/editng')?>">
					<div class="modal-header">
						<h6 class="modal-title">Ubah data NG prosesss</h6>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<input type="hidden" name="id_prod" id="id_prod">
						<input type="hidden" name="id" id="id">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Jam</span>
								</div>
								<input type="time" name="jam" class="form-control" id="jam" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Model</span>
								</div>
								<select type="text" name="id_model" class="form-control" id="id_model" required>
									<option></option>
									<?php foreach($models as $m){ ?>
									<option value="<?= $m->id ?>"><?= $m->nama ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Jenis NG</span>
								</div>
								<select type="text" name="id_ng" class="form-control" id="id_ng" required>
									<option></option>
									<?php foreach($ng as $n ){ ?>
									<option value="<?= $n->id ?>"><?= $n->nama ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Qty NG</span>
								</div>
								<input type="number" name="qty" class="form-control" id="qty" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Remark</span>
								</div>
								<textarea name="remark" class="form-control" id="remark"></textarea>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-md btn-primary">
							<i class="fa fa-save"></i> Simpan
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- end modal edit NG -->



	<!-- modal tambah BM -->
	<div class="modal fade" id="add-bm" tabindex="-1" role="dialog" aria-labelledby="btn-bm" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form method="POST" action="<?= site_url() ?>dekidaka/addbm">
					<div class="modal-header">
						<h6 class="modal-title">Tambah data Breakdown</h6>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<input type="hidden" name="id_prod" value="<?= $prod[0]->id ?>">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Jam</span>
								</div>
								<input type="time" name="jam" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Menit</span>
								</div>
								<input type="number" name="menit" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Mesin</span>
								</div>
								<input type="text" name="mesin" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Kategori</span>
								</div>
								<select type="text" name="bm" class="form-control">
									<option></option>
									<?php foreach($bm as $b){ ?>
									<option value="<?= $b->id ?>"><?= $b->nama ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">Detail BM</span>
									</div>
									<textarea name="detail" class="form-control"></textarea>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Penanganan</span>
								</div>
								<textarea name="action" class="form-control"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Nama</span>
								</div>
								<input type="text" name="pic" class="form-control">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-md btn-primary">
							<i class="fa fa-save"></i> Simpan
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- end modal tambah BM -->

	<!-- modal edit BM -->
	<div class="modal fade" id="edit-bm" tabindex="-1" role="dialog" aria-labelledby="btn-bm" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form method="POST" action="<?= site_url() ?>dekidaka/editbm">
					<div class="modal-header">
						<h6 class="modal-title">edit data Breakdown</h6>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<input type="hidden" name="id" id="id_bd">
						<input type="hidden" name="id_prod" id="id_prod_bd">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Jam</span>
								</div>
								<input type="time" name="jam" id="jam_bd" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Menit</span>
								</div>
								<input type="number" name="menit" id="menit_bd" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Mesin</span>
								</div>
								<input type="text" name="mesin" id="mesin_bd" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Kategori</span>
								</div>
								<select type="text" name="bm" id="id_bm_bd" class="form-control">
									<option></option>
									<?php foreach($bm as $b){ ?>
									<option value="<?= $b->id ?>"><?= $b->nama ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">Detail BM</span>
									</div>
									<textarea name="detail" id="detail_bd" class="form-control"></textarea>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Penanganan</span>
								</div>
								<textarea name="action" id="penanganan_bd" class="form-control"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Nama</span>
								</div>
								<input type="text" name="pic" id="pic_bd" class="form-control">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-md btn-primary">
							<i class="fa fa-save"></i> Simpan
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- end modal edit BM -->
	<!---------------------------------------------------------------------------------------------->
