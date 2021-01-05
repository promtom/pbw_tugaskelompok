<div class="row">
    <div class="col">
        <div class="card bg-dark text-white">
            <div class="card-header">
                <h3>POPULAR NEWS</h3>
            </div>
            <div class="card-body d-flex flex-column">
                <?php foreach ($rank as $row) : ?>
                <a class="btn btn-secondary mb-2" href="<?= base_url('blog/konten/') ?><?= $row["brt_id"] ?>">
                    <?= $row["brt_judul"]; ?>
                </a>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>