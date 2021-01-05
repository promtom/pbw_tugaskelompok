<nav class = "navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('blog') ?>">
            <div class="avatar-sm">
                <img src="<?= base_url('assets/img/avatar/deepcolor.png') ?>" class="avatar-img"> PBWnews
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
