<div class="login_wrapper">
	<div class="animate form login_form">
		<?= $this->session->flashdata('flash'); ?>
		<section class="login_content">
			<form method="POST" action="<?= base_url(); ?>auth/register">
				<h1>Create Account</h1>
				<div>
					<input type="email" class="form-control" name="email" value="<?= set_value('email'); ?>" placeholder="Email">
					<?= form_error('email') ?>
				</div>
				<div>
					<input type="password" class="form-control" name="password" <?= set_value('password'); ?> placeholder="Password">
					<?= form_error('password') ?>
				</div>
				<div>
					<button class="btn btn-default submit" type="submit">Submit</button>
				</div>

				<div class="clearfix"></div>

				<div class="separator">
					<p class="change_link">Already a member ?
						<a href="<?= base_url(''); ?>auth" class="to_register"> Log in </a>
					</p>

					<div class="clearfix"></div>
					<br />

					<div>
						<!-- <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1> -->
						<p>©<?= date('Y'); ?> Rekayasa Berbasis Komponen - Megawe. <br> Template by <a href="https://colorlib.com">Colorlib</p>
					</div>
				</div>
			</form>
		</section>
	</div>
</div>
