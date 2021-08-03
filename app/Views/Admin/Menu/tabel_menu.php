<table class="table table-bordered table-hover">
  <thead class="table-light">
    <tr>
      <th>ID Menu</th>
      <th>Nama</th>
      <th>Jenis</th>
      <th>Kategori</th>
      <th>Harga</th>
      <th colspan="2" class="text-center">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php if (isset($tabel_menu)) : ?>
      <!-- Foreach -->
      <?php foreach($tabel_menu as $row) : ?>
        <tr>
          <td> <?php echo $row['id_menu']; ?> </td>
          <td> <?php echo $row['nama_menu']; ?> </td>
          <td> <?php echo $row['jenis_menu']; ?> </td>
          <td> <?php echo $row['kategori_menu']; ?> </td>
          <td> <?php echo $row['harga_menu']; ?> </td>
          <td class="text-center">
            <a href="<?php echo base_url('admin/menu/edit?id=').$row['id_menu']; ?>" class="btn btn-sm bg--four font-btn font-white">Edit </a>
            <button class="btn btn-sm bg--primary font-btn font-white" data-bs-toggle="modal" data-bs-target="#hapusModal" 
                onclick="confirm_modal('<?php echo base_url('admin/menu/hapus?id=').$row['id_menu']; ?>');">Hapus </button>
          </td>
        </tr>
        
      <?php endforeach ?>
      <!-- foreach -->
    <?php else : ?>
      <tr>
        <td colspan="6">Data Kosong</td>
      </tr>
    <?php endif ?>
  </tbody>
</table>