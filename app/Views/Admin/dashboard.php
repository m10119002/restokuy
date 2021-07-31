<!doctype html>
<html lang="en">

<?php echo view('Template\head'); ?>

<body>
  <?php echo view('Template\header'); ?>

  <main class="container-fluid">
    <div class="row">
      <?php echo view('Admin\sidebar'); ?>
      <div class="col">
        <h1 class="text-center my-5 font-primary">Selamat Datang, Admin</h1>
        <div class="row justify-content-evenly">
          <div class="col-2 bg--four p-3">
            <div class="row">
              <div class="col text-center m-auto">
                <span class="fs-1 fw-bold font-secondary"><?php echo $counter['pelayan']; ?></span>
              </div>
              <div class="col text-center">
                <div class="row">
                  <div class="col">
                    <img src="<?php echo base_url('public/assets/img/icon-pegawai.svg'); ?>" alt="Pegawai" class="icon-dashboard">
                  </div>
                </div>
                <div class="row">
                  <div class="col gy-2">
                    <span class="fs-5 fw-bold font-secondary">Pelayan</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-2 bg--four p-3">
            <div class="row">
              <div class="col text-center m-auto">
                <span class="fs-1 fw-bold font-secondary"><?php echo $counter['menu']; ?></span>
              </div>
              <div class="col text-center">
                <div class="row">
                  <div class="col">
                    <img src="<?php echo base_url('public/assets/img/icon-menu.svg'); ?>" alt="Menu" class="icon-dashboard">
                  </div>
                </div>
                <div class="row">
                  <div class="col gy-2">
                    <span class="fs-5 fw-bold font-secondary">Menu</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-2 bg--four p-3">
            <div class="row">
              <div class="col text-center m-auto">
                <span class="fs-1 fw-bold font-secondary"><?php echo $counter['koki']; ?></span>
              </div>
              <div class="col text-center">
                <div class="row">
                  <div class="col">
                    <img src="<?php echo base_url('public/assets/img/icon-koki.svg'); ?>" alt="Koki" class="icon-dashboard">
                  </div>
                </div>
                <div class="row">
                  <div class="col gy-2">
                    <span class="fs-5 fw-bold font-secondary">Koki</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-2 bg--four p-3">
            <div class="row">
              <div class="col text-center m-auto">
                <span class="fs-1 fw-bold font-secondary"><?php echo $counter['kasir']; ?></span>
              </div>
              <div class="col text-center">
                <div class="row">
                  <div class="col">
                    <img src="<?php echo base_url('public/assets/img/icon-kasir.svg'); ?>" alt="Kasir" class="icon-dashboard">
                  </div>
                </div>
                <div class="row">
                  <div class="col gy-2">
                    <span class="fs-5 fw-bold font-secondary">Kasir</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row my-5">
          <div class="col">
            <h3 class="text-center font-secondary mb-4">Master File</h2>
              <div class="row justify-content-center">
                <div class="col-4">
                  <div class="card cards p-3 card-shadow">
                    <img src="<?php echo base_url('public/assets/img/bg_pegawai.png'); ?>" class="card-img-top m-auto" alt="Pegawai">
                    <div class="card-body">
                      <h5 class="card-title text-center font-primary mb-3">Pegawai</h5>
                      <p class="card-text font-primary fw-normal">Informasi Tentang Pegawai</p>
                      <br>
                      <a href="<?php echo base_url('admin/pegawai'); ?>" class="btn bg--third font-btn font-primary d-block col-6 mx-auto">lihat</a>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card cards p-3 card-shadow">
                    <img src="<?php echo base_url('public/assets/img/bg_menu.png'); ?>" class="card-img-top m-auto" alt="Menu">
                    <div class="card-body">
                      <h5 class="card-title text-center font-primary mb-3">Menu</h5>
                      <p class="card-text font-primary fw-normal">Informasi Tentang Menu Makanan dan Minuman</p>
                      <a href="<?php echo base_url('admin/menu'); ?>" class="btn bg--third font-btn font-primary d-block col-6 mx-auto">lihat</a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="<?php echo base_url('public/assets/js/bootstrap.bundle.min.js'); ?>"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
  <script>
    // $('#btn-sidebar').click(function () {
    //   $('#sidebar').hide();
    // })
    document.getElementById('btn-sidebar').addEventListener('click', function() {
      document.getElementById('sidebars').classList.toggle('side');
    })
  </script>
</body>

</html>