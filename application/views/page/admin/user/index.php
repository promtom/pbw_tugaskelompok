<?php $i = 1; $j=0;?>
<div class="page-inner">
	<div class="page-header">
		<!-- Start Breadcrumb -->
		<h4 class="page-title"><?= $judul?></h4>
		<ul class="breadcrumbs">
			<li class="nav-home">
				<a href="<?= base_url('home'); ?>">
					<i class="fas fa-home"></i>
				</a>
			</li>
			<li class="separator">
				<i class="fas fa-chevron-right"></i>
			</li>
			<li class="nav-item">
				<a href="#"><?= $judul?></a>
			</li>
		</ul>
		<!-- END Breadcrumb -->
	</div>
    <?php $this->load->view('layouts/2/sweetalert'); ?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="card-title"><?= $judul?></h4>
						<a class="btn btn-primary btn-round ml-auto" href="<?= base_url('admin/user/add'); ?>">
							<i class="fa fa-plus"></i> Tambah Data
						</a>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-hover table-bordered" id="tabel1">
							<thead class="thead-light">
								<tr>
									<th>No</th>
									<th>Foto</th>
									<th>Username</th>
									<th>level</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php if ($user) : ?>
								<?php foreach ($user as $row) : ?>
								<tr>
									<td width="8%"><?= $i++ ?></td>
									<td>
										<?php
											if($row["foto"]){
												$foto = 'assets/img/profil/'.$row["foto"];
											}
											else $foto = 'assets/img/profil/profil0.png';	
										?>
										<div class="avatar avatar-xl">
											<img src="<?= base_url($foto)?>" alt="..." class="avatar-img">
										</div>
									</td>
									<td><?= $row["username"]; ?></td>
									<td>
										<?php
											if($row["status"]==1) echo("Admin");
											else echo("User");
										?>
									</td>
									<td width="17%">
										<div class="">
											<a class="btn btn-outline-dark btn-sm" title="Ubah Data" href="<?= site_url('admin/user/show/'.$row['ID']); ?>">
												<i class="fas fa-eye" aria-hidden="true"></i>
											</a>
											<a class="btn btn-outline-primary btn-sm" title="Ubah Data" href="<?= site_url('admin/user/edit/'.$row['ID']); ?>">
												<i class="fas fa-edit" aria-hidden="true"></i>
											</a>
											<a class="btn btn-outline-danger btn-sm" title="Hapus Data" href="<?= site_url('admin/user/delete/'.$row['ID']); ?>" id="btn-hapus">
												<i class="fas fa-trash" aria-hidden="true"></i>
											</a>
										</div>
									</td>
								</tr>
								<?php $j=0;?>
								<?php endforeach ?>
								<?php else : ?>
								<tr>
									<td colspan="7" class="text-center">Dont have any data</td>
								</tr>
								<?php endif; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
