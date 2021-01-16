<?php
    if(file_exists ( 'assets/img/profil/'.$user["foto"])){
        $foto = 'assets/img/profil/'.$user["foto"];
    }
    else $foto = 'assets/img/profil/profil0.png';
    $i=0;
?>
<div class="col-lg-4 col-sm-12">
    <div class="card bg-dark text-white">
        <div class="card-header">
            <div class="text-center ">
                <h4 class="card-title text-white"><b><?= $user['username']?></b></h4>
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
    <div class="card bg-dark text-white">
        <div class="card-header">
            <div class="text-center ">
                <h4 class="card-title text-white"><b>Profil</b></h4>
            </div>
        </div>
        <div class="card-body">
            <ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-pills-icons justify-content-center mb-3"
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
            <div class="tab-content" id="v-pills-with-icon-tabContent">
                <div class="tab-pane animated fadeIn show active" id="bio" role="tabpanel" aria-labelledby="bio">
                    <div class="text-justify">
                        <?= $user['profil']; ?>
                    </div>
                </div>
                <div class="tab-pane animated fadeIn" id="artikel" role="tabpanel" aria-labelledby="artikel">
                        <?php foreach ($berita as $row) : ?>
                            <?php if($row["brt_admin"]==$user["ID"]):?>
                                <div class="mb-2">
                                    <div class="nolink">
                                        <a href="<?= base_url('blog/konten/') ?><?= $row["brt_id"] ?>">
                                            <h1 class="title-blog"><?= $row["brt_judul"] ?></h1>
                                        </a>
                                    </div>
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
                            <?php $i++; endif ?>
                        <?php endforeach ?>
                        <?php if($i==0):?>
                            <div class="text-center">
                                <img src="<?= base_url('assets/img/avatar/sorry.webp')?>" alt="">
                                <p>Dia penulis baru, sehingga belum membuat satupun artikel</p>
                            </div>
                        <?php $i++; endif ?>
                </div>
            </div>
        </div>
    </div>
</div>