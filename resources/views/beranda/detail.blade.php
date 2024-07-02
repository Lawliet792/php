@extends('beranda.app') <!-- Gantilah 'layouts.app' sesuai dengan layout yang Anda gunakan -->

@section('content')
    <div class="container-fluid" style="height: 100vh; display: flex; justify-content: center; align-items: center;">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ $produk->gambar ? \Storage::url($produk->gambar) : 'placeholder.jpg' }}" alt="Gambar Produk" class="img-fluid" style="max-width: 100%; height: auto;">
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center align-items-start">
                        <h2>{{ $produk->judul }}</h2>
                        <p><strong>Harga:</strong> Rp {{ number_format($produk->harga, 3, ',', '.') }}</p>
                        <p><strong>Deskripsi:</strong> {{ $produk->deskripsi }}</p>
                        <div class="mt-4">
                            <a href="{{ route('beranda.index') }}" class="btn btn-primary mr-2">Kembali ke Beranda</a>
                            <button class="btn btn-success">Beli Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
