<table class="table table-bordered table-hover table-sm">
  <thead class="table-light">
    <tr>
      <th>No Pesanan</th>
      <th>Tanggal Pesanan</th>
      <th>No Meja</th>
      <th colspan="2" class="text-center">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php if (count($tabel_pesanan)<>0) : ?>
      <?php foreach ($tabel_pesanan as $row) : ?>
      <!-- Foreach -->
        <tr>
          <td><?php echo $row->no_pesanan; ?></td>
          <td><?php echo $row->tgl_pesanan; ?></td>
          <td><?php echo $row->no_meja; ?></td>
          <td class="text-center">
            <a href="<?php echo base_url('pelayan/pesanan/edit?no_pesanan=').$row->no_pesanan; ?>" class="btn btn-sm bg--four font-btn font-white">Edit </a>
            <button class="btn btn-sm bg--primary font-btn font-white" data-bs-toggle="modal" data-bs-target="#hapusModal">Hapus</button>
          </td>
        </tr>
        <!-- foreach -->
      <?php endforeach ?>
    <?php else : ?>
      <tr>
        <td colspan="4">Data Kosong</td>
      </tr>
    <?php endif ?>
  </tbody>
</table>