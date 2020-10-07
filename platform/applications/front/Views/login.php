<?= $this->section('main') ?>
<?php include_once("_navbar.php") ?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Bootstrap Simple Login Form</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<style>
			.login-form {
				width: 340px;
				margin: 50px auto;
				font-size: 15px;
			}
			.login-form form {
				margin-bottom: 15px;
				background: #f7f7f7;
				box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
				padding: 30px;
			}
			.login-form h2 {
				margin: 0 0 15px;
			}
			.form-control, .btn {
				min-height: 38px;
				border-radius: 2px;
			}
			.btn {
				font-size: 15px;
				font-weight: bold;
			}
		</style>
	</head>
	<body>
	<div class="login-form">
		<form action="attemptLogin" method="post">
			<?= csrf_field() ?>

			<?php if ($config->validFields === ['email']): ?>
			<div class="form-group">
				<label for="login"><?=lang('Auth.email')?></label>
				<input type="email" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
					   name="login" placeholder="<?=lang('Auth.email')?>">
				<div class="invalid-feedback">
					<?= session('errors.login') ?>
				</div>
			</div>
			<?php else: ?>
			<div class="form-group">
				<label for="login"><?=lang('Auth.emailOrUsername')?></label>
				<input type="text" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
					   name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
				<div class="invalid-feedback">
					<?= session('errors.login') ?>
				</div>
			</div>
			<?php endif; ?>

			<div class="form-group">
				<label for="password"><?=lang('Auth.password')?></label>
				<input type="password" name="password" class="form-control  <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
				<div class="invalid-feedback">
					<?= session('errors.password') ?>
				</div>
			</div>

			<?php if ($config->allowRemembering): ?>
			<div class="form-check">
				<label class="form-check-label">
					<input type="checkbox" name="remember" class="form-check-input" <?php if(old('remember')) : ?> checked <?php endif ?>>
					<?=lang('Auth.rememberMe')?>
				</label>
			</div>
			<?php endif; ?>

			<br>

			<button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.loginAction')?></button>
		</form>

		<hr>
		<p class="text-center"><a href="#">Create an Account</a></p>
	</div>
	</body>
	</html>