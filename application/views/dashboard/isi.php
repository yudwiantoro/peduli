<!DOCTYPE html>
<html lang="en">
	<head>
		<link
		rel="stylesheet"
		href="<?php echo base_url('assets/libraries/bootstrap/css/bootstrap.css'); ?>"
    />
				
		<link href="<?php echo base_url(); ?>assets/styles/dashboard.css" rel="stylesheet">
		
		<link href="<?php echo base_url(); ?>assets/styles/simple-sidebar.css" rel="stylesheet">
	
	</head>
	<body>
		
		<?php $this->load->view('navbar'); ?>
		
		<?php $this->load->view('sidebar'); ?>
		
		<div class="container-fluid">			

			<h1>Isi Catatan Perjalanan</h1>		

			<form action="<?php echo base_url('dashboard/isi_simpan'); ?>" 
			method="post">
			
				<div class="form-group">
					<label for="catatan_tanggal">Tanggal Perjalanan</label>
					<input type="text" name="catatan_tanggal" class="form-control" id="catatan_tanggal" placeholder="Masukkan Tanggal">
				</div>
				
				<div class="form-group">
					<label for="catatan_jam">Jam Perjalanan</label>
					<input type="text" name="catatan_jam" class="form-control" id="catatan_jam" placeholder="Masukkan Jam">
				</div>
				
				<div class="form-group">
					<label for="catatan_lokasi">Lokasi Perjalanan</label>
					<input type="text" name="catatan_lokasi" class="form-control" id="catatan_lokasi" placeholder="Masukkan Lokasi">
				</div>
				
				<div class="form-group">
					<label for="catatan_suhu">Suhu Tubuh</label>
					<input type="text" name="catatan_suhu" class="form-control" id="catatan_suhu" placeholder="Masukkan Suhu Tubuh">
				</div>
				
				<button type="submit" class="btn btn-primary">Simpan Perjalanan</button>
			
			</form>
			
		</div>
		
		<?php $this->load->view('footer'); ?>
	
	</body>
</html>