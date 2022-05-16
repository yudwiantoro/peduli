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
			<h1>Halaman Register</h1>

			<?php
			if($this->input->get('err')!=null){
				echo $this->input->get('err');
			}
			?>

			<form action="<?php echo base_url('login/register_simpan'); ?>" 
			method="post">
			
				<div class="form-group">
					<label for="user_nik">NIK</label>
					<input type="text" name="user_nik" class="form-control" id="user_nik" placeholder="Masukkan NIK">
				</div>
				
				<div class="form-group">
					<label for="user_nama">Nama Lengkap</label>
					<input type="text" name="user_nama" class="form-control" id="user_nama" placeholder="Masukkan Nama Lengkap">
				</div>
				
				<div class="form-group">
					<label for="user_alamat">Alamat Lengkap</label>
					<input type="text" name="user_alamat" class="form-control" id="user_alamat" placeholder="Masukkan Alamat Lengkap">
				</div>
				
				<button type="submit" class="btn btn-primary">Simpan</button>
				
			</form>
			
		</div>
	</body>
</html>