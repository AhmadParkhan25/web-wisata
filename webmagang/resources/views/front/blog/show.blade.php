@extends('Layout')

@section('container')
    <div class="containerb">
        <div class="breadcrumb">
            <a href="/"> Beranda </a>
            <i class="bi bi-chevron-compact-right"></i>
            <a href="{{ route('front.blog.index') }}"> Blog </a>
            <i class="bi bi-chevron-compact-right"></i>
            <a href="{{ route('front.blog.show', [$wisata->judul, $wisata->id]) }}" class="text-truncate">
                {{ $wisata->judul }}
            </a>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="main-title">{{ $wisata->judul }}</div>
                <div class="meta">
                    <p class="m-0">
                        <i class="bi bi-person-fill"> </i>
                        admin, {{ ' ' }}
                        <i class="bi bi-calendar-fill"> </i>
                        {{ $wisata->created_at->translatedFormat('d F Y') }}
                    </p>
                </div>
                <div class="overflow-hidden w-100 bg-primary" style="height: 400px;">
                    <img src="{{ url("uploads/$wisata->image") }}" alt="{{ $wisata->judul }}" class="h-100 w-100"
                        style="object-fit: cover;" />
                </div>

                <div class="description w-100">
                    <main>
                        <section id="harga">
                            <h2>{{ $wisata->judul }}</h2>
                            <div class="summernote display">
                                {!! $wisata->descrip !!}
                            </div>
                        </section>

                        <br>
                        <section id="keistimewaan">
                            <h2>Keistimewaan {{ $wisata->judul }}</h2>
                            <div class="summernote display">
                                {!! $wisata->istimewa !!}
                            </div>
                        </section>
                        <br><br>
                        <section id="tips">
                            <h2>Tips Berkunjung</h2>
                            <div class="summernote display">
                                {!! $wisata->tips !!}
                            </div>
                        </section>
                        <br><br>
                        <section id="harga">
                            <h2>Harga Tiket Masuk</h2>
                            <p class="m-0">
                                <strong>Rp {{ number_format($wisata->harga, 2, ',', '.') }},-</strong>
                                <br>
                                Harga tiket biasanya terjangkau, dengan biaya tambahan untuk aktivitas seperti camping,
                                outbound, dll. Cek informasi terbaru sebelum berkunjung.
                            </p>
                        </section>
                        <br>
                        <section id="lokasi">
                            <h2>Lokasi dan Akses</h2>
                            <a>
                                <strong>Alamat:</strong> {{ $wisata->lokasi }}
                            </a>
                        </section>
                    </main>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="sidebar w-100 p-0">
                    <h3>Wisata Terbaru</h3>
                    @forelse ($newest as $item)
                        <a href="{{ route('front.blog.show', [$item->judul, $item->id]) }}" class="news-item">
                            <div class="col-5 p-0">
                                <div class="overflow-hidden w-100 bg-primary" style="height: 150px;">
                                    <img src="{{ url("uploads/$wisata->image") }}" alt="{{ $wisata->judul }}"
                                        class="h-100 w-100" style="object-fit: cover;" />
                                </div>
                            </div>
                            <div class="col-7 pr-0">
                                <div class="news-content">
                                    <strong class="line-clamp-2">{{ $item->judul }}</strong>
                                    <div>
                                        <i class="line-clamp-4">
                                            {{ strip_tags($item->descrip) }}
                                        </i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @empty
                        <a class="news-item">
                            <p class="m-0">Tidak ada wisata lainnya</p>
                        </a>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
