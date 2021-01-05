<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>
        <?= $judul?>
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

    <!-- Fonts and icons -->
    <script src="<?= base_url('assets/js/plugin/webfont/webfont.min.js') ?>"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands", "simple-line-icons"
                ],
                urls: ['<?= base_url('assets/css/fonts.min.css') ?>']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/atlantis.css') ?>">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.2/css/all.css' type='text/css' />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <?php $this->load->view('layouts/2/header'); ?>
            <?php $this->load->view('layouts/2/navbar'); ?>
        </div>

        <?php $this->load->view('layouts/2/sidebar'); ?>

        <div class="main-panel">
            <div class="content">
                <?php $this->load->view($konten); ?>
            </div>
            <?php $this->load->view('layouts/2/footer'); ?>
        </div>
    </div>
    
    <?php $this->load->view('layouts/2/changepas'); ?>
    <?php $this->load->view('layouts/2/changebio'); ?>

    <!--   Core JS Files   -->
    <script src="<?= base_url('assets/js/core/jquery.3.2.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/core/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/core/bootstrap.min.js') ?>"></script>

    <!-- jQuery UI -->
    <script src="<?= base_url('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') ?>"></script>

    <!-- jQuery Scrollbar -->
    <script src="<?= base_url('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') ?>"></script>


    <!-- Chart JS -->
    <script src="<?= base_url('assets/js/plugin/chart.js/chart.min.js') ?>"></script>

    <!-- jQuery Sparkline -->
    <script src="<?= base_url('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') ?>"></script>

    <!-- Chart Circle -->
    <script src="<?= base_url('assets/js/plugin/chart-circle/circles.min.js') ?>"></script>

    <!-- Datatables -->
    <script src="<?= base_url('assets/js/plugin/datatables/datatables.min.js') ?>"></script>

    <!-- Bootstrap Notify -->
    <script src="<?= base_url('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') ?>"></script>

    <!-- jQuery Vector Maps -->
    <script src="<?= base_url('assets/js/plugin/jqvmap/jquery.vmap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') ?>"></script>

    <!-- Sweet Alert -->
    <script src="<?= base_url('assets/js/plugin/sweetalert/sweetalert.min.js') ?>"></script>

    <!-- Atlantis JS -->
    <script src="<?= base_url('assets/js/atlantis.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/demo.js') ?>"></script>

    
    <!-- CKEditor -->
    <script src="<?= base_url('assets/js/plugin/editor/ckeditor/ckeditor.js') ?>"></script>
    <script>
        $(function() {
            CKEDITOR.replace('editor', {
                filebrowserImageBrowseUrl: '<?= base_url('assets/js/plugin/editor/kcfinder/browse.php'); ?>',
                height: '400px'
            });
        });
    </script>

    <!-- Costume.js -->
    <script src="<?= base_url('assets/js/notif.js') ?>"></script>
</body>

</html>