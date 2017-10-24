<?php include '../app/Pengguna.php'; ?>
<div class="side-body padding-top">
	<form action="<?php echo URL::Current() ?>" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
			<input type="hidden" name="user_id" value="<?php echo $users_id; ?>">
			<input type="hidden" name="act" value="<?php echo $act; ?>">
			<div class="form-group">
				<div class="col-md-8">
					<legend><h1>User  <?php echo $username; ?></h1></legend>
					<?php echo isset($errorRegister)?$errorRegister:''; ?>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-8">
					<label for="password">Kata Sandi Baru</label>
					<input type="password" required pattern="(?=.*).{5,}" onchange="form.re_password.pattern = this.value;" class="form-control" name="password">
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-8">
					<label for="re_password">Ulangi Kata Sandi</label>
					<input type="password" pattern="(?=.*).{5,}" required class="form-control" name="re_password">
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-8">
					<label for="captcha">Kode Verifikasi</label><br>
					<img src="<?php echo URL::Link('../app/lib/captcha.php') ?>" alt=""><br><br>
					<input type="text" required name="captcha" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-8">
					<input type="submit" value="SIMPAN" name="simpan" class="btn btn-primary col-lg-12">
				</div>
			</div>
	</form>
</div>  