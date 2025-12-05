<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResepController extends Controller
{
    // ==================== INDEX ====================
    public function index()
{
    $resep = Resep::all(); // Semua bisa lihat
    return view('resep.index', compact('resep'));
}
    // ==================== CREATE ====================
    public function create()
    {
        return view('resep.create');
    }

    // ==================== STORE =====================
public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'kategori' => 'required|string|max:255',
        'waktu_masak' => 'required|integer',
        'tingkat_kesulitan' => 'required|in:mudah,sedang,sulit',
        'porsi' => 'required|integer',
        'isi_resep' => 'required|string',
    ]);

    Resep::create([
        'user_id' => Auth::id(),
        'nama' => $request->nama,
        'kategori' => $request->kategori,
        'waktu_masak' => $request->waktu_masak,
        'tingkat_kesulitan' => $request->tingkat_kesulitan,
        'porsi' => $request->porsi,
        'isi_resep' => $request->isi_resep,
    ]);

    return redirect()->route('resep.index')->with('success', 'Resep berhasil ditambahkan!');
}

    // ==================== SHOW ======================
public function show($id)
{
    $resep = Resep::findOrFail($id);

    // Tambah jumlah views
    $resep->increment('views');

    return view('resep.show', compact('resep'));
}

// ==================== EDIT ======================
public function edit($id)
{
    $resep = Resep::findOrFail($id);

    if ($resep->user_id != Auth::id()) {
        abort(403, 'Kamu tidak punya izin mengedit resep ini');
    }

    return view('resep.edit', compact('resep'));
}
    // ==================== UPDATE ====================
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'waktu_masak' => 'required|integer',
            'tingkat_kesulitan' => 'required|in:mudah,sedang,sulit',
            'porsi' => 'required|integer',
            'isi_resep' => 'required|string',
        ]);

        $resep = Resep::findOrFail($id);

        if ($resep->user_id != Auth::id()) {
            abort(403);
        }

        $resep->update([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'waktu_masak' => $request->waktu_masak,
            'tingkat_kesulitan' => $request->tingkat_kesulitan,
            'porsi' => $request->porsi,
            'isi_resep' => $request->isi_resep,
        ]);

        return redirect()->route('resep.index')->with('success', 'Resep berhasil diperbarui!');
    }

    // ==================== DESTROY ====================
    public function destroy($id)
    {
        $resep = Resep::findOrFail($id);

        if ($resep->user_id != Auth::id()) {
            abort(403);
        }

        $resep->delete();

        // Update status user
        $user = Auth::user();
        $user->resep_count--;

        if ($user->resep_count < 20) {
            $user->role = 'pemula';
        } else {
            $user->role = 'veteran';
        }

        return redirect()->route('resep.index')->with('success', 'Resep berhasil dihapus!');
    }

    public function dashboard()
{
    // Total resep
    $totalResep = Resep::count();

    // Total kategori unik
    $totalKategori = Resep::distinct('kategori')->count('kategori');

    // Resep minggu terakhir
    $resepMingguIni = Resep::where('created_at', '>=', now()->subWeek())->count();

    // Resep populer (berdasarkan views)
    $resepPopuler = Resep::orderBy('views', 'desc')->take(2)->get();

    return view('dashboard', compact('totalResep', 'totalKategori', 'resepMingguIni', 'resepPopuler'));
}

}
