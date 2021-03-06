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
					<form method="POST" action="<?= base_url() ?>user/update" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
						<div class="form-group">
							<input type="hidden" value="<?= $r['id_user'] ?>" name="id_user">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="nama_user" name="nama_user" required="required" value="<?= $r['nama_user'] ?>" class="form-control col-md-7 col-xs-12">
								<?= form_error('nama_user') ?>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="alamat_user" name="alamat_user" value="<?= $r['alamat_user'] ?>" required="required" class="form-control col-md-7 col-xs-12">
								<?= form_error('alamat_user') ?>
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="tempattl_user" class="form-control col-md-7 col-xs-12" value="<?= $r['tempattl_user'] ?>" type="text" name="tempattl_user">
								<?= form_error('tempattl_user') ?>
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="tl_user" class="form-control col-md-7 col-xs-12" value="<?= $r['tl_user'] ?>" type="date" name="tl_user">
								<?= form_error('tl_user') ?>
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="email" class="form-control col-md-7 col-xs-12" value="<?= $r['email'] ?>" type="text" name="email">
								<?= form_error('email') ?>
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="password" class="form-control col-md-7 col-xs-12" value="<?= $r['password'] ?>" type="text" name="password">
								<?= form_error('password') ?>
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">no_hp</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="no_hp" class="form-control col-md-7 col-xs-12" value="<?= $r['no_hp'] ?>" type="text" name="no_hp">
								<?= form_error('no_hp') ?>
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">foto_profil</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="foto_profil" class="form-control col-md-7 col-xs-12" value="<?= $r['foto_profil'] ?>" type="text" name="foto_profil">
							</div>
						</div>
						<div class="form-group">
							<!-- <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir</label> -->
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="idlvl" class="form-control col-md-7 col-xs-12" value="<?= $r['idlvl'] ?>" type="hidden" name="idlvl" value="1">
							</div>
						</div>
						<div class="ln_solid"></div>

						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<a href="<?= base_url(); ?>user" class="btn btn-primary cancel" type="button">Cancel</a>
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
