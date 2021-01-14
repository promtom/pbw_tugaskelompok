<?php
    if($berita["brt_foto"]){
        $foto = 'assets/img/thumbnail/'.$berita["brt_foto"];
    }
	else $foto = 'assets/img/thumbnail/landscape.jpg';
	$i = 1; $j=0;
?>
<div class="col-12 text-white mb-3">
	<div class="bg-dark p-3">
		<h1 class="title-blog"> <b><?=$berita['brt_judul']?></b> </h1>
		<p class="mb-0">
			<?= date("d F Y", strtotime($berita["brt_tgl"])) ?> / by
			<?php foreach ($user as $wow) : ?>
				<a href="<?= base_url('blog/thor/') ?><?= $wow["ID"] ?>" class="">
					<?= $berita["brt_admin"] == $wow["ID"] ? $wow["username"] : '' ?>
				</a>
			<?php endforeach ?>
		</p>
	</div>
</div>
<div class="col-lg-8 col-sm-12 text-white">
	<div class="card bg-dark p-3">				
		<div class="d-flex justify-content-center">
			<img src="<?= base_url($foto)?>" alt="" class="responimg">
		</div>
		<div class="mt-3">
			<h3 class="text-justify">
				<?=$berita['brt_isi']?>
			</h3>
		</div>
		<div class="d-flex align-items-end flex-column mt-3">
			<p class="sub">Kategori </p>
			<div class="d-flex flex-row flex-wrap ">
				<?php $arr = explode(",",$berita["brt_kategori"]);?>
				<?php foreach ($arr as $ror) : ?>
					<?php foreach ($kategori as $wow) : ?>
						<?php if($ror==$wow["kategori_id"]):?>
							<div class="ml-auto">
								<div class="btn btn-secondary btn-round p-2 ml-2 my-2" title="<?=$wow["kategori_detail"]?>">
									<?=$wow["kategori_nama"]?>
								</div>
							</div>
						<?php endif ?>
					<?php endforeach ?>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-4 umpet">
	<?php $this->load->view('layouts/1/sidebar'); ?>
</div>

