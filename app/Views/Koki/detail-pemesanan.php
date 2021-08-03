<!doctype html>
<html lang="en">

<?php echo view('Template/head') ?>

<body>
  <?php echo view('Template/header') ?>

  <main class="container-fluid">
    <div class="row">
      <?php echo view('Koki/sidebar') ?>

      <div class="col m-5">
        <h2 class="font-primary">Informasi Detail Pemesanan</h2>
        <a href="pemesanan.html" class="btn btn-sm bg--secondary font-btn font-white mt-3 mb-3">pemesanan</a>

        <div class="mt-3 mb-3">
          <h5>ID Pemesanan</h5>
        </div>

        <div class="mt-3 mb-3">
          <h5>Nomor Meja</h5>
        </div>

        <div class="mt-3 mb-5">
          <h5>List Pesanan</h5>
        </div>

        <a href="pemesanan.html" class="btn btn-sm bg--four font-btn font-white mt-3 mb-3">selesai</a>

        <!-- Modal -->
        <?php echo view('Template/modal_konfirmasi-hapus', array('url' => base_url('koki/pemesanan/detail/hapus'))); ?>
      </div>
    </div>
  </main>

  <?php echo view('Template/bootstrap_script'); ?>
  <?php echo view('Template/sidebar_script'); ?>
  <?php echo view('Template/modal_konfirmasi-hapus_script'); ?>
</body>

</html>