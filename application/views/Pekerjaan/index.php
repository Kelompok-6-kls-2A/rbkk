<!-- page content -->
<div class="right_col" role="main">
	<div class="flash-data" flash-data="<?= $this->session->flashdata('flash') ?>"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Responsive example<small>Users</small></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<p class="text-muted font-13 m-b-30">
						<!-- <a href="" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah data</a> -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"> <span class="fa fa-plus"></span> Tambah data</button>

						<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">

									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
										</button>
										<h4 class="modal-title" id="myModalLabel">Tambah user</h4>
									</div>
									<div class="modal-body">
										<form method="POST" action="<?= base_url() ?>user/store" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama <span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input type="text" id="id_user" name="id_user" required="required" class="form-control col-md-7 col-xs-12">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kategori Pekerjaan <span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input type="text" id="nama_kategori_pekerjaan" name="nama_kategori_pekerjaan" required="required" class="form-control col-md-7 col-xs-12">
												</div>
											</div>
											<div class="form-group">
												<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Deskripsi</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input id="deskripsi" class="form-control col-md-7 col-xs-12" type="text" name="deskripsi">
												</div>
											</div>
											<div class="form-group">
												<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Gaji</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input id="gaji" class="form-control col-md-7 col-xs-12" type="date" name="gaji">
												</div>
											</div>
											<div class="form-group">
												<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Lokasi</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input id="lokasi" class="form-control col-md-7 col-xs-12" type="text" name="lokasi">
												</div>
											</div>
											<div class="form-group">
												<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Jam Kerja</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input id="jam_kerja" class="form-control col-md-7 col-xs-12" type="text" name="jam_kerja">
												</div>
											</div>
											<div class="form-group">
												<!-- <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir</label> -->
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input id="idlvl" class="form-control col-md-7 col-xs-12" type="hidden" name="idlvl" value="1">
												</div>
											</div>
											<!-- <div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<div id="gender" class="btn-group" data-toggle="buttons">
														<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
															<input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
														</label>
														<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
															<input type="radio" name="gender" value="female"> Female
														</label>
													</div>
												</div>
											</div> -->
											<!-- <div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
												</div>
											</div> -->
											<div class="modal-footer">
												<button type="reset" class="btn btn-default" data-dismiss="modal">Cancel</button>
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
											<!-- <div class="form-group">
												<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
													<button class="btn btn-primary" type="button">Cancel</button>
													<button class="btn btn-primary" type="reset">Reset</button>
													<button type="submit" class="btn btn-success">Submit</button>
												</div>
											</div> -->

										</form>
									</div>


								</div>
							</div>
						</div>
					</p>

					<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Kategori Pekerjaan</th>
								<th>Deskripsi</th>
								<th>Gaji</th>
								<th>Lokasi</th>
								<th>Jam Kerja</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($pekerjaans as $key => $value) : ?>
								<tr>
									<td><?= ($key + 1) ?></td>
									<td><?= $value['id_user'] ?></td>
									<td><?= $value['nama_kategori_pekerjaan'] ?></td>
									<td><?= $value['deskripsi'] ?></td>
									<td><?= $value['gaji'] ?>,
										<?= $value['lokasi'] ?></td>
									<td><?= $value['jam_kerja'] ?></td>
								
									<td>
										<a href="<?= base_url() ?>user/edit/<?= $value['id_user'] ?>" class="btn btn-primary"><span class="fa fa-edit"></span> edit</a>

										<a href="<?= base_url() ?>user/destroy/<?= $value['id_user'] ?>" class="btn btn-danger"><span class="fa fa-trash"></span> hapus</a></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>


				</div>
			</div>
		</div>

	</div>
</div>
<!-- /page content -->
