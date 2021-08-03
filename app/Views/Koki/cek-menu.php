<!doctype html>
<html lang="en">

<?php echo view('Template/head') ?>

<body>
  <?php echo view('Template/header') ?>

  <main class="container-fluid">
    <div class="row">
      <?php echo view('Koki/sidebar') ?>

      <div class="col m-5">
        <h2 class="font-primary">Informasi Ketersediaan Menu</h2>
        <a href="<?php echo base_url('koki/dashboard'); ?>" class="btn btn-sm bg--four font-btn font-white mt-3 mb-3">DASHBOARD</a>
        <?php if (isset($tabel_cek_menu)) : ?>
          <?php if (count($tabel_cek_menu) == 0) : ?>
            <?php echo view('Koki/tabel_cek-menu'); ?>
          <?php else : ?>
            <?php echo view('Koki/tabel_cek-menu', array('tabel_cek_menu' => $tabel_cek_menu)); ?>
          <?php endif ?>
        <?php else : ?>
          Error: $tabel_cek_menu tidak terdefinisi.
        <?php endif ?>

        <!-- Modal -->
        <?php echo view('Template/modal_konfirmasi-hapus', array('url' => base_url('koki/menu/hapus'))); ?>
      </div>
    </div>
  </main>

  <?php echo view('Template/bootstrap_script'); ?>
  <?php echo view('Template/sidebar_script'); ?>
  <?php echo view('Template/modal_konfirmasi-hapus_script'); ?>
</body>

</html>