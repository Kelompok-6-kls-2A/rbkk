<!-- page content -->
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Tambah data <small>user</small></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<form method="POST" action="<?= base_url() ?>user/store" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="nama_user" name="nama_user" value="<?= set_value('nama_user') ?>" class="form-control col-md-7 col-xs-12">
								<?= form_error('nama_user') ?>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat_user">Alamat
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="alamat_user" name="alamat_user" value="<?= set_value('alamat_user') ?>" class="form-control col-md-7 col-xs-12">
								<?= form_error('alamat_user') ?>
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="tempattl_user" class="form-control col-md-7 col-xs-12" value="<?= set_value('tempattl_user') ?>" type="text" name="tempattl_user">
								<?= form_error('tempattl_user') ?>
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="tl_user" class="form-control col-md-7 col-xs-12" value="<?= set_value('tl_user') ?>" type="date" name="tl_user">
								<?= form_error('tl_user') ?>
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="text" class="form-control col-md-7 col-xs-12" value="<?= set_value('email') ?>" type="text" name="email">
								<?= form_error('email') ?>
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="password" class="form-control col-md-7 col-xs-12" value="<?= set_value('password') ?>" type="text" name="password">
								<?= form_error('password') ?>
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">no_hp</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="no_hp" class="form-control col-md-7 col-xs-12" value="<?= set_value('no_hp') ?>" type="text" name="no_hp">
								<?= form_error('no_hp') ?>
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">foto_profil</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="foto_profil" class="form-control col-md-7 col-xs-12" type="file" name="foto_profil">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="idlvl" class="form-control col-md-7 col-xs-12" type="hidden" name="idlvl" value="1">
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
