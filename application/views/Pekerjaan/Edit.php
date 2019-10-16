<!-- page content -->
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Edit data <small>different form elements</small></h2>
					<!-- <ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Settings 1</a>
								</li>
								<li><a href="#">Settings 2</a>
								</li>
							</ul>
						</li>
						<li><a class="close-link"><i class="fa fa-close"></i></a>
						</li>
					</ul> -->
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<form method="POST" action="<?= base_url() ?>pekerjaan/update" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
						<div class="form-group">
							<input type="hidden" value="<?= $r['id_user'] ?>" name="id_user">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="nama_user" name="nama_user" required="required" value="<?= $r['nama_user'] ?>" class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kategori pekerjaan <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="nama_kategori_pekerjaan" name="nama_kategori_pekerjaan" value="<?= $r['nama_kategori_pekerjaan'] ?>" required="required" class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Deskripsi</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="deskripsi" class="form-control col-md-7 col-xs-12" value="<?= $r['deskripsi'] ?>" type="text" name="deskripsi">
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Gaji</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="gaji" class="form-control col-md-7 col-xs-12" value="<?= $r['gaji'] ?>
								" type="text" name="gaji">
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Lokasi</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="lokasi" class="form-control col-md-7 col-xs-12" value="<?= $r['lokasi'] ?>" type="lokasi" name="lokasi">
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Jam Kerja</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="jam_kerja" class="form-control col-md-7 col-xs-12" value="<?= $r['jam_kerja'] ?>" type="text" name="jam_kerja">
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
