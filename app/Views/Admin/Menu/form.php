<div class="col-2 pb-4">
   <h5>ID Menu</h5>
</div>
<div class="col-10 pb-4">
   <?php if (isset($formData['id_menu'])) : ?>
       <input type="text" value="<?php echo $formData['id_menu']; ?>" disabled readonly>
       <input type="hidden" name="id_menu" value="<?php echo $formData['id_menu']; ?>">
   <?php else : ?>
      <input type="text" value="<di-isikan oleh sistem>" name="id_menu" disabled readonly>
   <?php endif ?>
</div>
<div class="col-2 pb-4">
   <h5>Nama</h5>
</div>
<div class="col-10 pb-4">
   <?php if (isset($formData['nama_menu'])) : ?>
      <input type="text" name="nama_menu" value="<?php echo $formData['nama_menu']; ?>">
   <?php else : ?>
      <input type="text" name="nama_menu">
   <?php endif ?>
</div>
<div class="col-2 pb-4">
   <h5>Jenis</h5>
</div>
<div class="col-10 pb-4">
   <?php if (isset($formData['jenis_menu'])) : ?>
      <input type="text" name="jenis_menu" value="<?php echo $formData['jenis_menu']; ?>">
   <?php else : ?>
      <input type="text" name="jenis_menu">
   <?php endif ?>
</div>
<div class="col-2 pb-4">
   <h5>Kategori</h5>
</div>
<div class="col-10 pb-4">
   <?php if (isset($formData['kategori_menu'])) : ?>
      <input type="text" name="kategori_menu" value="<?php echo $formData['kategori_menu']; ?>">
   <?php else : ?>
      <input type="text" name="kategori_menu">
   <?php endif ?>
</div>
<div class="col-2 pb-4">
   <h5>Harga</h5>
</div>
<div class="col-10 pb-4">
   <?php if (isset($formData['harga_menu'])) : ?>
      <input type="number" name="harga_menu" value="<?php echo $formData['harga_menu']; ?>">
   <?php else : ?>
      <input type="number" name="harga_menu">
   <?php endif ?>
</div>