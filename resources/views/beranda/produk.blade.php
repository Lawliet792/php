@extends('beranda.app')
@section('content')
<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Produk <span>kami</span>
          </h2>
       </div>
       <div class="row">
           @foreach ($produks as $item)
   <div class="col-sm-6 col-md-4 col-lg-4">
       <div class="box">
           <div class="option_container">
               <div class="options">
                   <a href="{{ route('beranda.detail', ['id' => $item->id]) }}" class="option1">
                       Detail
                   </a>
                   <a href="https://wa.me/{{ $wa->wa }}" class="option2">
                       Beli Sekarang
                   </a>
               </div>
           </div>
           <div class="img-box">
               <img src="{{ $item->gambar ? \Storage::url($item->gambar) : '' }}" alt="{{ $item->judul }}">
           </div>
           <div class="detail-box">
               <h5>{{ $item->judul }}</h5>
               <h6>Rp {{ number_format($item->harga, 3, ',', '.') }}</h6>
           </div>
       </div>
   </div>
   @endforeach

          <!-- Tambahkan produk lainnya di sini -->
       </div>
       <div class="btn-box">
          <a href="">
          Lihat Semua Produk
          </a>
       </div>
    </div>
   </section>
 <!-- end product section -->
@endsection
