<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                <h5 class="text-white op-7 mb-2">Selamat Datang, <?= $this->session->name; ?> </h5>
            </div>
        </div>
    </div>
</div>
<div class="page-inner mt--5">
    <?php $this->load->view('layouts/admin/sweetalert'); ?>
    <div class="row mt--2">    
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body ">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-primary bubble-shadow-small">
                                <i class="fas fa-file-alt"></i>
                            </div>
                        </div>
                        <div class="col col-stats ml-3 ml-sm-0">
                            <div class="numbers">
                                <p class="card-category">Total Berita</p>
                                <h4 class="card-title"><?= $total["total_berita"] ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body ">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-info bubble-shadow-small">
                                <i class="fas fa-tag"></i>
                            </div>
                        </div>
                        <div class="col col-stats ml-3 ml-sm-0">
                            <div class="numbers">
                                <p class="card-category">Total Kategori</p>
                                <h4 class="card-title"><?= $total["total_kategori"] ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <?php if ($this->session->status==1) : ?>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body ">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-secondary bubble-shadow-small">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <div class="col col-stats ml-3 ml-sm-0">
                            <div class="numbers">
                                <p class="card-category">Total user</p>
                                <h4 class="card-title"><?= $total["total_user"] ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <?php endif; ?>
    </div>
</div>