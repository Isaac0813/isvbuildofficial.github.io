<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="bs-example">
    <div class="panel-group" id="accordion">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="# collapseOne">Welcom to SNAKE VPN PANEL</a>
                </h4>
            </div>

<div class="container">
	<div class="row">
		<div class="col-lg-10">
			<div class="panel panel-default">
				<div class="panel-heading"></div>
				<div class="panel-body">
				<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($error)) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="col-md-12">
			<div class="page-header">
				<h3>Sign up</h3>
			</div>
			<?= form_open() ?>
				<div class="form-group">
				<label for = "username"> Username </label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Username">
				<p class = "help-block"> contains at least 4 letters or numbers</p>
				</div>
				<div class="form-group">
				<label for = "email"> Email </label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
				<p class = "help-block"> The correct email address</p>
				</div>
				<div class="form-group">
					<label for = "password"> Password </label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Enter a password">
				<p class = "help-block"> at least 6 characters</p>
				</div>
				<div class="form-group">
				<label for = "password_confirm"> Confirm password </label>
					<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirm your password">
					<p class ="help-block"> must match the password above</p>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Create account">
				</div>
			</form>
		</div>
				</div>
				<div class="panel-footer"></div>
			</div>
		</div>
	</div><!-- .row -->
</div><!-- .container -->
