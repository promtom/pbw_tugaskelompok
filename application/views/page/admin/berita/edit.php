<script>
	function preview_foto(event) {

		var reader = new FileReader();
		reader.onload = function() {
			var output = document.getElementById('viewfoto');
			output.src = reader.result;
		}
		reader.readAsDataURL(event.target.files[0]);
	}
</script>
<?php
    if($berita["brt_foto"]){
        $foto = 'assets/img/thumbnail/'.$berita["brt_foto"];
    }
    else $foto = 'assets/img/SOS.svg';
    $i=0;
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
    <?php if ($this->session->id_u==$berita['brt_admin']||$this->session->status==1) : ?>
	<div class="row">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="card-title">
							<b><?= $judul?> </b>
							<?php
								if($this->session->id_u==$berita['brt_admin']) echo("As Writer");
								else if ($this->session->status==1) echo("As Admin");
							?>
						</h4>
						<a class="btn btn-primary btn-round ml-auto" href="<?= base_url('admin/berita/'); ?>">
							<i class="fas fa-arrow-left"></i> back
						</a>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col">
					        <?php echo form_open_multipart('admin/berita/edit/'.$berita['brt_id'],array("class"=>"form-horizontal")); ?>
							<div class="form-group mb-3">
								<div class="row-sm-3">
									<label for="foto">Foto</label>
								</div>
								<div class="row-sm-9">
									<input type="file" class="form-control" name="foto" id="foto" onchange="preview_foto(event)" >
                                    <small id="file_help" class="form-text text-muted">
										Ukuran maksimum foto <b>10 MB</b>.
									</small>
								</div>
							</div>
							<div class="form-group mb-3">
								<div class="row-sm-3">
									<label for="brt_judul">Judul</label>
								</div>
								<div class="row-sm-9">
									<input type="text" class="form-control" value="<?=$berita['brt_judul']?>" name="brt_judul" id="brt_judul" placeholder="Type here" required>
								</div>
							</div>
							<div class="form-group mb-3">
								<div class="row-sm-3">
									<label for="brt_kategori">kategori</label>
								</div>
								<div class="row-sm-9">
									<select multiple class="form-control" name="brt_kategori[]" id="brt_kategori" required>
									<?php $arr = explode(",",$berita["brt_kategori"]); ?>
									<option disabled >Select Here</option>
										<?php foreach ($kategori as $wow) : ?>
											<option <?php foreach ($arr as $ror){if($wow["kategori_id"]==$ror){echo('selected');}}?> 
											value="<?= $wow["kategori_id"] ?>"><?= $wow["kategori_nama"] ?></option>
                                        <?php endforeach ?>
                                    </select>
								</div>
							</div>
							<div class="form-group mb-3">
								<div class="row-sm-3">
									<label for="brt_isi">isi</label>
								</div>
								<div class="row-sm-9">
									<textarea class="form-control" name="brt_isi" id="editor" placeholder="Type here" required>
										<?=$berita['brt_isi']?>
									</textarea>
								</div>
							</div>
							<div class="form-group mb-3">
								<!-- <input type="hidden" name="brt_admin" value="<?= $this->session->userdata('id_u'); ?>"> -->
								<input type="hidden" name="brt_admin" value="<?= $berita['brt_admin']?>">
								<input type="hidden" name="brt_create" value="<?= $berita['brt_create']?>">
								<input type="hidden" class="form-control" name="old" id="old" value="<?=$berita["brt_foto"]?>" required>
							</div>
							<div class="mb-12">
								<a href="<?= base_url('admin/berita'); ?>" class="btn btn-danger float-right">
									<i class="fas fa-times"></i> Batal
								</a>
								<button type="submit" class="btn btn-success float-right mr-2">
									<i class="fas fa-save"></i> Simpan
								</button>
							</div>
    						<?php echo form_close(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					<div class="card-title"><b>Thumbnail</b></div>
				</div>
				<div class="card-body">
					<figure>
						<img src="<?= base_url($foto); ?>" id="viewfoto" class="responimg">
					</figure>
				</div>
			</div>
		</div>
	</div>
	<?php else : ?>
		
	<?php $this->load->view('page/admin/larang'); ?>
	<?php endif?>
	
</div>