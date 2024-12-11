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
    <div class="main-title">Kawah Putih</div>
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
        src="images/Kawah-Putih.jpg"
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
                <h2>Kawah Putih</h2>
                <a>
                    Kawah Putih adalah salah satu destinasi wisata alam paling terkenal di kawasan Ciwidey, Kabupaten Bandung, Jawa Barat. Tempat ini menawarkan pemandangan yang unik dan eksotis, berupa danau kawah vulkanik dengan air berwarna putih kehijauan. Berikut adalah beberapa informasi penting tentang Kawah Putih:
                </a>
            </section>
            <br>
            <section id="keistimewaan">
                <h2>Keistimewaan Kawah Putih</h2>
                <ul>
                    <li>
                        <strong>Danau Kawah Berwarna Putih:</strong> Kawah yang terbentuk dari letusan Gunung Patuha ini memiliki danau dengan air berwarna putih kehijauan yang berubah sesuai suhu, cuaca, dan kandungan belerang.
                    </li>
                    <li>
                        <strong>Suasana Mistis dan Fotogenik:</strong> Dikelilingi kabut tipis dan pepohonan mati, tempat ini sangat fotogenik untuk fotografi atau pre-wedding.
                    </li>
                    <li>
                        <strong>Udara Sejuk:</strong> Berada di ketinggian 2.400 meter di atas permukaan laut, udaranya sangat dingin dan menyegarkan.
                    </li>
                    <li>
                        <strong>Jalur Trekking:</strong> Pengunjung bisa menjelajahi area sekitar untuk melihat keindahan alam lainnya.
                    </li>
                </ul>
            </section>
            <br>
            <section id="tips">
                <h2>Tips Berkunjung</h2>
                <ul>
                    <li><strong>Waktu Terbaik:</strong> Datang pagi hari untuk menghindari keramaian dan menikmati udara segar.</li>
                    <li><strong>Pakaian:</strong> Bawa jaket tebal karena suhu bisa mencapai 8-10°C, terutama pada pagi atau sore hari.</li>
                    <li><strong>Masker:</strong> Gunakan masker untuk mengurangi paparan bau belerang yang cukup kuat.</li>
                    <li><strong>Kamera:</strong> Jangan lupa bawa kamera karena tempat ini sangat fotogenik.</li>
                </ul>
            </section>
            <br>
            <section id="harga">
                <h2>Harga Tiket Masuk</h2>
                <a>Harga tiket masuk bervariasi untuk wisatawan lokal dan mancanegara. Pengunjung juga dikenakan biaya tambahan untuk parkir atau menggunakan fasilitas shuttle menuju lokasi kawah.</a>
            </section>
            <br>
            <section id="lokasi">
                <h2>Lokasi dan Akses</h2>
                <a>
                    <strong>Alamat:</strong> Jl. Raya Soreang-Ciwidey KM. 25, Ciwidey, Kabupaten Bandung, Jawa Barat.<br>
                    <strong>Jarak:</strong> Sekitar 50 km dari Kota Bandung (1,5-2 jam perjalanan).
                </a>
            </section>
        </main>
    </div>
</div>
  </div>
@endsection
