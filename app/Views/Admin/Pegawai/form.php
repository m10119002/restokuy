<div class="row mb-3">
    <div class="col-2">
        <label for="exampleIDPegawai" class="form-label">ID Pegawai</label>
    </div>
    <div class="col-auto">
        <?php if(isset($formData['id_pegawai'])): ?>
            <input type="hidden" name="old_id" value="<?php echo $formData['id_pegawai']; ?>">
            <input type="text" class="form-control" id="exampleIDPegawai" name="id_pegawai" value="<?php echo $formData['id_pegawai']; ?>" required>
            <?php if(isset($validation)): ?>
            <?php if($validation->hasError('id_pegawai')): ?>
                <div class="invalid-feedback d-block">
                    <?php echo $validation->getError('id_pegawai'); ?>
                </div>
            <?php else: ?>
                <div class="valid-feedback d-block">
                    ID Pegawai tersedia!
                </div>
            <?php endif ?>
            <?php endif ?>
        <?php else: ?>
            <input type="text" class="form-control" id="exampleIDPegawai" name="id_pegawai" required>
        <?php endif ?>
    </div>
</div>
<div class="row mb-3">
    <div class="col-2">
        <label for="exampleName" class="form-label">Nama Lengkap</label>
    </div>
    <div class="col">
        <?php if(isset($formData['nama_pegawai'])): ?>
            <input type="text" class="form-control" id="exampleName" name="nama_pegawai" value="<?php echo $formData['nama_pegawai']; ?>" required>
            <?php if(isset($validation)): ?>
            <?php if($validation->hasError('nama_pegawai')): ?>
                <div class="invalid-feedback d-block">
                    <?php echo $validation->getError('nama_pegawai'); ?>
                </div>
            <?php else: ?>
                <div class="valid-feedback d-block">
                    Nama Pegawai aman!
                </div>
            <?php endif ?>
            <?php endif ?>
        <?php else: ?>
            <input type="text" class="form-control" id="exampleName" name="nama_pegawai" required>
        <?php endif ?>
    </div>
</div>
<div class="row mb-3">
    <div class="col-2">
        <label for="exampleTempat" class="form-label">Tempat</label>
    </div>
    <div class="col-auto">
        <?php if(isset($formData['tempat_lahir'])): ?>
            <input type="text" class="form-control" id="exampleTempat" name="tempat_lahir" value="<?php echo $formData['tempat_lahir']; ?>" required>
            <?php if(isset($validation)): ?>
            <?php if($validation->hasError('tempat_lahir')): ?>
                <div class="invalid-feedback d-block">
                    <?php echo $validation->getError('tempat_lahir'); ?>
                </div>
            <?php else: ?>
                <div class="valid-feedback d-block">
                    Tempat Lahir aman!
                </div>
            <?php endif ?>
            <?php endif ?>
        <?php else: ?>
            <input type="text" class="form-control" id="exampleTempat" name="tempat_lahir" required>
        <?php endif ?>
    </div>
</div>
<div class="row mb-3">
    <div class="col-2">
        <label for="exampleTanggalLahir" class="form-label">Tanggal Lahir</label>
    </div>
    <div class="col-auto">
        <?php if(isset($formData['tgl_lahir'])): ?>
            <input type="Date" class="form-control" id="exampleTanggalLahir" name="tgl_lahir" value="<?php echo $formData['tgl_lahir']; ?>" required>
            <?php if(isset($validation)): ?>
            <?php if($validation->hasError('tgl_lahir')): ?>
                <div class="invalid-feedback d-block">
                    <?php echo $validation->getError('tgl_lahir'); ?>
                </div>
            <?php else: ?>
                <div class="valid-feedback d-block">
                    Tanggal Lahir aman!
                </div>
            <?php endif ?>
            <?php endif ?>
        <?php else: ?>
            <input type="Date" class="form-control" id="exampleTanggalLahir" name="tgl_lahir" required>
        <?php endif ?>
    </div>
</div>
<div class="row mb-3">
    <div class="col-2">
        <label for="exampleHP" class="form-label">Nomor HP</label>
    </div>
    <div class="col">
        <?php if(isset($formData['no_hp'])): ?>
            <input type="text" class="form-control" id="exampleHP" name="no_hp" value="<?php echo $formData['no_hp']; ?>" required>
            <?php if(isset($validation)): ?>
            <?php if($validation->hasError('no_hp')): ?>
                <div class="invalid-feedback d-block">
                    <?php echo $validation->getError('no_hp'); ?>
                </div>
            <?php else: ?>
                <div class="valid-feedback d-block">
                    Nomor HP aman!
                </div>
            <?php endif ?>
            <?php endif ?>
        <?php else: ?>
            <input type="text" class="form-control" id="exampleHP" name="no_hp" required>
        <?php endif ?>
    </div>
