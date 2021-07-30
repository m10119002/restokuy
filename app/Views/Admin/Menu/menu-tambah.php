<!doctype html>
<html lang="en">

<?php echo view('Admin\head'); ?>

<body>
  <?php echo view('Admin\header'); ?>

  <main class="container-fluid">
    <div class="row">

      <?php echo view('Admin\sidebar'); ?> 

      <div class="col m-5">
        <h2 class="font-primary">Tambah Data Menu</h2>
        <a href="<?php echo base_url('admin/menu'); ?>" class="btn font-btn bg--third font-white my-4">Menu</a>
        <!-- Alert -->
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
          <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
              d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
          </symbol>
          <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
              d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
          </symbol>
          <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
              d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
          </symbol>
        </svg>
        <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
            <use xlink:href="#exclamation-triangle-fill" />
          </svg>
          <div>
            Gagal Menambahkan Data!
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill" />
          </svg>
          <div>
            Data Berhasil Ditambah!
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <!-- Alert -->

        <!-- function Alert
      // $color : success, danger, warning, info
      // $Color : Success, Danger, Warning, Info
      // $icon : check-circle, info, exclamation-triangle
      // $message : isi pesan 
      function showMessage($color, $Color, $icon, $message) {
          echo "<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
          <symbol id=\"check-circle-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
              <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\" />
          </symbol>
          <symbol id=\"info-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
              <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z\" />
          </symbol>
          <symbol id=\"exclamation-triangle-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
              <path d=\"M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\" />
          </symbol>
      </svg>";
      echo "<div class=\"alert alert-$color d-flex align-items-center alert-dismissible fade show\" role=\"alert\">
          <svg class=\"bi flex-shrink-0 me-2\" width=\"24\" height=\"24\" role=\"img\" aria-label=\"$Color:\">
              <use xlink:href=\"#$icon-fill\" />
          </svg>
          <div>
              $message
          </div>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
      </div>";
  }
  -->
        <div class="row pt-5">

          <div class="col-2 pb-4">
            <h5>ID Menu</h5>
          </div>

          <div class="col-10 pb-4">
            <input type="text">
          </div>

          <div class="col-2 pb-4">
            <h5>Nama</h5>
          </div>

          <div class="col-10 pb-4">
            <input type="text">
          </div>

          <div class="col-2 pb-4">
            <h5>Jenis</h5>
          </div>

          <div class="col-10 pb-4">
            <input type="text">
          </div>

          <div class="col-2 pb-4">
            <h5>Kategori</h5>
          </div>

          <div class="col-10 pb-4">
            <input type="text">
          </div>

          <div class="col-2 pb-4">
            <h5>Harga</h5>
          </div>

          <div class="col-10 pb-4">
            <input type="text">
          </div>

          <div class="col-4 pb-4">
            <button class="btn font-btn bg--primary font-white">TAMBAH</button>
          </div>

        </div>

      </div>

    </div>
  </main>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
  <script>
    // $('#btn-sidebar').click(function () {
    //   $('#sidebar').hide();
    // })
    document.getElementById('btn-sidebar').addEventListener('click', function () {
      document.getElementById('sidebars').classList.toggle('side');
    })
  </script>
</body>

</html>