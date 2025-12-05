@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Resep</h1>

    <a href="{{ route('resep.create') }}" class="btn btn-primary mb-3">Tambah Resep</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Waktu Masak</th>
                <th>Level</th>
                <th>Porsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($resep as $r)
            <tr>
                <td>{{ $r->nama }}</td>
                <td>{{ $r->kategori }}</td>
                <td>{{ $r->waktu_masak }} menit</td>
                <td>{{ $r->tingkat_kesulitan }}</td>
                <td>{{ $r->porsi }}</td>
                <td>
                    <a href="{{ route('resep.show', $r->id) }}" class="btn btn-info btn-sm">
                        View
                    </a>

                    @if ($r->user_id == Auth::id())
                        <a href="{{ route('resep.edit', $r->id) }}" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('resep.destroy', $r->id) }}"
                              method="POST"
                              style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus resep ini?')">
                                Hapus
                            </button>
                        </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
