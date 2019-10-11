<!-- page content -->
<div class="right_col" role="main">
	<?php echo $this->session->flashdata('hasil'); ?>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Responsive example<small>Users</small></h2>
					<ul class="nav navbar-right panel_toolbox">
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
					</ul>
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
										<form method="POST" action="<?= base_url() ?>client/c_user/store" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama <span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input type="text" id="nama_user" name="nama_user" required="required" class="form-control col-md-7 col-xs-12">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat <span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input type="text" id="alamat_user" name="alamat_user" required="required" class="form-control col-md-7 col-xs-12">
												</div>
											</div>
											<div class="form-group">
												<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input id="tempattl_user" class="form-control col-md-7 col-xs-12" type="text" name="tempattl_user">
												</div>
											</div>
											<div class="form-group">
												<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input id="tl_user" class="form-control col-md-7 col-xs-12" type="date" name="tl_user">
												</div>
											</div>
											<div class="form-group">
												<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input id="email" class="form-control col-md-7 col-xs-12" type="text" name="email">
												</div>
											</div>
											<div class="form-group">
												<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input id="password" class="form-control col-md-7 col-xs-12" type="text" name="password">
												</div>
											</div>
											<div class="form-group">
												<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">no_hp</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input id="no_hp" class="form-control col-md-7 col-xs-12" type="text" name="no_hp">
												</div>
											</div>
											<div class="form-group">
												<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">foto_profil</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input id="foto_profil" class="form-control col-md-7 col-xs-12" type="text" name="foto_profil">
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
								<th>no</th>
								<th>foto</th>
								<th>nama</th>
								<th>alamat</th>
								<th>tempat/ tanggal lahir</th>
								<th>email</th>
								<th>no hp</th>
								<th>kategori</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($users->person as $key => $value) : ?>
								<tr>
									<td><?= ($key + 1) ?></td>
									<td><?= $value->foto_profil ?></td>
									<td><?= $value->nama_user ?></td>
									<td><?= $value->alamat_user ?></td>
									<td><?= $value->tempattl_user ?>,
										<?= $value->tl_user ?></td>
									<td><?= $value->email ?></td>
									<td><?= $value->no_hp ?></td>
									<td><?= $value->kategori_user ?></td>
									<td>
										<a href="<?= base_url() ?>client/c_user/edit/<?= $value->id_user ?>" class="btn btn-primary"><span class="fa fa-edit"></span> edit</a>

										<a href="<?= base_url() ?>client/c_user/destroy/<?= $value->id_user ?>" class="btn btn-danger"><span class="fa fa-trash"></span> hapus</a></td>
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
