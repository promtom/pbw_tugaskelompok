
<div class="col">
	<div class="row my-3">
		<div class="col">
			<div class="parallax-news">
				<div class="panel-paralax text-center container-fluid" id="">
					<h2 class="title-about">News</h2>
					<p class="mb-0">
						Berita tentang wisata di daerah indonesia
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row my-3">
		<div class="col-lg-8 col-sm-12">
			<?php foreach ($berita as $row) : ?>
				<div class="bg-dark text-white mb-3 p-3">
					<?php
						if(file_exists ( 'assets/img/thumbnail/'.$row["brt_foto"])){
							$foto = 'assets/img/thumbnail/'.$row["brt_foto"];
						}
						else $foto = 'assets/img/SOS.svg';
						$i = 1; $j=0;
						$txt = substr($row["brt_isi"],0,225);
						if(strlen($row["brt_isi"])>225) $txt = $txt.'...';
					?>
					<div class="row mb-1">
						<div class="col">
							<div class="nolink">
								<a href="<?= base_url('blog/konten/') ?><?= $row["brt_id"] ?>">
									<h1 class="title-blog"><?= $row["brt_judul"] ?></h1>
								</a>
							</div>
							<div class="mt--2">
								<?= date("d F Y", strtotime($row["brt_tgl"])) ?> / by
								<?php foreach ($user as $wow) : ?>
									<b><a href="<?= base_url('blog/thor/') ?><?= $wow["ID"] ?>">
										<?= $row["brt_admin"] == $wow["ID"] ? $wow["username"] : '' ?>
									</a></b>
								<?php endforeach ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-sm-12 ">
							<div class="d-flex h-100 justify-content-center align-items-center">
								<img src="<?= base_url($foto)?>" alt="" class="responimg img-thumbnail">
							</div>
						</div>
						<div class="col-lg-6 col-sm-12 ">
							<h3 class="text-justify">
								<?= $txt?>
							</h3>
							<a href="<?= base_url('blog/konten/') ?><?= $row["brt_id"] ?>" class="btn btn-secondary">
								<span>Read More</span>
							</a>
						</div>
					</div>
				</div>
			<?php endforeach ?>
			<?= $this->pagination->create_links(); ?>
		</div>
		<div class="col-lg-4 umpet">
			<?php $this->load->view('layouts/1/sidebar'); ?>
		</div>
	</div>
</div>