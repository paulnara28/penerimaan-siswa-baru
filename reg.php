<?php
include "layout/header.php";
?>

<div class="container">
    <h1>Form Pendaftaran Siswa Baru</h1>
    <form action="aksi_daftar.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <div class="mb-3">
        <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
        <select type="text" class="form-control" id="nama" name="nama" required>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="TempatLahir" class="form-label">Tempat Lahir</label>
        <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" required>
    </div>

    <div class="mb-3">
        <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" required>
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" required> </textarea>
    </div>

    
    <div class="mb-3">
        <label for="noHP" class="form-label">No. HP</label>
        <input type="text" class="form-control" id="noHp" name="noHp" required>
    </div>

    <div class="mb-3">
        <label for="nilaiMatematika" class="form-label">Nilai Matematika</label>
        <input type="number" stop="0.01" class="form-control" id="nilaiMatematika" name="nilaiMatematika" required>
    </div>

    <div class="mb-3">
        <label for="nilaiIPA" class="form-label">Nilai IPA</label>
        <input type="number" stop="0.01" class="form-control" id="nilaiIPA" name="nilaiIPA" required>
    </div>

    <div class="mb-3">
        <label for="nilaiBahasa" class="form-label">Nilai Bahasa</label>
        <input type="number" stop="0.01" class="form-control" id="nilaiBahasa" name="nilaiBahasa" required>
    </div>

    <div class="mb-3">
        <label for="ijazah" class="form-label">ijazah</label>
        <input type="file" class="form-control" id="ijazah" name="ijazah" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>

    </form>
</div>
<?php
include "layout/footer.php"
?>