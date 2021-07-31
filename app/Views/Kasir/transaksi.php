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
        <table class="mt-5 table table-bordered table-hover">
          <thead class="table-light">
            <tr>
              <th>NO Transaksi</th>
              <th>Total Bayar</th>
              <th>Status</th>
              <th>ID Pegawai</th>
              <th>NO Pesanan</th>
              <th>ID Menu</th>
              <th colspan="2" class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <!-- Foreach -->
            <tr>
              <td>001</td>
              <td>Rp. 5000</td>
              <td>Ngutang</td>
              <td>MLNAKNTL69</td>
              <td>123123112</td>
              <td>MKN69</td>
              <td class="text-center">
                <button class="btn btn-sm bg--four font-btn font-white">Lunas</button>
              </td>
            </tr>
            <!-- foreach -->
          </tbody>
        </table>

        <h2 class="mt-5 mb-5 font-primary">Informasi Pembayaran Lunas</h2>
        <table class="table table-bordered table-hover">
          <thead class="table-light">
            <tr>
              <th>NO Transaksi</th>
              <th>Total Bayar</th>
              <th>Status</th>
              <th>ID Pegawai</th>
              <th>NO Pesanan</th>
              <th>ID Menu</th>
              <th colspan="2" class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <!-- Foreach -->
            <tr>
              <td>001</td>
              <td>Rp. 5000</td>
              <td>LUNAS!</td>
              <td>MLNAKNTL69</td>
              <td>123123112</td>
              <td>MKN69</td>
              <td class="text-center">
                <button class="btn btn-sm bg--four font-btn font-white">Belum</button>
                <button class="btn btn-sm bg--primary font-btn font-white">Cetak</button>
              </td>
            </tr>
            <!-- foreach -->
          </tbody>
        </table>
        <!-- Modal -->
        <div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <img src="../../../img/question-circle-fill.svg" alt="question">
                <h5 class="modal-title ms-2" id="exampleModalLabel">Konfirmasi Hapus Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Apakah Anda Yakin Ingin Menghapus ?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-font bg--primary font-white" data-bs-dismiss="modal">Ya</button>
                <button type="button" class="btn btn-font bg--four font-white" data-bs-dismiss="modal">Tidak</button>
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
    document.getElementById('btn-sidebar').addEventListener('click', function () {
      document.getElementById('sidebars').classList.toggle('side');
    })
  </script>
</body>

</html>