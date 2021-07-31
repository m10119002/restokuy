<!doctype html>
<html lang="en">

<?php echo view('Template\head') ?>

<body>
  <?php echo view('Template\header') ?>

  <main class="container-fluid">
    <div class="row">
      <?php echo view('Koki\sidebar') ?>

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