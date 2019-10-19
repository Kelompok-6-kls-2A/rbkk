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
						<a href="<?= base_url(); ?>pekerjaan/add" class="btn btn-primary"> <span class="fa fa-plus"></span> Tambah data</a>
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
										<a href="<?= base_url() ?>pekerjaan/edit/<?= $value['id_pekerjaan'] ?>" class="btn btn-primary"><span class="fa fa-edit"></span> edit</a>

										<a href="<?= base_url() ?>pekerjaan/destroy/<?= $value['id_pekerjaan'] ?>" class="btn btn-danger"><span class="fa fa-trash"></span> hapus</a></td>
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
