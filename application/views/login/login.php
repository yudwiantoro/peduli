<!DOCTYPE html>
<html lang="en">
	<head>
		<link
		rel="stylesheet"
		href="<?php echo base_url('assets/libraries/bootstrap/css/bootstrap.css'); ?>"
    />
	
	</head>
	<body>

		<div class="container">
			<h1>Masuk Aplikasi Peduli Diri</h1>

			<?php
			if($this->input->get('err')!=null){
				echo $this->input->get('err');
			}
			?>

			<form method="post" action="<?php echo base_url('login/cek'); ?>">
			
				<div class="form-group">
					<label for="user_nik">NIK</label>
					<input type="text" name="user_nik" class="form-control" id="user_nik" placeholder="Masukkan NIK">
				</div>
				
				<div class="form-group">
					<label for="user_nama">Nama Lengkap</label>
					<input type="text" class="form-control" id="user_nama" name="user_nama" placeholder="Masukkan Nama Lengkap">
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>

			<a href="<?php echo base_url('login/register'); ?>">Saya pengguna baru</a>
			

		</div>
	</body>
</html>