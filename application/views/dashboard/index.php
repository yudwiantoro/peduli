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

			<h1>Dashboard</h1>
			<hr/>
			<h3>Selamat datang <?php echo ucwords(strtolower($this->session->userdata['user_nama'])); ?></h3>
			
		</div>
		
		<?php $this->load->view('footer'); ?>
	
	</body>
</html>