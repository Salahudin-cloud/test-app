<h1 class="text-center">Edit Mahasiswa</h1>
<a href="<?php echo url('home'); ?>" class="btn btn-success">Kembali</a>

<div class="mb-3 pt-2">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="{{ $mahasiswa->nama }}">
</div>
<div class="mb-3">
    <label for="semester" class="form-label">Semester</label>
    <input type="text" class="form-control" id="semester" name="semester" value="{{ $mahasiswa->semester }}">
</div>
<div class="mb-3">
    <label for="prodi" class="form-label">Prodi</label>
    <select class="form-select" name="prodi" id="prodi">
        <option value="" selected disabled> -- Pilih prodi jurusan --</option>
        <option value="Manajemen Informatika" {{ $mahasiswa->prodi == 'Manajemen Informatika' ? 'selected' : '' }}>
            Manajemen
            Informatika</option>
        <option value="Teknik Informatika" {{ $mahasiswa->prodi == 'Teknik Informatika' ? 'selected' : '' }}>Teknik
            Informatika
        </option>
        <option value="Sistem Informasi" {{ $mahasiswa->prodi == 'Sistem Informasi' ? 'selected' : '' }}>Sistem
            Informasi
        </option>
    </select>
</div>
<button type="submit" class="btn btn-success form-control">Edit</button>
