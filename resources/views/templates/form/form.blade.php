
    <h1 class="text-center">Tambah Mahasiswa</h1>
    <a href="<?php echo url('home'); ?>" class="btn btn-success">Kembali</a>

    <div class="mb-3 pt-2">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <div class="mb-3">
        <label for="semester" class="form-label">Semester</label>
        <input type="text" class="form-control" id="semester" name="semester">
    </div>
    <div class="mb-3">
        <label for="prodi" class="form-label">Prodi</label>
        <select class="form-select" name="prodi" id="prodi">
            <option selected disabled> -- Pilih prodi --</option>
            <option value="Manajemen Informatika">Manajemen Informatika</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success form-control">Add</button>
