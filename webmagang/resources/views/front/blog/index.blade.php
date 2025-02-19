@extends('Layout')

@section('container')
    <!-- about section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <h1 class="about_taital text-center mb-3">
                Bahan bacaan Blog
            </h1>

            <div class="row">
                @forelse ($wisatas as $item)
                    <div class="col-6 col-md-4 col-lg-3 my-3">
                        <div class="card h-100">
                            <img src="{{ url("uploads/$item->image") }}" class="card-img-top" alt="{{ $item->judul }}" style="max-height: 150px; object-fit: cover; height: 100%; width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title line-clamp-2 m-0">{{ $item->judul }}</h5>

                                <p class="card-text line-clamp-4 m-0">
                                    {{ strip_tags($item->descrip) }}
                                </p>

                                <a href="{{ route('front.blog.show', [$item->judul, $item->id]) }}" class="btn btn-sm mt-5"
                                    style="background-color: #2b2278;">
                                    Lainnya
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center p-0 m-0">Tidak ada blog</h5>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- about section end -->
@endsection
