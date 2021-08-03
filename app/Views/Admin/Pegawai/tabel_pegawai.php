<table class="table table-bordered table-hover table-sm">
  <thead class="table-light">
    <tr>
      <th>ID Pegawai</th>
      <th>Nama</th>
      <th>Tempat, Tanggal Lahir</th>
      <th>Nomor Telepon</th>
      <th>Alamat</th>
      <th>Jabatan</th>
      <th>Username</th>
      <th colspan="2" class="text-center">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php if (isset($tabel_pegawai)) : ?>
      <?php foreach ($tabel_pegawai as $row) : ?>
        <tr>
          <td> <?php echo $row->id_pegawai; ?> </td>
          <td> <?php echo $row->nama_pegawai; ?> </td>
          <td> <?php echo $row->tempat_lahir; ?>, <?php echo $row->tgl_lahir; ?> </td>
          <td> <?php echo $row->no_hp; ?> </td>
          <td> <?php echo $row->alamat; ?> </td>
          <td> <?php echo $row->jabatan; ?> </td>
          <td> <?php echo $row->username; ?> </td>
          <td class="text-center">
            <a href="<?php echo base_url('admin/pegawai/edit?id=').$row->id_pegawai; ?>" class="btn btn-sm bg--four font-btn font-white">Edit </a>
            <button class="btn btn-sm bg--primary font-btn font-white" data-bs-toggle="modal" data-bs-target="#hapusModal" 
                onclick="confirm_modal('<?php echo base_url('admin/pegawai/hapus?id=').$row->id_pegawai; ?>');">Hapus </button>
          </td>
        </tr>
      <?php endforeach ?>
    <?php else : ?>
      <tr>
        <td colspan="8"></td>
      </tr>
    <?php endif ?>
  </tbody>
</table>