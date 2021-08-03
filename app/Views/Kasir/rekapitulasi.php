<!doctype html>
<html lang="en">

<?php echo view('Template/head'); ?>

<body>
  <?php echo view('Template/header'); ?>

  <main class="container-fluid">
    <div class="row">
      <?php echo view('Kasir/sidebar'); ?>

      <div class="col m-5">
        <h2 class="font-primary">Informasi Rekapitulasi</h2>

        <?php echo form_open('kasir/rekapitulasi/filter'); ?>
        <div class="row mt-5">
          <div class="col-2 mb-3">
            <h5>Dari Tanggal</h5>
          </div>
          <div class="col mb-3">
            <input type="date" name="dari" value="<?php echo isset($formData['dari'])? $formData['dari'] : ''; ?>">
          </div>
        </div>
        <div class="row">
          <div class="col-2">
            <h5>Sampai Tanggal</h5>
          </div>
          <div class="col mb-3">
            <input type="date" name="sampai" value="<?php echo isset($formData['sampai'])? $formData['sampai'] : ''; ?>">
          </div>
        </div>
        <div class="row">
          <div class="col-2"></div>
          <div class="col">
            <button type="submit" class="btn font-btn bg--third font-white">Filter</button>
            <button class="btn font-btn bg--primary font-white">Cetak</button>
          </div>
        </div>

        <?php echo form_close(); ?>
        <?php if (isset($tabel_rekapitulasi)) : ?>
          <?php echo view('Kasir/tabel_rekapitulasi'); ?>
        <?php else : ?>
          Error: $tabel_rekapitulasi tidak terdefinisi.
        <?php endif ?>

        <!-- Modal -->
        <?php echo view('Template/modal_konfirmasi-hapus', array('url' => base_url('kasir/rekapitulasi/hapus'))); ?>
      </div>
    </div>
  </main>

  <?php echo view('Template/bootstrap_script'); ?>
  <?php echo view('Template/sidebar_script'); ?>
  <?php echo view('Template/modal_konfirmasi-hapus_script'); ?>
</body>

</html>