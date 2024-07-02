<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdukUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'judul' => ['required', 'max:255', 'string'],
            'kategori_id' => ['required', 'exists:kategoris,id'],
            'bahan_id' => ['required', 'exists:bahans,id'],
            'deskripsi' => ['required', 'string'],
            'harga' => ['required', 'numeric'],
            'gambar' => ['image', 'max:1024', 'required'],
        ];
    }
}
