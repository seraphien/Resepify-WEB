<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    protected $table = 'resep';

    protected $fillable = [
        'user_id',
        'nama',
        'kategori',
        'waktu_masak',
        'tingkat_kesulitan',
        'porsi',
        'isi_resep'
    ];

    /**
     * Relasi ke user pembuat resep
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /* ============================================================
     |  OPTIONAL: HELPER CRUD AGAR CONTROLLER LEBIH RAPI
     |  (Tidak wajib dipakai, tetapi membantu)
     ============================================================ */

    /**
     * Ambil semua resep milik user tertentu
     */
    public static function getByUser($userId)
    {
        return self::where('user_id', $userId)->get();
    }

    /**
     * Tambah resep baru
     */
    public static function tambahResep(array $data)
    {
        return self::create($data);
    }

    /**
     * Update resep berdasarkan id
     */
    public static function editResep($id, array $data)
    {
        $resep = self::findOrFail($id);
        $resep->update($data);
        return $resep;
    }

    /**
     * Hapus resep berdasarkan id
     */
    public static function hapusResep($id)
    {
        $resep = self::findOrFail($id);
        return $resep->delete();
    }
}
