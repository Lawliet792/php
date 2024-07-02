<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Wa;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $produks = Produk::paginate(5); // Menggunakan paginate(5) tanpa get()

    $wa = Wa::first(); // Ini harusnya tidak bermasalah jika Wa::get() mengembalikan instance dari Collection

    return view('beranda.index', compact('produks', 'wa'));
}

public function produk()
{
    $produks = Produk::paginate(20); // Menggunakan paginate(5) tanpa get()

    $wa = Wa::first(); // Ini harusnya tidak bermasalah jika Wa::get() mengembalikan instance dari Collection

    return view('beranda.produk', compact('produks', 'wa'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $produk = Produk::findOrFail($id);

        return view('beranda.detail', compact('produk'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
