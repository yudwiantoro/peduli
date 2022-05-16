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

			<h1>Catatan Perjalanan</h1>
			<hr/>
			
			<table class="table table-bordered">
				<tr>
					<th>No</th>
					<th>Tanggal</th>
					<th>Waktu</th>
					<th>Lokasi</th>
					<th>Suhu</th>
				</tr>
				
				<?php foreach($catatan as $ctt){ ?>
				<tr>
					<td></td>
					<td><?php echo $ctt['catatan_tanggal']; ?></td>
					<td><?php echo $ctt['catatan_jam']; ?></td>
					<td><?php echo $ctt['catatan_lokasi']; ?></td>
					<td><?php echo $ctt['catatan_suhu']; ?></td>
				</tr>
				<?php } ?>
			
			</table>			
			
		</div>
		
		<?php $this->load->view('footer'); ?>
	
	</body>
</html>