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
    <div class="main-title">Ranca Upas Ciwidey</div>
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
        src="images/Ranca-Upas.jpg"
        width="800"
      />
      <div class="sidebar">
        <h3>Wisata Terbaru</h3>
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
            <a href="/blog2" class="news-item">
                <img
                  alt="Kawah Putih"
                  height="80"
                  src="images/Kawah-Putih.jpg"
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
                  <a href="/blog" class="news-item">
                    <img
                      alt="Ranca Upas"
                      height="80"
                      src="images/Ranca-Upas.jpg"
                      width="80"
                    />
                    <div class="news-content">
                      <strong>Ranca Upas</strong>
                      <div>
                        <i>Kranca upas adalah sebuah tempat wisata di Jawa Barat yang terletak di Desa Alam Endah....</i>
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
            <section id="harga">
                <h2>Ranca Upas</h2>
                <a>Ranca Upas adalah destinasi wisata alam yang ikonik di kawasan Ciwidey, Bandung Selatan. Berikut adalah beberapa informasi lebih lengkap tentang tempat ini</a>
            </section>

<br>
            <section id="keistimewaan">
                <h2>Keistimewaan Ranca Upas</h2>
                <ul>
                    <li>
                        <strong>Penangkaran Rusa:</strong> Tempat di mana pengunjung bisa berinteraksi langsung dengan rusa jinak dan memberi mereka makan.
                    </li>
                    <li>
                        <strong>Camping Ground:</strong> Area perkemahan yang luas dan cocok untuk keluarga, teman, atau komunitas.
                    </li>
                    <li>
                        <strong>Pemandangan Alam:</strong> Lanskap hutan tropis dan pegunungan yang indah, sering diselimuti kabut di pagi hari.
                    </li>
                    <li>
                        <strong>Kegiatan Outdoor:</strong> Trekking, paintball, flying fox, dan berbagai permainan kelompok.
                    </li>
                    <li>
                        <strong>Pemandian Air Panas:</strong> Fasilitas untuk relaksasi dengan air panas alami.
                    </li>
                </ul>
            </section>
<br><br>
            <section id="tips">
                <h2>Tips Berkunjung</h2>
                <ul>
                    <li><strong>Waktu Terbaik:</strong> Datang pagi hari untuk menikmati udara segar dan suasana tenang.</li>
                    <li><strong>Pakaian:</strong> Bawa jaket atau pakaian hangat, karena suhu bisa sangat dingin, terutama malam hari.</li>
                    <li><strong>Peralatan Pribadi:</strong> Siapkan senter, alas tidur, dan kebutuhan dasar jika berkemah.</li>
                    <li><strong>Kebersihan:</strong> Selalu jaga kebersihan dan hindari merusak lingkungan konservasi.</li>
                </ul>
            </section>
<br><br>
            <section id="harga">
                <h2>Harga Tiket Masuk</h2>
                <a>Harga tiket biasanya terjangkau, dengan biaya tambahan untuk aktivitas seperti camping atau outbound. Cek informasi terbaru sebelum berkunjung.</a>
            </section>
            <br>
            <section id="lokasi">
                <h2>Lokasi dan Akses</h2>
                <a>
                    <strong>Alamat:</strong> Jl. Raya Ciwidey-Patengan KM. 11, Patengan, Kec. Rancabali, Kabupaten Bandung, Jawa Barat.<br>
                    <strong>Jarak:</strong> Sekitar 50 km dari Kota Bandung (1,5-2 jam perjalanan).
                </a>
            </section>
        </main>

    </div>
</div>
  </div>
@endsection
