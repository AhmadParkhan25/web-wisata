@extends('Layout')

@section('container')
<div class="services_section layout_padding">
    <div class="container">
       <h1 class="services_taital">Rekomendasi </h1>
       <p class="services_text">Berikut adalah rekomendasi wisata di Kabupaten Bandung</p>
       <div class="services_section_2">
          <div class="row">
             <div class="col-md-4">
                <div><img src="images/Gunung-Puntang.jpg" class="services_img" heigh="305px"></div>
                <div class="btn_main"><a href="/blog3">Gunung Puntang</a></div>
             </div>
             <div class="col-md-4">
                <div><img src="images/Kawah-Putih.jpg" class="services_img"></div>
                <div class="btn_main active"><a href="/blog2">Kawah Putih</a></div>
             </div>
             <div class="col-md-4">
                <div><img src="images/Ranca-Upas.jpg" class="services_img"></div>
                <div class="btn_main"><a href="/blog">Ranca Upas</a></div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
