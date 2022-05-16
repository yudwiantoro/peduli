			
			<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
				<a href="javascript:void(0);" class="icon" id="menu-toggle">
					<span class="menuicon" data-feather="arrow-left" id="iconleft"></span>
				</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url('admin'); ?>">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>pengaturan">Pengaturan</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $this->session->userdata['user_nama']; ?>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Profil</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url('login/logout'); ?>">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>