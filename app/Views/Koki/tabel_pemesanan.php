<table class="mt-5 table table-bordered table-hover">
  <thead class="table-light">
    <tr>
      <th>NO Pesanan</th>
      <th>Tgl Pesanan</th>
      <th>NO Meja</th>
      <th>ID Pegawai</th>
      <th colspan="2" class="text-center">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php if (count($tabel_pemesanan)<>0) : ?>
      <?php foreach ($tabel_pemesanan as $row) : ?>
        <!-- Foreach -->
        <tr>
          <td><?php echo $row->no_pesanan; ?></td>
          <td><?php echo $row->tgl_pesanan; ?></td>
          <td><?php echo $row->no_meja; ?></td>
          <td><?php echo $row->id_pegawai; ?></td>
          <td class="text-center">
            <button class="btn btn-sm bg--four font-btn font-white">SELESAI</button>
            <a href="<?php echo base_url('koki/pemesanan/detail?no_pesanan=').$row->no_pesanan; ?>" class="btn btn-sm bg--primary font-btn font-white">Detail </a>
          </td>
        </tr>
        <!-- foreach -->
      <?php endforeach ?>
    <?php else : ?>
      <tr>
        <td colspan="5">Data kosong</td>
      </tr>
    <?php endif ?>
  </tbody>
</table>