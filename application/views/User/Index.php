<!-- page content -->
<div class="right_col" role="main">
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
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
						<a href="<?= base_url(); ?>user/add" class="btn btn-primary"> <span class="fa fa-plus"></span> Tambah data</a>

					</p>

					<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>no</th>
								<th>foto</th>
								<th>nama</th>
								<th>email</th>
								<th>no hp</th>
								<th>kategori</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($users as $key => $value) : ?>
								<tr>
									<td><?= ($key + 1) ?></td>
									<td><img src="<?= base_url() ?>assets/image/<?= $value['foto_profil'] ?>" class="img-circle img-responsive"></td>
									<td><?= $value['nama_user'] ?></td>
									<td><?= $value['email'] ?></td>
									<td><?= $value['no_hp'] ?></td>
									<td><?= $value['kategori_user'] ?></td>
									<td>
										<a href="<?= base_url() ?>user/show/<?= $value['id_user'] ?>" class="btn btn-warning"><span class="fa fa-eye"></span> detail</a>
										<a href="<?= base_url() ?>user/edit/<?= $value['id_user'] ?>" class="btn btn-primary"><span class="fa fa-edit"></span> edit</a>
										<a href="<?= base_url() ?>user/destroy/<?= $value['id_user'] ?>" class="btn btn-danger tombol-hapus"><span class="fa fa-trash"></span> hapus</a></td>
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
