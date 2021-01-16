<div class="sweetalert">
    <?php if ($this->session->flashdata('success')) : ?>
        <div id="berhasil" data-flash="<?= $this->session->flashdata('success'); ?>"></div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('fail')) : ?>
        <div id="gagal" data-flash="<?= $this->session->flashdata('fail'); ?>"></div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('info')) : ?>
        <div id="info" data-flash="<?= $this->session->flashdata('info'); ?>"></div>
    <?php endif; ?>
</div>