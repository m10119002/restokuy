<header class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg--four">
        <div class="container-fluid">
            <button class="btn btn-sm" id="btn-sidebar">
                <img src="<?php echo base_url('assets/img/hamburger-menu.svg'); ?>" alt="Menu" class="font-primary">
            </button>
            <div class="d-flex">
                <a href="<?php echo base_url('admin/dashboard'); ?>" class="navbar-brand font-primary navbar-title">RestoKuy</a>
            </div>
            <!--<form method="post">-->
            <?php echo form_open('logout'); ?>
                <div class="dropdown">
                    <a role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?php echo base_url('assets/img/icon-profile.svg'); ?>" alt="profile">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg-end dropdown-color" aria-labelledby="dropdownMenuLink">
                        <li><span class="dropdown-item-text font-primary fw-normal"><?php echo $_SESSION['nama_pegawai']; ?></span></li>
                        <li><button class="dropdown-item font-primary fw-normal" name="btn-keluar">Keluar</button></li>
                    </ul>
                </div>
            <?php echo form_close(); ?>
            <!--</form>-->
        </div>
    </nav>
</header>