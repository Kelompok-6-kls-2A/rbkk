        <!-- page content -->
        <div class="right_col" role="main">
        	<div class="">
        		<div class="page-title">
        			<div class="title_left">
        				<h3></h3>
        			</div>
        		</div>

        		<div class="clearfix"></div>

        		<div class="row">
        			<div class="col-md-12 col-sm-12 col-xs-12">

        				<div id="myCarousel" class="carousel slide col-xs-12" data-ride="carousel">
        					<!-- Indicators -->
        					<ol class="carousel-indicators">
        						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        						<li data-target="#myCarousel" data-slide-to="1"></li>
        						<li data-target="#myCarousel" data-slide-to="2"></li>
        					</ol>

        					<!-- Wrapper for slides -->
        					<div class="carousel-inner">
        						<div class="item active">
        							<img src="<?= base_url(); ?>assets/image/1.jpg" alt="Los Angeles" width="500px">
        						</div>
        						<div class="item">
        							<img src="<?= base_url(); ?>assets/image/2.jpg" alt="Los Angeles" width="500px">
        						</div>
        						<div class="item">
        							<img src="<?= base_url(); ?>assets/image/3.jpg" alt="Los Angeles" width="500px">
        						</div>
        					</div>

        					<!-- Left and right controls -->
        					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
        						<span class="glyphicon glyphicon-chevron-left"></span>
        						<span class="sr-only">Previous</span>
        					</a>
        					<a class="right carousel-control" href="#myCarousel" data-slide="next">
        						<span class="glyphicon glyphicon-chevron-right"></span>
        						<span class="sr-only">Next</span>
        					</a>
        				</div>
        				<br>
        				<div class="clearfix"></div>
        				<div class="x_panel">
        					<div class="x_title">
        						<h2>Daftar Kerjaan</h2>
        						<div class="clearfix"></div>
        					</div>
        					<div class="x_content">
        						<!-- start project list -->
        						<table class="table table-striped projects">
        							<thead>
        								<tr>
        									<th style="width: 1%">#</th>
        									<th style="width: 20%">Nama pekerjaan</th>
        									<th>Nama owner</th>
        									<th>Lokasi</th>
        									<th>Jam kerja</th>
        								</tr>
        							</thead>
        							<tbody>
        								<?php foreach ($pekerjaan as $key => $p) : ?>
        									<tr>
        										<td><?= ($key + 1); ?></td>
        										<td>
        											<a><?= $p['nama_kategori_pekerjaan']; ?></a>
        											<br />
        											<small><?= "Created" . $p['created_add']; ?></small>
        										</td>
        										<td>
        											<ul class="list-inline">
        												<li>
        													<?= $p['nama_user']; ?>
        													<!-- <img src="images/user.png" class="avatar" alt="Avatar"> -->
        												</li>
        											</ul>
        										</td>
        										<td class="project_progress">
        											<?= $p['lokasi']; ?>
        											<!-- <div class="progress progress_sm">
        												<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="57"></div>
        											</div>
        											<small>57% Complete</small> -->
        										</td>
        										<td>
        											<?= $p['jam_kerja']; ?>
        											<!-- <button type="button" class="btn btn-success btn-xs">Success</button> -->
        										</td>
        										<!-- <td>
        											<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
        											<a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
        											<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
        										</td> -->
        									</tr>
        								<?php endforeach; ?>
        							</tbody>
        						</table>
        						<!-- end project list -->
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- /page content -->
