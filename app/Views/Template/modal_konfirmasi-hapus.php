<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <img src="<?php echo base_url('public/assets/img/question-circle-fill.svg'); ?>" alt="question">
        <h5 class="modal-title ms-2" id="exampleModalLabel">Konfirmasi Hapus Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Apakah Anda Yakin Ingin Menghapus ?</p>
      </div>
      <div class="modal-footer">
        <form id="hapus_menu" method="POST" action="<?php echo $url; ?>">
          <button type="submit" class="btn btn-font bg--primary font-white" data-bs-dismiss="modal">Ya</button>
        </form>
        <button type="button" class="btn btn-font bg--four font-white" data-bs-dismiss="modal">Tidak</button>
      </div>
    </div>
  </div>
</div>