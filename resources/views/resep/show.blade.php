<!DOCTYPE html>
<html>
<head>
    <title>Detail Resep</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h2 class="mb-4">Detail Resep: {{ $resep->nama }}</h2>

    <div class="card p-4">
        <p><strong>Nama:</strong> {{ $resep->nama }}</p>
        <p><strong>Kategori:</strong> {{ $resep->kategori }}</p>
        <p><strong>Waktu Masak:</strong> {{ $resep->waktu_masak }} menit</p>
        <p><strong>Tingkat Kesulitan:</strong> {{ $resep->tingkat_kesulitan }}</p>
        <p><strong>Porsi:</strong> {{ $resep->porsi }}</p>
        <p><strong>Views:</strong> {{ $resep->views }}</p>
        <p><strong>Isi Resep:</strong><br>{{ $resep->isi_resep }}</p>
    </div>

    <a href="{{ route('resep.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
</body>
</html>