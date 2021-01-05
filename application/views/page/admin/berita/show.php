<?php $i = 1; $j=0; ?>
<div class="page-inner">
	<div class="page-header">
		<!-- Start Breadcrumb -->
		<h4 class="page-title"><?= $judul?></h4>
		<ul class="breadcrumbs">
			<li class="nav-home">
				<a href="<?= base_url('admin/home'); ?>">
					<i class="fas fa-home"></i>
				</a>
			</li>
			<li class="separator">
				<i class="fas fa-chevron-right"></i>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('admin/berita'); ?>">Data berita</a>
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
						<h4 class="card-title">
							<?=$berita['brt_judul']?>		
						</h4>
						<a class="btn btn-primary btn-round ml-auto" href="<?= base_url('admin/berita/'); ?>">
							<i class="fas fa-arrow-left"></i> back
						</a>
					</div>
				</div>
				<div class="card-body">
					<div class="d-flex flex-row justify-content-end">
						<h4>Author :
						<?php foreach ($user as $row) : ?>
							<?php if($berita["brt_admin"]==$row["ID"]):?>
								<?=$row["username"]?>
							<?php endif ?>
						<?php endforeach ?>
						</h4>
					</div>
					<br>
                    <h3 class="text-justify">
                        <?=$berita['brt_isi']?>
                    </h3>
					<br>
					<h4>Kategori </h4>
					<div class="d-flex flex-row">
						<?php foreach ($kategori as $wow) : ?>
							<?php if($berita["brt_kategori"]==$wow["kategori_id"]):?>
								<div class="btn btn-dark btn-round p-2">
									<?=$wow["kategori_nama"]?>
								</div>
							<?php endif ?>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
