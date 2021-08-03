<!doctype html>
<html lang="en">

<?php echo view('Template/head') ?>

<body>
  <?php echo view('Template/header') ?>

  <main class="container-fluid">
    <div class="row">
      <?php echo view('Koki/sidebar') ?>

      <div class="col m-5">
        <h2 class="font-primary">Informasi Pemesanan</h2>
        <?php if (isset($tabel_pemesanan)) : ?>
          <?php echo view('Koki/tabel_pemesanan', ['tabel_pemesanan' => $tabel_pemesanan]); ?>
        <?php else : ?>
          Error: $tabel_pemesanan tidak terdefinisi.
        <?php endif ?>

        <!-- Modal -->
        <?php echo view('Template/modal_konfirmasi-hapus', array('url' => base_url('koki/pemesanan/hapus'))); ?>
      </div>
    </div>
  </main>

  <?php echo view('Template/bootstrap_script'); ?>
  <?php echo view('Template/sidebar_script'); ?>
  <?php echo view('Template/modal_konfirmasi-hapus_script'); ?>
</body>

</html>