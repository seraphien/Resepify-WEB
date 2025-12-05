<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $totalResep = Resep::count();
        $totalKategori = 0;
        $resepMingguIni = Resep::where('created_at', '>=', Carbon::now()->subWeek())->count();

        $resepPopuler = Resep::orderBy('created_at', 'desc')->take(4)->get();

        return view('dashboard.index', compact(
            'totalResep',
            'totalKategori',
            'resepMingguIni',
            'resepPopuler'
        ));
    }
}
