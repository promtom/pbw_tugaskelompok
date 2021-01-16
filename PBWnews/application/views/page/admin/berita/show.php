<?php
    if(file_exists ( 'assets/img/thumbnail/'.$berita["brt_foto"])){
        $foto = 'assets/img/thumbnail/'.$berita["brt_foto"];
    }
    else $foto = 'assets/img/SOS.svg';
	$i = 1; $j=0;
?>

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
    <?php $this->load->view('layouts/admin/sweetalert'); ?>
	<div class="row">
		<div class="col-lg-8 col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="card-title">
							<b><?=$berita['brt_judul']?></b>
						</h4>
						<a class="btn btn-primary btn-round ml-auto" href="<?= base_url('admin/berita/'); ?>">
							<i class="fas fa-arrow-left"></i> back
						</a>
					</div>
				</div>
				<div class="card-body">
                    <h3 class="text-justify">
                        <?=$berita['brt_isi']?>
                    </h3>
					<br>
					<h4>Kategori </h4>
					<div class="d-flex flex-row">
						<?php $arr = explode(",",$berita["brt_kategori"]);?>
						<div class="d-flex flex-wrap">
						<?php foreach ($arr as $ror) : ?>
							<?php foreach ($kategori as $wow) : ?>
								<?php if($ror==$wow["kategori_id"]):?>
									<a href="<?= base_url('admin/kategori'); ?>" class="btn btn-info btn-round p-2 mr-2">
										<?=$wow["kategori_nama"]?>
									</a>
								<?php endif ?>
							<?php endforeach ?>
						<?php endforeach ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-sm-12">
			<div class="card">
				<div class="card-header">
					<div class="text-center ">
						<h4 class="card-title"><b>Thumbnail</b></h4>
					</div>
				</div>
				<div class="card-body">
					<div class="d-flex justify-content-center">
						<img src="<?= base_url($foto)?>" alt="" class="responimg">
					</div>
					<br>
					<div>
						<table>
							<tr>
								<td>Author</td>
								<td>:</td>
								<td>		
									<?php foreach ($user as $row) : ?>
										<?php if($berita["brt_admin"]==$row["ID"]):?>
											<?=$row["username"]?>
										<?php endif ?>
									<?php endforeach ?>
								</td>
							</tr>		
							<tr>
								<td>Tanggal Buat</td>
								<td>:</td>
								<td><?= date("d F Y", strtotime($berita["brt_create"]))?></td>
							</tr>
							<tr>
								<td>Terakhir Update</td>
								<td>:</td>
								<td><?= date("d F Y", strtotime($berita["brt_tgl"]))?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
