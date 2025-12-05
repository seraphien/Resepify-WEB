@php
    use Illuminate\Support\Facades\Auth;
@endphp

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container">

        {{-- Brand --}}
        <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">
            <i class="bi bi-cake2-fill me-2"></i> Resepify
        </a>

        {{-- Mobile Toggle --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                {{-- Dashboard --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <i class="bi bi-house-fill me-1"></i> Dashboard
                    </a>
                </li>

                {{-- Kelola Resep --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('resep.index') }}">
                        <i class="bi bi-book-fill me-1"></i> Kelola Resep
                    </a>
                </li>

                {{-- Username --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile') }}">
                        <i class="bi bi-person-fill me-1"></i>
                        {{ Auth::user()->username ?? 'User' }}
                    </a>
                </li>

                {{-- Logout --}}
                <li class="nav-item">
                    <form action="{{ url('/logout') }}" method="POST">
                        @csrf
                        <button class="nav-link text-warning fw-bold border-0 bg-transparent">
                            <i class="bi bi-box-arrow-right me-1"></i> Logout
                        </button>
                    </form>
                </li>

            </ul>
        </div>
    </div>
</nav>
