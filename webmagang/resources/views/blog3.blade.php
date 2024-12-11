@extends('Layout')

@section('container')
<div class="containerb">
    <div class="breadcrumb">
      <a href="/"> Beranda </a>
      &gt;
      <a href="/blog"> Blog </a>
      &gt;
    </div>
    <div class="title">WISATA Alam</div>
    <div class="main-title">Gunung Puntang</div>
{{--     <div class="meta">
      <i class="fas fa-user"> </i>
      admin
      <i class="fas fa-calendar-alt"> </i>
      08 July 2024
    </div> --}}
    <div class="content">
      <img
        alt=""
        height="400"
        src="images/Gunung-Puntang.jpg"
        width="800"
      />
      <div class="sidebar">
        <h3>Wisata Terbaru</h3>
        <a href="/blog" class="news-item">
          <img
            alt="Kawah Putih"
            height="80"
            src="images/Ranca-Upas.jpg"
            width="80"
          />
          <div class="news-content">
            <strong>Ranca Upas</strong>
            <div>
              <i>Ranca Upas adalah sebuah tempat wisata di Jawa Barat yang terletak di Desa Alam Endah....</i>
            </div>
          </div>
        </a>
{{--             <div class="date">
              <i class="fas fa-calendar-alt"> </i>
              22 July 2024
            </div> --}}
            <a href="/blog2" class="news-item">
                <img
                  alt="Kawah Putih"
                  height="80"
                  src="images/img-2.jpg"
                  width="80"
                />
                <div class="news-content">
                  <strong>Kawah Putih</strong>
                  <div>
                    <i>Kawah Putih adalah sebuah tempat wisata di Jawa Barat yang terletak di Desa Alam Endah....</i>
                  </div>
                </div>
              </a>
      {{--             <div class="date">
                    <i class="fas fa-calendar-alt"> </i>
                    22 July 2024
                  </div> --}}
                  <a href="/blog3" class="news-item">
                    <img
                      alt="Gunung Puntang"
                      height="80"
                      src="images/Gunung-Puntang.jpg"
                      width="80"
                    />
                    <div class="news-content">
                      <strong>Gunung Puntang</strong>
                      <div>
                        <i>Gunung Puntang adalah sebuah tempat wisata di Jawa Barat yang terletak di Desa Alam Endah....</i>
                      </div>
                    </div>
                  </a>
          {{--             <div class="date">
                        <i class="fas fa-calendar-alt"> </i>
                        22 July 2024
                      </div> --}}
          </div>
        </div>

    <div class="description">
        <main>
            <section id="lokasi">
                <h2>Gunung Puntang</h2>
                <a>
                    Gunung Puntang adalah salah satu destinasi wisata alam yang terletak di kawasan Bandung Selatan, Jawa Barat. Tempat ini memiliki daya tarik sejarah, keindahan alam, dan suasana sejuk khas pegunungan yang membuatnya populer di kalangan wisatawan dan pendaki. Berikut adalah informasi tentang Gunung Puntang:
                </a>
            </section>
          <br>

            <section id="keistimewaan">
                <h2>Keistimewaan Gunung Puntang</h2>
                <ul>
                    <li>
                        <strong>Sejarah Radio Telegrap:</strong> Lokasi bekas Stasiun Radio Malabar, pusat komunikasi radio terbesar dunia pada masanya.
                    </li>
                    <li>
                        <strong>Pemandangan Alam:</strong> Dikelilingi hutan tropis, sungai, dan air terjun yang asri.
                    </li>
                    <li>
                        <strong>Puncak Mega:</strong> Menawarkan pemandangan Bandung dan sekitarnya dari ketinggian.
                    </li>
                    <li>
                        <strong>Legenda Lokal:</strong> Cerita tentang Raja Puntang menambah daya tarik budaya.
                    </li>
                </ul>
            </section>
            <br>
            <section id="aktivitas">
                <h2>Aktivitas Wisata</h2>
                <ul>
                    <li><strong>Pendakian:</strong> Jalur moderat yang cocok untuk pendaki pemula hingga menengah (sekitar 4-5 jam ke puncak).</li>
                    <li><strong>Camping:</strong> Area camping yang luas dengan fasilitas dasar seperti toilet dan sumber air bersih.</li>
                    <li><strong>Eksplorasi Sejarah:</strong> Menjelajahi reruntuhan Stasiun Radio Malabar dan gua-gua di sekitarnya.</li>
                    <li><strong>Fotografi:</strong> Lanskap alam dan sisa-sisa sejarah ideal untuk fotografi.</li>
                </ul>
            </section>
            <br>
            <section id="tips">
                <h2>Tips Berkunjung</h2>
                <ul>
                    <li><strong>Persiapan Fisik:</strong> Pastikan kondisi tubuh fit, terutama jika berniat mendaki hingga puncak.</li>
                    <li><strong>Peralatan Camping:</strong> Bawa tenda, sleeping bag, dan alat masak portabel jika berencana berkemah.</li>
                    <li><strong>Kebersihan:</strong> Selalu bawa kembali sampah Anda untuk menjaga kebersihan lingkungan.</li>
                    <li><strong>Waktu Kunjungan:</strong> Hindari musim hujan untuk jalur pendakian yang lebih aman.</li>
                </ul>
            </section>
            <br>
            <section id="harga">
                <h2>Harga Tiket Masuk</h2>
                <a>
                    Tiket masuk kawasan Gunung Puntang biasanya berkisar antara Rp 15.000 - Rp 25.000 per orang. Biaya tambahan berlaku untuk camping dan parkir kendaraan.
                </a>
            </section>
            <br>
            <section id="lokasi">
                <h2>Lokasi dan Akses</h2>
                <a>
                    <strong>Alamat:</strong> Desa Cimaung, Kecamatan Banjaran, Kabupaten Bandung, Jawa Barat.<br>
                    <strong>Ketinggian:</strong> 2.223 meter di atas permukaan laut.<br>
                    <strong>Jarak dari Bandung:</strong> Sekitar 35 km atau 1-1,5 jam perjalanan dari pusat Kota Bandung.
                </a>
            </section>
        </main>
    </div>
</div>
  </div>
@endsection
