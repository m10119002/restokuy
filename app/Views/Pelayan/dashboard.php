<!doctype html>
<html lang="en">

<?php echo view('Template/head'); ?>

<body>
  <?php echo view('Template/header'); ?>

  <main class="container-fluid">
    <div class="row">
      <?php echo view('Pelayan/sidebar'); ?>
      <div class="col">
        <h1 class="text-center my-5 font-primary">Selamat Datang, Pelayan</h1>
        <div class="row my-5">
          <div class="col">
            <div class="row justify-content-center">
              <div class="col-4">
                <div class="card cards p-3 card-shadow">
                  <img src="<?php echo base_url('public/assets/img/bg_pesanan.png'); ?>" class="card-img-top m-auto" alt="Pegawai">
                  <div class="card-body">
                    <h5 class="card-title text-center font-primary mb-3">Pesanan</h5>
                    <p class="card-text font-primary fw-normal">Informasi Tentang Pesanan</p>
                    <br>
                    <a href="<?php echo base_url('pelayan/pesanan'); ?>" class="btn bg--third font-btn font-primary d-block col-6 mx-auto">lihat</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main>

  <?php echo view('Template/bootstrap_script'); ?>
  <?php echo view('Template/sidebar_script'); ?>
</body>

</html>