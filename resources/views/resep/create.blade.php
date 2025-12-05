<!DOCTYPE html>
<html>
<head>
    <title>Tambah Resep</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h2 class="mb-4">Tambah Resep Baru</h2>

    <form action="{{ route('resep.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Resep</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select name="kategori" class="form-select" required>
                <option value="Kue Basah">Kue Basah</option>
                <option value="Kue Kering">Kue Kering</option>
                <option value="Roti">Roti</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Waktu Masak (menit)</label>
            <input type="number" name="waktu_masak" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tingkat Kesulitan</label><br>
            <input type="radio" name="tingkat_kesulitan" value="mudah"> Mudah
            <input type="radio" name="tingkat_kesulitan" value="sedang" class="ms-3"> Sedang
            <input type="radio" name="tingkat_kesulitan" value="sulit" class="ms-3"> Sulit
        </div>

        <div class="mb-3">
            <label class="form-label">Porsi</label>
            <input type="number" name="porsi" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Isi Resep</label>
            <textarea name="isi_resep" class="form-control" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('resep.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>