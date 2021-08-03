<!doctype html>
<html lang="en">

<?php echo view('Template/head') ?>

<body>
  <?php echo view('Template/header') ?>

  <main class="container-fluid">
    <div class="row">
      <?php echo view('Koki/sidebar') ?>

        <div class="row my-5">
          <div class="col">
            <h3 class="text-center font-secondary mb-4">Master File</h2>
              <div class="row justify-content-center">
                <div class="col-4">
                  <div class="card cards p-3 card-shadow">
                    <img src="<?php echo base_url('public/assets/img/bg_list-pesanan.png'); ?>" class="card-img-top m-auto" alt="Pegawai">
                    <div class="card-body">
                      <h5 class="card-title text-center font-primary mb-3">List Pesanan</h5>
                      <p class="card-text font-primary fw-normal">Informasi transaksi Pemesanan</p>
                      <br>
                      <a href="<?php echo base_url('koki/pemesanan'); ?>"
                        class="btn bg--third font-btn font-primary d-block col-6 mx-auto">lihat</a>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card cards p-3 card-shadow">
                    <img src="<?php echo base_url('public/assets/img/bg_cek-menu.png'); ?>" class="card-img-top m-auto" alt="Pegawai">
                    <div class="card-body">
                      <h5 class="card-title text-center font-primary mb-3">Cek Menu</h5>
                      <p class="card-text font-primary fw-normal">Informasi tentang Menu</p>
                      <br>
                      <a href="<?php echo base_url('koki/menu'); ?>"
                        class="btn bg--third font-btn font-primary d-block col-6 mx-auto">lihat</a>
                    </div>
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