</div>
<div class="row mb-3">
    <div class="col-2">
        <label for="exampleAlamat" class="form-label">Alamat</label>
    </div>
    <div class="col">
        <?php if(isset($formData['alamat'])): ?>
            <textarea class="form-control" id="exampleAlamat" cols="1" rows="3" name="alamat" required><?php echo $formData['alamat']; ?></textarea>
            <?php if(isset($validation)): ?>
            <?php if($validation->hasError('alamat')): ?>
                <div class="invalid-feedback d-block">
                    <?php echo $validation->getError('alamat'); ?>
                </div>
            <?php else: ?>
                <div class="valid-feedback d-block">
                    Alamat aman!
                </div>
            <?php endif ?>
            <?php endif ?>
        <?php else: ?>
            <textarea class="form-control" id="exampleAlamat" cols="1" rows="3" name="alamat" required></textarea>
        <?php endif ?>
    </div>
</div>
<div class="row mb-3">
    <div class="col-2">
        <label for="exampleJabatan" class="form-label">Jabatan</label>
    </div>
    <div class="col-auto">
        <?php if(isset($formData['jabatan'])): ?>
            <select class="form-select" name="jabatan" id="exampleJabatan" required>
                <option value="">~ Pilih Jabatan ~</option>
                <option value="Admin" <?php echo (strtolower($formData['jabatan'])=='admin')? 'selected': ''; ?>>Admin</option>
                <option value="Pelayan" <?php echo (strtolower($formData['jabatan'])=='pelayan')? 'selected': ''; ?>>Pelayan</option>
                <option value="Kasir" <?php echo (strtolower($formData['jabatan'])=='kasir')? 'selected': ''; ?>>Kasir</option>
                <option value="Koki" <?php echo (strtolower($formData['jabatan'])=='koki')? 'selected': ''; ?>>Koki</option>
            </select>
            <?php if(isset($validation)): ?>
            <?php if($validation->hasError('jabatan')): ?>
                <div class="invalid-feedback d-block">
                    <?php echo $validation->getError('jabatan'); ?>
                </div>
            <?php else: ?>
                <div class="valid-feedback d-block">
                    Jabatan aman!
                </div>
            <?php endif ?>
            <?php endif ?>
        <?php else: ?>
            <select class="form-select" name="jabatan" id="exampleJabatan" required>
                <option value="" selected>~ Pilih Jabatan ~</option>
                <option value="Admin">Admin</option>
                <option value="Pelayan">Pelayan</option>
                <option value="Kasir">Kasir</option>
                <option value="Koki">Koki</option>
            </select>
        <?php endif ?>
    </div>
</div>
<div class="row mb-3">
    <div class="col-2">
        <label for="exampleUsername" class="form-label">Username</label>
    </div>
    <div class="col-auto">
        <?php if(isset($formData['username'])): ?>
            <input type="hidden" name="old_username" value="<?php echo $formData['username']; ?>">
            <input type="text" class="form-control" id="exampleUsername" name="username" value="<?php echo $formData['username']; ?>" required>
            <?php if(isset($validation)): ?>
            <?php if($validation->hasError('username')): ?>
                <div class="invalid-feedback d-block">
                    <?php echo $validation->getError('username'); ?>
                </div>
            <?php else: ?>
                <div class="valid-feedback d-block">
                    Username aman!
                </div>
            <?php endif ?>
            <?php endif ?>
        <?php else: ?>
            <input type="text" class="form-control" id="exampleUsername" name="username" required>
        <?php endif ?>
    </div>
</div>
<div class="row mb-3">
    <div class="col-2">
        <label for="examplePassword" class="form-label">Password</label>
    </div>
    <div class="col-auto">
        <?php if(isset($formData['password'])): ?>
            <input type="password" class="form-control" id="examplePassword" name="password" value="<?php echo $formData['password']; ?>" required>
            <?php if(isset($validation)): ?>
            <?php if($validation->hasError('password')): ?>
                <div class="invalid-feedback d-block">
                    <?php echo $validation->getError('password'); ?>
                </div>
            <?php else: ?>
                <div class="valid-feedback d-block">
                    Password aman!
                </div>
            <?php endif ?>
            <?php endif ?>
        <?php else: ?>
            <input type="password" class="form-control" id="examplePassword" name="password" required>
        <?php endif ?>
    </div>
</div>
<div class="row mb-3">
    <div class="col-2">
        <label for="examplePasswordUlang" class="form-label">Password Ulang</label>
    </div>
    <div class="col-auto">
        <?php if(isset($formData['password_ulang'])): ?>
            <input type="password" class="form-control" id="examplePasswordUlang" name="password_ulang" value="<?php echo $formData['password_ulang']; ?>" required>
            <?php if(isset($validation)): ?>
            <?php if($validation->hasError('password_ulang')): ?>
                <div class="invalid-feedback d-block">
                    <?php echo $validation->getError('password_ulang'); ?>
                </div>
            <?php else: ?>
                <div class="valid-feedback d-block">
                    Password aman!
                </div>
            <?php endif ?>
            <?php endif ?>
        <?php else: ?>
            <input type="password" class="form-control" id="examplePasswordUlang" name="password_ulang" required>
        <?php endif ?>
    </div>
</div>