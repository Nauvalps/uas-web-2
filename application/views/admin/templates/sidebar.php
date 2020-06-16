<aside class="app-sidebar">

	<ul class="app-menu">
		<li style="margin-left: 5px;" class="user">
			<img src="<?php echo base_url('assets/foto/foto.jpg')?>" alt="" style="border-radius: 70px; height: 70px;">
			<h5 class="name">NAUVAL PURNOMO</h5>
			<h5 class="jabatan">Petugas</h5>
		</li>
		<li style="margin-top: 20px;">
			<h5 class="title" style="text-align: center; background: #eee; font-weight: 600; font-size: 16px;">
				NAVIGATION
			</h5>
		</li>
		<li class="nav-item"><a
				class="app-menu__item nav-link <?php if($this->uri->segment(1)=="home"){echo "active";}?>"
				id="app-menu-item" href="<?php echo base_url('home');?>"><img src="<?php echo base_url('assets/icon/layout.png')?>"
					style="width: 20px; height: auto;">&nbsp;Home</a></li>
		<li class="nav-item"><a
				class="app-menu__item nav-link <?php if($this->uri->segment(1)=="mutasi_masuk"){echo "active";}?>"
				id="app-menu-item" href="<?php echo base_url('mutasi_masuk');?>"><img src="<?php echo base_url('assets/icon/add1.png')?> "
					style="width: 20px; height: auto;">&nbsp;Mutasi Masuk</a></li>
		<li class="nav-item"><a
				class="app-menu__item nav-link <?php if($this->uri->segment(1)=="mutasi_keluar"){echo "active";}?>"
				id="app-menu-item" href="<?php echo base_url('mutasi_keluar');?>"><img
					src="<?php echo base_url('assets/icon/time-and-date.png')?>" style="width: 20px; height: auto;">&nbsp;Mutasi Keluar</a></li>
		<li class="nav-item"><a
				class="app-menu__item nav-link <?php if($this->uri->segment(1)=="data_siswa"){echo "active";}?>"
				id="app-menu-item" href="<?php echo base_url('data_siswa');?>"><img src="<?php echo base_url('assets/icon/student.png')?>"
					style="width: 20px; height: auto;">&nbsp;Data Siswa</a></li>
		<li class="nav-item"><a
				class="app-menu__item nav-link <?php if($this->uri->segment(1)=="managemen_users"){echo "active";}?>"
				id="app-menu-item" href="<?php echo base_url('managemen_users');?>"><img
					src="<?php echo base_url('assets/icon/organization.png')?>" style="width: 20px; height: auto;">&nbsp;Management Users</a>
		</li>
		<li class="nav-item"><a
				class="app-menu__item nav-link <?php if($this->uri->segment(1)=="log_users"){echo "active";}?>"
				id="app-menu-item" href="<?php echo base_url('log_users');?>"><img src="<?php echo base_url('assets/icon/sign-out.png')?>"
					style="width: 20px; height: auto;">&nbsp;Log Users</a></li>
	</ul>
</aside>
