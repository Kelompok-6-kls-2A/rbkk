<!-- page content -->
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Edit data <small>different form elements</small></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<form method="POST" action="<?= base_url() ?>pekerjaan/store" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama User</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select name="id_user" class="form-control" <?= set_value('id_user'); ?>>
									<option>pilih nama user</option>
									<?php foreach ($user as $u) : ?>
										<option value="<?= $u['id_user']; ?>"><?= $u['nama_user']; ?></option>
									<?php endforeach; ?>
								</select>
								<?= form_error('id_user'); ?>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kategori pekerjaan
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="nama_kategori_pekerjaan" name="nama_kategori_pekerjaan" value="<?= set_value('nama_kategori_pekerjaan'); ?>" class="form-control col-md-7 col-xs-12">
								<?= form_error('nama_kategori_pekerjaan'); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Gaji</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="gaji" class="form-control col-md-7 col-xs-12" value="<?= set_value('gaji'); ?>
								" type="number" name="gaji">
								<?= form_error('gaji'); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Lokasi</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="lokasi" class="form-control col-md-7 col-xs-12" value="<?= set_value('lokasi'); ?>" type="lokasi" name="lokasi">
								<?= form_error('lokasi'); ?>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Jam kerja</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select name="jam_kerja" class="form-control" <?= set_value('jam_kerja'); ?>>
									<option>pilih jam kerja</option>
									<option value="full time">Full time</option>
									<option value="partime">Paruh waktu</option>
								</select>
								<?= form_error('jam_kerja'); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Deskripsi</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="deskripsi" class="form-control col-md-7 col-xs-12" value="<?= set_value('deskripsi'); ?>" type="text" name="deskripsi">
								<?= form_error('deskripsi'); ?>
							</div>
						</div>
						<div class="ln_solid"></div>

						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<button class="btn btn-primary" type="button">Cancel</button>
								<!-- <button class="btn btn-primary" type="reset">Reset</button> -->
								<button type="submit" class="btn btn-success">Submit</button>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- /page content -->
