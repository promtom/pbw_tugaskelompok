<div class="page-inner mt-2">
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
    <div class="container">
        <div class="d-flex justify-content-center">
            <ul class="nav nav-pills nav-primary nav-pills-no-bd nav-pills-icons justify-content-center mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="v-pills-home-tab-icons" data-toggle="pill" href="#bio1" role="tab" aria-controls="dev1" aria-selected="true">
                        <i class="flaticon-user-4"></i>
                        dev 1
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#bio2" role="tab" aria-controls="dev2" aria-selected="false">
                        <i class="flaticon-user-4"></i>
                        dev 2
                    </a>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="v-pills-with-icon-tabContent">
            <div class="tab-pane animated fadeIn show active" id="bio1" role="tabpanel" aria-labelledby="bio1">
                <?php $this->load->view('page/admin/developer/aldi.php'); ?>
            </div>
            <div class="tab-pane animated fadeIn" id="bio2" role="tabpanel" aria-labelledby="bio2">
                <?php $this->load->view('page/admin/developer/afi.php'); ?>
            </div>
        </div>
    </div>
</div>