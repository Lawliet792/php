@extends('beranda.app')

@section('content')
 <!-- bagian slider -->
 <section class="slider_section ">
    <div class="slider_bg_box">
       <img src="{{asset('template-beranda/images/slider-bg.jpg')}}" alt="">
    </div>
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner">
          <div class="carousel-item active">
             <div class="container ">
                <div class="row">
                   <div class="col-md-7 col-lg-6 ">
                      <div class="detail-box">
                         <h1>
                            <span>
                            Diskon 20%
                            </span>
                            <br>
                            Untuk Semua Produk
                         </h1>
                         <p>
                            Dapatkan diskon besar-besaran untuk semua produk kami. Jangan lewatkan kesempatan emas ini untuk berbelanja berbagai produk berkualitas dengan harga terjangkau.
                         </p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="carousel-item ">
             <div class="container ">
                <div class="row">
                   <div class="col-md-7 col-lg-6 ">
                      <div class="detail-box">
                         <h1>
                            <span>
                            Diskon 20%
                            </span>
                            <br>
                            Untuk Semua Produk
                         </h1>
                         <p>
                            Dapatkan diskon besar-besaran untuk semua produk kami. Jangan lewatkan kesempatan emas ini untuk berbelanja berbagai produk berkualitas dengan harga terjangkau.
                         </p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="carousel-item">
             <div class="container ">
                <div class="row">
                   <div class="col-md-7 col-lg-6 ">
                      <div class="detail-box">
                         <h1>
                            <span>
                            Diskon 20%
                            </span>
                            <br>
                            Untuk Semua Produk
                         </h1>
                         <p>
                            Dapatkan diskon besar-besaran untuk semua produk kami. Jangan lewatkan kesempatan emas ini untuk berbelanja berbagai produk berkualitas dengan harga terjangkau.
                         </p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="container">
          <ol class="carousel-indicators">
             <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
             <li data-target="#customCarousel1" data-slide-to="1"></li>
             <li data-target="#customCarousel1" data-slide-to="2"></li>
          </ol>
       </div>
    </div>
 </section>
 <!-- akhir bagian slider -->
</div>

<!-- bagian produk baru -->
<section class="arrival_section">
 <div class="container">
    <div class="box">
       <div class="arrival_bg_box">
          <img src="{{asset('template-beranda/images/arrival-bg.png')}}" alt="">
       </div>
       <div class="row">
          <div class="col-md-6 ml-auto">
             <div class="heading_container remove_line_bt">
                <h2>
                   #ProdukBaru
                </h2>
             </div>
             <p style="margin-top: 20px;margin-bottom: 30px;">
                Lihat koleksi terbaru kami yang baru saja tiba. Temukan berbagai produk unggulan yang pasti akan memenuhi kebutuhan dan gaya Anda.
             </p>
          </div>
       </div>
    </div>
 </div>
</section>
<!-- akhir bagian produk baru -->

<!-- bagian produk -->
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
       <a href="{{route('beranda.produk')}}">
       Lihat Semua Produk
       </a>
    </div>
 </div>
</section>
<!-- akhir bagian produk -->

@endsection
