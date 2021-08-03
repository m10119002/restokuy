<table class="mt-5 table table-bordered table-hover">
  <thead class="table-light">
    <tr>
      <th>ID Menu</th>
      <th>Nama Menu</th>
      <th>Kategori Menu</th>
      <th>Jenis Menu</th>
      <th>Harga Menu</th>
      <th>Gambar Menu</th>
      <th colspan="2" class="text-center">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php if (isset($tabel_cek_menu)) : ?>
      <?php foreach ($tabel_cek_menu as $row) : ?>
        <!-- Foreach -->
        <tr>
          <td><?php echo $row->id_menu; ?></td>
          <td><?php echo $row->nama_menu; ?></td>
          <td><?php echo $row->kategori_menu; ?></td>
          <td><?php echo $row->jenis_menu; ?></td>
          <td><?php echo $row->harga_menu; ?></td>
          <td><?php echo '<img style="width:300px; height:200px;" src="data:image/jpg;base64,'.base64_encode($row->gambar_menu).'"/>'; ?></td>
          <td class="text-center">
            <button class="btn btn-sm bg--four font-btn font-white" data-bs-toggle="modal" data-bs-target="#hapusModal">Lunas</button>
          </td>
        </tr>
        <!-- foreach -->
      <?php endforeach ?>
    <?php else : ?>
      <tr>
        <td colspan="7">Data kosong</td>
      </tr>
    <?php endif ?>
  </tbody>
</table>