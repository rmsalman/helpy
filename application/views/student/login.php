<div class="container">
    <?php echo validation_errors(); ?>

    <h2 class="text-center"><?php echo $this->session->flashdata('user_loggedin') . $this->session->flashdata('login_failed') . $this->session->flashdata('user_loggedout'); ?></h2>

    <form action="<?= $base_url;?>student/login" method="post" accept-charset="utf-8">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?php echo $title; ?></h1>
			<div class="form-group">
				<input type="text" name="username" value="<?php echo set_value('username'); ?>" class="form-control" placeholder="Enter Email" required="" autofocus="">

                <?php echo form_error('username name', '<div class="error">', '</div>'); ?>
            </div>
			<div class="form-group">
				<input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" placeholder="Enter Password" required="" autofocus="">

                <?php echo form_error('password', '<div class="error">', '</div>'); ?>
            </div>
			<button type="submit" class="btn btn-primary btn-block">Login</button>
		</div>
	</div>
</form>
    <h4 class="text-center">or</h4>
    <div class="text-center">
    <a href="<?= $base_url?>student/register" class="btn btn-primary">Register Now</a>
    </div>
</div>