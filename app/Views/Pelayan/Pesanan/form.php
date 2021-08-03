<div class="row mb-3">
  <div class="col-3">
    <label for="exampleNoPesanan" class="form-label">No Pesanan</label>
  </div>
  <div class="col-auto">
    <input type="text" class="form-control" id="exampleNoPesanan" name="id_pegawai" required>
  </div>
</div>
<div class="row mb-3">
  <div class="col-3">
    <label for="exampleTanggalLahir" class="form-label">Tanggal</label>
  </div>
  <div class="col-auto">
    <input type="Date" class="form-control" id="exampleTanggalLahir" name="tgl" value="" required>
  </div>
</div>
<div class="row mb-3">
  <div class="col-3">
    <label for="exampleNoMeja" class="form-label">No Meja</label>
  </div>
  <div class="col-auto">
    <input type="text" class="form-control" id="exampleNoMeja" name="no_meja" required>
  </div>
</div>
<div class="row mb-3">
  <div class="col">
    <table class="table table-hover table-borderless">
      <thead class="table-light">
        <tr>
          <th>Menu</th>
          <th>Jumlah</th>
          <th>Harga</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        <!-- Foreach -->
        <tr>
          <td>Nasi Goyeng</td>
          <td>
            <input class="form-control form-control-sm" type="number" value="1" min="1" max="100" style="width: 5em;" autofocus>
          </td>
          <td class="text-end">Rp 400.000.000</td>
          <td>
            <form action="" method="post">
              <button name="hapus_list_pesanan" class="btn btn-sm font-btn bg--secondary font-white">hapus</button>
            </form>
          </td>
        </tr>
        <!-- Batas -->
        <tr>
          <td>Nasi Goyeng</td>
          <td class="w-25">
            <input class="form-control form-control-sm" type="number" value="1" min="1" max="100" style="width: 5em;" autofocus>
          </td>
          <td class="text-end">Rp 400.000.000</td>
          <td>
            <form action="">
              <button name="hapus_list_pesanan" class="btn btn-sm font-btn bg--secondary font-white">hapus</button>
            </form>
          </td>
        </tr>
      </tbody>
      <tfoot class="table-light">
        <tr>
          <td>Total</td>
          <td colspan="2" class="text-end">Rp 800.000.000</td>
          <td>&nbsp;</td>
        </tr>
      </tfoot>
    </table>
  </div>
</div>