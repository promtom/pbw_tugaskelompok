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
				<a href="<?= base_url('admin/berita'); ?>">Data Berita</a>
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
						<a class="btn btn-primary btn-round ml-auto" href="<?= base_url('admin/berita/'); ?>">
							<i class="fas fa-arrow-left"></i> back
						</a>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col">
					        <?php echo form_open('admin/berita/add',array("class"=>"form-horizontal")); ?>
							<div class="form-group mb-3">
								<div class="row-sm-3">
									<label for="brt_judul">Judul</label>
								</div>
								<div class="row-sm-9">
									<input type="text" class="form-control" name="brt_judul" id="brt_judul" placeholder="Type here" required>
								</div>
							</div>
							<div class="form-group mb-3">
								<div class="row-sm-3">
									<label for="brt_kategori">kategori</label>
								</div>
								<div class="row-sm-9">
									<select  class="form-control" name="brt_kategori" id="brt_kategori" required>
										<option disabled selected>Select Here</option>
									    <?php foreach ($kategori as $wow) : ?>
                                        <option value="<?= $wow["kategori_id"] ?>"><?= $wow["kategori_nama"] ?></option>
                                        <?php endforeach ?>
                                    </select>
								</div>
							</div>
							<div class="form-group mb-3">
								<div class="row-sm-3">
									<label for="brt_isi">isi</label>
								</div>
								<div class="row-sm-9">
									<textarea class="form-control" name="brt_isi" id="editor" placeholder="Type here" required></textarea>
								</div>
							</div>
							<div class="form-group mb-3">
								<input type="hidden" name="brt_admin" value="<?= $this->session->userdata('id_u'); ?>">
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
	</div>
</div>
