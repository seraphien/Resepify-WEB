@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <!-- BAGIAN KIRI -->
        <div class="col-md-4 mb-4">
            <div class="card card-custom bg-white text-center">
                <div class="card-body p-4">

                    <!-- FOTO PROFIL -->
                    <div class="mb-3">
                        <img src="{{ $user->foto ?? asset('https://i.pinimg.com/736x/71/83/12/7183127cbf59288d16aec3345378e2c8.jpg') }}"
                            alt="Foto Profil"
                            class="rounded-circle shadow"
                            style="width: 120px; height: 120px; object-fit: cover; border: 4px solid white;">
                    </div>

                    <!-- USERNAME -->
                    <h3 class="fw-bold mb-1">{{ $user->username }}</h3>

                    <p class="text-muted mb-3">
                        {{ $user->role === 'pemula' ? 'Chef Pemula' : 'Chef Veteran' }}
                    </p>

                    <!-- STATISTIK -->
                    <div class="d-flex justify-content-center mb-3">
                        <div class="text-center">
                            <h5 class="fw-bold mb-0">{{ $user->resep_count }}</h5>
                            <small class="text-muted">Resep</small>
                        </div>
                    </div>

                    <!-- TOMBOL MODAL -->
                    <button type="button"
                            class="btn btn-primary w-100 mb-2"
                            data-bs-toggle="modal"
                            data-bs-target="#editProfileModal">
                        <i class="bi bi-pencil-fill me-2"></i>Edit Profile
                    </button>

                    <button type="button"
                            class="btn btn-outline-secondary w-100"
                            data-bs-toggle="modal"
                            data-bs-target="#settingsModal">
                        <i class="bi bi-gear-fill me-2"></i>Pengaturan
                    </button>

                </div>
            </div>
        </div>

        <!-- BAGIAN KANAN -->
        <div class="col-md-8">
            <div class="card card-custom bg-white">
                <div class="card-body p-4">

                    <h4 class="fw-bold mb-4">
                        <i class="bi bi-person-circle me-2 text-primary"></i>Informasi Profile
                    </h4>

                    @php
                        $rows = [
                            'Username' => $user->username,
                            'Email' => $user->email,
                            'Bergabung' => \Carbon\Carbon::parse($user->bergabung_pada)->translatedFormat('d F Y'),
                        ];
                    @endphp

                    @foreach ($rows as $label => $value)
                        <div class="row mb-3">
                            <div class="col-md-4"><strong>{{ $label }}:</strong></div>
                            <div class="col-md-8">{{ $value }}</div>
                        </div>
                        <hr>
                    @endforeach

                </div>
            </div>
        </div>

    </div>
</div>
@endsection


@section('scripts')

<!-- MODAL: EDIT PROFILE -->
<div class="modal fade" id="editProfileModal" tabindex="-1">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('profile.update') }}" class="modal-content">
            @csrf
            @method('PUT')

            <div class="modal-header">
                <h5 class="modal-title">Edit Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control"
                           value="{{ $user->email }}" required>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>


<!-- MODAL: PENGATURAN -->
<div class="modal fade" id="settingsModal" tabindex="-1">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('settings.update') }}" class="modal-content">
            @csrf
            @method('PUT')

            <div class="modal-header">
                <h5 class="modal-title">Pengaturan Akun</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control"
                           value="{{ $user->username }}" required>
                </div>

                <div class="mb-3">
                    <label>Password Baru</label>
                    <input type="password" name="password" class="form-control">
                    <small class="text-muted">Kosongkan jika tidak ingin mengubah password.</small>
                </div>

                <div class="mb-3">
                    <label>Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button class="btn btn-primary">Simpan</button>
            </div>

        </form>
    </div>
</div>

@endsection
