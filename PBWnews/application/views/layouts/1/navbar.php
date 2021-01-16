<nav class = "navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand flex-column" href="<?= base_url('blog') ?>">
            <div class="d-flex flex-row justify-content-center mt-2">
                <img src="<?= base_url('assets/img/avatar/deepcolor.png') ?>" class="avatar-sm avatar-img">
                <h4 class="judul"> PBWnews </h4>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" 
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-ellipsis-v"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar">
            <ul class="navbar-nav">
                <li class="nav-item <?= isset($bHome) ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?= base_url('blog') ?>">
                        Home <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item <?= isset($bAbout) ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?= base_url('blog/about') ?>">
                        Penulis <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
