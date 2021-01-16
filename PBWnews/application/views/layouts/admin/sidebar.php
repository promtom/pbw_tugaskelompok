<!-- Sidebar -->
<?php
	if($this->session->foto){
		$foto = 'assets/img/profil/'.$this->session->foto;
	}
	else $foto = 'assets/img/profil/profil0.png';
?>

<div class="sidebar sidebar-style-2">
	<div class="sidebar-wrapper scrollbar scrollbar-inner">
		<div class="sidebar-content">
			<div class="user">
				<div class="avatar-sm float-left mr-2">
					<img src="<?= base_url($foto) ?>" alt="..." class="avatar-img rounded-circle">
				</div>
				<div class="info">
					<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
						<span>
							<?= wordwrap($this->session->name, 21,"<br>\n");?>
							<span class="user-level">
								<?php
									if($this->session->status==1) echo("Admin");
									else echo("User");
								?>
							</span>
							<span class="caret"></span>
						</span>
					</a>
					<div class="clearfix"></div>
					<div class="collapse in" id="collapseExample">
						<ul class="nav">
							<li>
								<a class="dropdown-item"  href="#" data-toggle="modal" data-target="#changepasswordModal">
									<span class="link-collapse">Change Password</span>
								</a>
							</li>
							<li>
								<a class="dropdown-item"  href="#" data-toggle="modal" data-target="#changebioModal">
									<span class="link-collapse">Change Profil</span>
								</a>
							</li>
							<li>
								<?php $this->load->view('layouts/admin/logout'); ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<ul class="nav nav-primary">
				<li class="nav-item <?= isset($mHome) ? 'active' : ''; ?>">
					<a href="<?= base_url('admin/home'); ?>">
						<i class="fas fa-home"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('blog'); ?>" target="_blank">
						<i class="fas fa-tachometer-alt"></i>
						<p>Situsnya</p>
					</a>
				</li>
				<?php if ($this->session->status==1) : ?>
				<li class="nav-section">
					<span class="sidebar-mini-icon">
						<i class="fas fa-ellipsis-h"></i>
					</span>
					<h4 class="text-section">Menu Admin</h4>
				</li>
				<li class="nav-item <?= isset($mUser) ? 'active' : ''; ?>">
					<a href="<?= base_url('admin/user'); ?>">
						<i class="fas fa-users-cog"></i>
						<p>User</p>
					</a>
				</li>
				<!-- <li class="nav-item <?= isset($mLog) ? 'active' : ''; ?>">
					<a href="<?= base_url('admin/log'); ?>">
						<i class="flaticon-list"></i>
						<p>Log</p>
					</a>
				</li> -->
        	<?php endif; ?>
				<li class="nav-section">
					<span class="sidebar-mini-icon">
						<i class="fas fa-ellipsis-h"></i>
					</span>
					<h4 class="text-section">Menu</h4>
				</li>
				<li class="nav-item <?= isset($mBerita) ? 'active' : ''; ?>">
					<a href="<?= base_url('admin/berita'); ?>">
						<i class="fas fa-book"></i>
						<p>Berita</p>
					</a>
				</li>
				<li class="nav-item <?= isset($mKategori) ? 'active' : ''; ?>">
					<a href="<?= base_url('admin/kategori'); ?>">
						<i class="fas fa-tags"></i>
						<p>Kategori</p>
					</a>
				</li>
				<li class="nav-section">
					<span class="sidebar-mini-icon">
						<i class="fas fa-ellipsis-h"></i>
					</span>
					<h4 class="text-section">About</h4>
				</li>
                <li class="nav-item <?= isset($mAbout) ? 'active' : ''; ?>">
                    <a href="<?= base_url('admin/about'); ?>">
                        <i class="fas fa-info"></i>
                        <p>Developer</p>
                    </a>
                </li>
			</ul>
		</div>
	</div>
</div>
<!-- End Sidebar -->