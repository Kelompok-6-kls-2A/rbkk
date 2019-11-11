<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Plain Page</h3>
			</div>

		</div>

		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>User detail</h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<div class="col-md-4 col-sm-4 col-xs-12 profile_details">
							<div class="well profile_view">
								<div class="col-sm-12">
									<h4 class="brief"><i><?= $r['kategori_user']; ?></i></h4>
									<div class="left col-xs-7">
										<h2><?= $r['nama_user']; ?></h2>
										<!-- <p><strong>About: </strong> Web Designer / UX / Graphic Artist / Coffee Lover </p> -->
										<ul class="list-unstyled">
											<li><i class="fa fa-at"></i> Email: <?= $r['email']; ?></li>
											<li><i class="fa fa-home"></i> Alamat: <?= $r['alamat_user']; ?></li>
											<?php if ($r['tempattl_user'] != null) : ?>
												<li><i class="fa fa-calendar"></i> Tempat,tanggal lahir : <?= $r['tempattl_user'] . ',' . $r['tl_user']; ?></li>
											<?php endif; ?>
											<li><i class="fa fa-calendar"></i> Tempat,tanggal lahir : --, ----</li>
											<li><i class="fa fa-phone"></i> Nomor Handphone : <?= $r['no_hp']; ?></li>
										</ul>
									</div>
									<div class="right col-xs-5 text-center">
										<img src="<?= base_url(); ?>assets/image/<?= $r['foto_profil']; ?>" alt="" class="img-circle img-responsive">
									</div>
								</div>
								<div class="col-xs-12 bottom text-center">
									<div class="col-xs-12 col-sm-6">
										<a href="<?= base_url(); ?>user" class="btn btn-success btn-xs">
											<i class="fa fa-arrow-left"> </i> Kembali
										</a>
										<a href="<?= base_url(); ?>user/edit/<?= $r['id_user']; ?>" class="btn btn-primary btn-xs">
											<i class="fa fa-edit"> </i> Edit data
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /page content -->
