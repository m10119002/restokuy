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
  <?php if (count($tabel_rekapitulasi)<>0) : ?>
      <!-- Foreach -->
      <?php foreach ($tabel_rekapitulasi as $row) : ?>
        <tr>
          <td><?php echo $row->no_transaksi; ?></td>
          <td><?php echo $row->total_bayar; ?></td>
          <td><?php echo $row->status; ?></td>
          <td><?php echo $row->id_pegawai; ?></td>
          <td><?php echo $row->no_pesanan; ?></td>
          <td><?php echo $row->id_menu; ?></td>
          <td class="text-center">
            <button class="btn btn-sm bg--four font-btn font-white">Lunas</button>
          </td>
        </tr>
      <?php endforeach ?>
      <!-- foreach -->
    <?php else : ?>
      <tr>
        <td colspan="7">Data kosong</td>
      </tr>
    <?php endif ?>
</table>