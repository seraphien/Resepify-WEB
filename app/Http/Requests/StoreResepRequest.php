<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreResepRequest extends FormRequest
{
    public function authorize()
    {
        return true; // biar user login boleh
    }

    public function rules()
    {
        return [
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'waktu_masak' => 'required|integer',
            'tingkat_kesulitan' => 'required|in:mudah,sedang,sulit',
            'porsi' => 'required|integer',
            'isi_resep' => 'required|string',
        ];
    }
}
