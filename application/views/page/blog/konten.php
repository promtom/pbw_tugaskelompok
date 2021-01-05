<div class="col-lg-8 col-sm-12">
	<div class="row text-white">
		<div class="col">
			<div class="card bg-dark p-3">
				<div class="text-center">
					<h2 class="text-uppercase">
						<?=$berita['brt_judul']?>
					</h2>
					<p class="mb-0">
						by
						<?php foreach ($user as $wow) : ?>
							<a href="<?= base_url('blog/thor/') ?><?= $wow["ID"] ?>">
								<?= $berita["brt_admin"] == $wow["ID"] ? $wow["username"] : '' ?>
							</a>
						<?php endforeach ?>
					</p>
				</div>
				<div class="mt-3">
					<h3 class="text-justify">
						<?=$berita['brt_isi']?>
					</h3>
				</div>
				<div class="d-flex align-items-end flex-column mt-3">
					<p class="sub">Kategori </p>
					<div class="d-flex flex-row">
						<?php foreach ($kategori as $wow) : ?>
							<?php if($berita["brt_kategori"]==$wow["kategori_id"]):?>
								<div class="btn btn-dark btn-round p-2 ml-1">
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
<div class="col-lg-4 umpet">
	<?php $this->load->view('layouts/1/sidebar'); ?>
</div>