<div class="page-inner">
	<div class="page-header">
		<!-- Start Breadcrumb -->
		<h4 class="page-title">Edit Kategori</h4>
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
				<a href="<?= base_url('admin/kategori'); ?>">Data Kategori</a>
			</li>
			<li class="separator">
				<i class="fas fa-chevron-right"></i>
			</li>
			<li class="nav-item">
				<a href="#">Edit Kategori</a>
			</li>
		</ul>
		<!-- END Breadcrumb -->
	</div>
    <?php $this->load->view('layouts/admin/sweetalert'); ?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="card-title"><?= $judul?></h4>
						<a class="btn btn-primary btn-round ml-auto" href="<?= base_url('admin/kategori/'); ?>">
							<i class="fas fa-arrow-left"></i> back
						</a>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col">
					        <?php echo form_open('admin/kategori/edit/'.$kategori['kategori_id'],array("class"=>"form-horizontal")); ?>
							<div class="form-group mb-3">
								<div class="row-sm-3">
									<label for="kategori_nama">Nama</label>
								</div>
								<div class="row-sm-9">
									<input type="text" class="form-control" name="kategori_nama" id="kategori_nama" placeholder="<?=$kategori['kategori_nama']?>" value="<?=$kategori['kategori_nama']?>" required>
								</div>
							</div>
							<div class="form-group mb-3">
								<div class="row-sm-3">
									<label for="kategori_detail">Detail</label>
								</div>
								<div class="row-sm-9">
									<textarea class="form-control" name="kategori_detail" id="kategori_detail" placeholder="<?=$kategori['kategori_detail']?>" required> <?=$kategori['kategori_detail']?> </textarea>
								</div>
							</div>
							<div class="mb-12">
								<a href="<?= base_url('admin/kategori'); ?>" class="btn btn-danger float-right">
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
	</div>
</div>