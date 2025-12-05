@extends('layouts.app')

@section('title', 'Pengelolaan Resep')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card card-custom bg-white">
                <div class="card-body p-4">
                    <h2 class="fw-bold text-primary mb-0">
                        <i class="bi bi-book-fill me-2"></i>Pengelolaan Resep Kue
                    </h2>
                    <p class="text-muted mb-0">Kelola dan lihat semua koleksi resep kue Anda, {{ $username }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-12">
            <button class="btn btn-success btn-lg">
                <i class="bi bi-plus-circle me-2"></i>Tambah Resep Baru
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card card-custom bg-white">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead style="background: linear-gradient(90deg, #ff9a56 0%, #ff6b6b 100%); color: white;">
                                <tr>
                                    <th class="px-4 py-3">No</th>
                                    <th class="py-3">Nama Resep</th>
                                    <th class="py-3">Kategori</th>
                                    <th class="py-3">Waktu Masak</th>
                                    <th class="py-3">Tingkat Kesulitan</th>
                                    <th class="py-3">Porsi</th>
                                    <th class="py-3 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($resepKue as $resep)
                                <tr>
                                    <td class="px-4 py-3">{{ $loop->iteration }}</td>
                                    <td class="py-3">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-cake-fill text-warning me-2 fs-5"></i>
                                            <strong>{{ $resep['nama'] }}</strong>
                                        </div>
                                    </td>
                                    <td class="py-3">
                                        <span class="badge bg-primary">{{ $resep['kategori'] }}</span>
                                    </td>
                                    <td class="py-3">
                                        <i class="bi bi-clock text-info me-1"></i>{{ $resep['waktu_masak'] }}
                                    </td>
                                    <td class="py-3">
                                        @if($resep['tingkat_kesulitan'] == 'Mudah')
                                            <span class="badge bg-success">{{ $resep['tingkat_kesulitan'] }}</span>
                                        @elseif($resep['tingkat_kesulitan'] == 'Sedang')
                                            <span class="badge bg-warning text-dark">{{ $resep['tingkat_kesulitan'] }}</span>
                                        @else
                                            <span class="badge bg-danger">{{ $resep['tingkat_kesulitan'] }}</span>
                                        @endif
                                    </td>
                                    <td class="py-3">
                                        <i class="bi bi-people-fill text-secondary me-1"></i>{{ $resep['porsi'] }}
                                    </td>
                                    <td class="py-3 text-center">
                                        <button class="btn btn-sm btn-info text-white me-1">
                                            <i class="bi bi-eye-fill"></i>
                                        </button>
                                        <button class="btn btn-sm btn-warning text-white me-1">
                                            <i class="bi bi-pencil-fill"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card card-custom bg-white">
                <div class="card-body">
                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-pie-chart-fill text-success me-2"></i>Statistik Kategori
                    </h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Kue Kering
                            <span class="badge bg-primary rounded-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Kue Basah
                            <span class="badge bg-primary rounded-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Kue Ulang Tahun
                            <span class="badge bg-primary rounded-pill">1</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Kue Premium
                            <span class="badge bg-primary rounded-pill">1</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-custom bg-white">
                <div class="card-body">
                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-bar-chart-fill text-danger me-2"></i>Tingkat Kesulitan
                    </h5>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>Mudah</span>
                            <span class="fw-bold">50%</span>
                        </div>
                        <div class="progress" style="height: 20px;">
                            <div class="progress-bar bg-success" style="width: 50%">3 Resep</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>Sedang</span>
                            <span class="fw-bold">17%</span>
                        </div>
                        <div class="progress" style="height: 20px;">
                            <div class="progress-bar bg-warning" style="width: 17%">1 Resep</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>Sulit</span>
                            <span class="fw-bold">33%</span>
                        </div>
                        <div class="progress" style="height: 20px;">
                            <div class="progress-bar bg-danger" style="width: 33%">2 Resep</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
