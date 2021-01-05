<div class="col">
	<div class="row my-3">
		<div class="col">
			<div class="parallax-news">
				<div class="centered text-center container-fluid" id="txtabout">
					<h2 class="about_title">News</h2>
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
					<div class="row">
						<div class="col">
							<!-- entar gambar -->
						</div>
						<div class="col-12">
							<div class="nolink">
								<a href="<?= base_url('blog/konten/') ?><?= $row["brt_id"] ?>">
									<h1 class="blog_title"><?= $row["brt_judul"] ?></h1>
								</a>
							</div>
							<?= date("d F Y", strtotime($row["brt_tgl"])) ?> / by
							<?php foreach ($user as $wow) : ?>
								<b><a href="<?= base_url('blog/thor/') ?><?= $wow["ID"] ?>">
									<?= $row["brt_admin"] == $wow["ID"] ? $wow["username"] : '' ?>
								</a></b>
							<?php endforeach ?>
							<h3 class="text-justify">
								<?php 
									$txt = substr($row["brt_isi"],0,225);
									if(strlen($row["brt_isi"])>225) $txt = $txt.'...';
									echo ($txt)
								?>
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