<a class="hiddenanchor" id="signup"></a>
<a class="hiddenanchor" id="signin"></a>

<div class="login_wrapper">
	<div class="animate form login_form">
		<?= $this->session->flashdata('flash'); ?>
		<section class="login_content">
			<form method="POST" action="<?= base_url(); ?>auth/store">
				<h1>Login Megawe</h1>
				<div>
					<input type="email" id="email" name="email" class="form-control" value="<?= set_value('email'); ?>" placeholder="Email" />
					<?= form_error('email') ?>
				</div>
				<div>
					<input type="password" id="password" name="password" class="form-control" placeholder="Password" />
					<?= form_error('password') ?>
				</div>
				<div>
					<button type="submit" class="btn btn-default">Log in</button>
					<!-- <a class="reset_pass" href="#">Lost your password?</a> -->
				</div>


				<div class="separator">

					<p class="change_link">No have account?
						<a href="<?= base_url(''); ?>auth/daftar" class="to_register"> Create Account </a>
					</p>
					<div class="clearfix"></div>
					<a href="<?= base_url(); ?>landing" class="btn btn-warning" value="Cancel">Cancel</a>
					<div class="clearfix"></div>
					<br />

					<div>
						<!-- <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1> -->
						<p>©<?= date('Y'); ?> Rekayasa Berbasis Komponen - Megawe.<br> Template by <a href="https://colorlib.com">Colorlib</p>
					</div>
				</div>
			</form>
		</section>
	</div>
</div>
