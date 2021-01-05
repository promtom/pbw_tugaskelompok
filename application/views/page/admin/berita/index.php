<?php $i = 1; $j=0; $u=0; ?>
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
						<a class="btn btn-primary btn-round ml-auto" href="<?= base_url('admin/berita/add'); ?>">
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
									<th>Judul</th>
									<th>Dibuat</th>
									<th>Diupdate</th>
									<th>Kategori</th>
									<th>Author</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php if ($berita) : ?>
								<?php foreach ($berita as $row) : ?>
								<tr>
									<td width="8%"><?= $i++ ?></td>
									<td><?= $row["brt_judul"]; ?></td>
									<td><?= date("d F Y", strtotime($row["brt_create"]))?></td>
									<td><?= date("d F Y", strtotime($row["brt_tgl"]))?></td>
									<td>
										<?php foreach ($kategori as $wow) : ?>
											<?php 
												if($row["brt_kategori"]==$wow["kategori_id"]){
													$j=1; echo($wow["kategori_nama"]);break;
												}
											?>
										<?php endforeach ?>
										<?php
											if($j==0) echo("DATA NOT FOUND"); $j=0;
										?>
									</td>
									<td>
										<?php foreach ($user as $wow) : ?>
											<?php 
												if($row["brt_admin"]==$wow["ID"]){
													$u=1; echo($wow["username"]);break;
												}
											?>
										<?php endforeach ?>
										<?php
											if($u==0) echo("DATA NOT FOUND"); $j=0;
										?>
									</td>
									<td width="17%">
										<div class="">
											<a class="btn btn-outline-dark btn-sm" title="Ubah Data" href="<?= site_url('admin/berita/show/'.$row['brt_id']); ?>">
												<i class="fas fa-eye" aria-hidden="true"></i>
											</a>
											<a class="btn btn-outline-primary btn-sm" title="Ubah Data" href="<?= site_url('admin/berita/edit/'.$row['brt_id']); ?>">
												<i class="fas fa-edit" aria-hidden="true"></i>
											</a>
											<a class="btn btn-outline-danger btn-sm" title="Hapus Data" href="<?= site_url('admin/berita/delete/'.$row['brt_id']); ?>" id="btn-hapus">
												<i class="fas fa-trash" aria-hidden="true"></i>
											</a>
										</div>
									</td>
								</tr>
								<?php $j=0; $u=0;?>
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
