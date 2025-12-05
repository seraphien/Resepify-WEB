@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card card-custom bg-white">
                <div class="card-body p-4">
                    <h2 class="fw-bold text-primary">
                        <i class="bi bi-emoji-smile-fill me-2"></i>
                        Selamat datang, {{ auth()->user()->username }}!
                    </h2>
                    <p class="text-muted mb-0">Kelola koleksi resep kue favorit Anda dengan mudah</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card card-custom bg-gradient text-white" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                <div class="card-body text-center p-4">
                    <i class="bi bi-book-fill" style="font-size: 3rem;"></i>
                    <h3 class="mt-3 mb-2">Total Resep</h3>
                    <h1 class="display-4 fw-bold">{{ $totalResep }}</h1>
                    <p class="mb-0">Resep tersimpan</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-custom bg-gradient text-white" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                <div class="card-body text-center p-4">
                    <i class="bi bi-star-fill" style="font-size: 3rem;"></i>
                    <h3 class="mt-3 mb-2">Kategori</h3>
                    <h1 class="display-4 fw-bold">{{ $totalKategori }}</h1>
                    <p class="mb-0">Jenis kue berbeda</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-custom bg-gradient text-white" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                <div class="card-body text-center p-4">
                    <i class="bi bi-clock-fill" style="font-size: 3rem;"></i>
                    <h3 class="mt-3 mb-2">Resep Terbaru</h3>
                    <h1 class="display-4 fw-bold">{{ $resepMingguIni }}</h1>
                    <p class="mb-0">Ditambahkan minggu ini</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card card-custom bg-white">
                <div class="card-header bg-transparent border-0 pt-4">
                    <h4 class="fw-bold mb-0">
                        <i class="bi bi-fire me-2 text-danger"></i>Resep Populer
                    </h4>
                </div>
                <div class="card-body">

                    <div class="row g-3">

                        @forelse ($resepPopuler as $resep)
                        <div class="col-md-6">
                            <div class="d-flex align-items-center border rounded p-3">
                                <div class="me-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                                     style="width: 50px; height: 50px;">
                                    <i class="bi bi-star-fill fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1 fw-bold">{{ $resep->nama }}</h6>
                                    <small class="text-muted">
                                        {{ $resep->kategori ?? 'Tanpa kategori' }}
                                    </small>
                                </div>
                            </div>
                        </div>
                        @empty
                            <p class="text-muted">Belum ada resep.</p>
                        @endforelse

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="alert alert-info d-flex align-items-center" role="alert">
                <i class="bi bi-lightbulb-fill fs-3 me-3"></i>
                <div>
                    <h6 class="mb-1 fw-bold">Tips Hari Ini</h6>
                    <p class="mb-0">Gunakan mentega suhu ruang untuk hasil kue yang lebih lembut dan mengembang sempurna!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
