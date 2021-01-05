<?php
    if($user["foto"]){
        $foto = 'assets/img/profil/'.$user["foto"];
    }
    else $foto = 'assets/img/profil/profil0.png';
    $i=0;
?>
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
				<a href="<?= base_url('admin/user'); ?>">Data User</a>
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
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="text-center ">
                            <h4 class="card-title"><b>Foto</b></h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <img src="<?= base_url($foto)?>" alt="" class="responimg">
                        </div>
                        <br>
                        <div>
                            <p>Nama Lengkap <br> <?= $user['name']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title"><b>Profil <?= $user['username']; ?></b></h4>
                            <a class="btn btn-primary btn-round ml-auto" href="<?= base_url('admin/user/'); ?>">
                                <i class="fas fa-arrow-left"></i> back
                            </a>
                        </div>
                    </div>
                    <div class="card-body ">
                        <ul class="nav nav-pills nav-primary nav-pills-no-bd nav-pills-icons justify-content-center mb-3"
                            id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="v-pills-home-tab-icons" data-toggle="pill" href="#bio" role="tab" aria-controls="bio" aria-selected="true">
                                    <i class="fas fa-info"></i>
                                    Biodata
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#artikel" role="tab" aria-controls="artikel" aria-selected="false">
                                    <i class="fas fa-star"></i>
                                    Artikel
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content " id="v-pills-with-icon-tabContent">
                            <div class="tab-pane animated fadeIn show active" id="bio" role="tabpanel" aria-labelledby="bio">
                                <div class="text-justify">
                                    <?= $user['profil']; ?>
                                </div>
                            </div>
                            <div class="tab-pane animated fadeIn" id="artikel" role="tabpanel" aria-labelledby="artikel">
                                <ul>
                                    <?php foreach ($berita as $row) : ?>
                                        <?php if($row["brt_admin"]==$user["ID"]):?>
                                                <li>
                                                    <?= $row["brt_judul"] ?>
                                                </li>
                                        <?php $i++; endif ?>
                                    <?php endforeach ?>
                                </ul>
                                <?php if($i==0):?>
                                    <div class="text-center">
                                        <p>Belum menulis artikel</p>
                                    </div>
                                <?php $i++; endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>