<!doctype html>
<html lang="en">

<?php echo view('Template/head'); ?>

<body>
  <?php echo view('Template/header'); ?>

  <main class="container-fluid">
    <div class="row">
      <?php echo view('Kasir/sidebar'); ?>

      <div class="col m-5">
        <h2 class="font-primary">Informasi Pembayaran</h2>
        <?php if (isset($tabel_pembayaran)) : ?>
          <?php echo view('Kasir/tabel_pembayaran'); ?>
        <?php else : ?>
          Error: $tabel_pembayaran tidak terdefinisi.
        <?php endif ?>

        <h2 class="mt-5 mb-5 font-primary">Informasi Pembayaran Lunas</h2>
        <?php if (isset($tabel_pembayaran_lunas)) : ?>
          <?php if (count($tabel_pembayaran_lunas) == 0) : ?>
            <?php echo view('Kasir/tabel_pembayaran-lunas'); ?>
          <?php else : ?>
            <?php echo view('Kasir/tabel_pembayaran-lunas', array('tabel_pembayaran_lunas' => $tabel_pembayaran_lunas)); ?>
          <?php endif ?>
        <?php else : ?>
          Error: $tabel_pembayaran_lunas tidak terdefinisi.
        <?php endif ?>
        <!-- Modal -->
        <?php echo view('Template/modal_konfirmasi-hapus', array('url' => base_url('kasir/transaksi/hapus'))); ?>
      </div>
    </div>
  </main>

  <?php echo view('Template/bootstrap_script'); ?>
  <?php echo view('Template/sidebar_script'); ?>
  <?php echo view('Template/modal_konfirmasi-hapus_script'); ?>
</body>

</html>