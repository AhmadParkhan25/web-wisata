@extends('Layout')

@section('container')
    <!-- about section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <h1 class="about_taital text-center">
                Rekomendasi tempat wisata
            </h1>

            <p class="text-center">
                Berikut adalah beberapa tempat rekomendasi yang dipilih oleh Admin
            </p>

            <div class="row">
                @forelse ($recomendations as $item)
                    <div class="col-6 col-md-4 col-lg-3 my-3">
                        <div class="card h-100">
                            <img src="{{ url('uploads/' . $item->wisata->image) }}" class="card-img-top"
                                alt="{{ $item->wisata->judul }}" style="max-height: 150px; object-fit: cover; height: 100%; width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title line-clamp-2 m-0">{{ $item->wisata->judul }}</h5>

                                <p class="card-text line-clamp-4 m-0">
                                    {{ strip_tags($item->wisata->descrip) }}
                                </p>

                                <a href="{{ route('front.blog.show', [$item->wisata->judul, $item->wisata->id]) }}"
                                    class="btn btn-sm mt-5" style="background-color: #2b2278;">
                                    Lainnya
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center p-0 m-0">Tidak ada rekomendasi</h5>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- about section end -->
@endsection
