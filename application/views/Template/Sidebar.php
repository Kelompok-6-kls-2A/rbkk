<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="<?php echo base_url('user') ?>" class="site_title"><i class="fa fa-user"></i> <span>Megawe</span></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile clearfix">
						<div class="profile_pic">
							<img src="<?php echo base_url() ?>/assets/image/<?= $this->session->userdata('foto_profil'); ?>" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Welcome,</span>
							<h2><?= $this->session->userdata('nama_user'); ?></h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>General</h3>
							<ul class="nav side-menu">
								<li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-home"></i> Dashboard</a></li>
								<?php if ($this->session->userdata('idlvl') == 1) : ?>
									<li><a><i class="fa fa-edit"></i> Master<span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu">
											<li><a href="<?php echo base_url() ?>pekerjaan">Pekerjaan</a></li>
										</ul>
									</li>
									<li><a><i class="fa fa-user"></i> Akun<span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu">
											<li><a href="<?php echo base_url() ?>user">Data Akun</a></li>
										</ul>
									</li>
								<?php endif; ?>

								<?php if ($this->session->userdata('idlvl') == 2) : ?>
									<li><a href="#"><i class="fa fa-folder"></i> Cari Pekerjaan</a></li>
								<?php endif; ?>

								<?php if ($this->session->userdata('idlvl') == 3) : ?>
									<li><a href="#"><i class="fa fa-folder"></i>Pekerjaan</a></li>
								<?php endif; ?>
								<!-- <li><a href="<?php echo base_url() ?>caripekerjaan"><i class="fa fa-folder"></i>cari Pekerjaan</a></li> -->
							</ul>
						</div>
					</div>
					<!-- /sidebar menu -->

					<!-- /menu footer buttons -->
					<div class="sidebar-footer hidden-small">
						<a data-toggle="tooltip" data-placement="top">
							<span class="fa fa-bars" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top">
							<span class="fa fa-bars" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top">
							<span class="fa fa-bars" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top">
							<span class="fa fa-bars" aria-hidden="true"></span>
						</a>
					</div>
					<!-- /menu footer buttons -->
				</div>
			</div>
