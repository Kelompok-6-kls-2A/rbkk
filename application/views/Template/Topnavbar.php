        <!-- top navigation -->
        <div class="top_nav">
        	<div class="nav_menu">
        		<nav>
        			<div class="nav toggle">
        				<a id="menu_toggle"><i class="fa fa-bars"></i></a>
        			</div>

        			<?php if ($this->session->userdata('email') == true) : ?>
        				<ul class="nav navbar-nav navbar-right">
        					<li class="">
        						<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        							<img src="<?php echo base_url() ?>/assets/image/<?= $this->session->userdata('foto_profil'); ?>" alt=""><?= $this->session->userdata('email'); ?>
        							<span class=""></span>
        						</a>
        						<ul class="dropdown-menu dropdown-usermenu pull-right">
        							<li><a href="<?= base_url(); ?>user/show/<?= $this->session->userdata('id_user'); ?>"> Profile</a></li>
        							<li>
        								<a href="javascript:;">
        									<span class="badge bg-red pull-right">50%</span>
        									<span>Settings</span>
        								</a>
        							</li>
        							<li><a href="javascript:;">Help</a></li>
        							<li><a href="<?= base_url(); ?>auth/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
        						</ul>
        					</li>
        				</ul>
        			<?php endif; ?>
        		</nav>
        	</div>
        </div>
        <!-- /top navigation -->
