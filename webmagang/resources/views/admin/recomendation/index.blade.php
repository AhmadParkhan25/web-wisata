@extends('layouts.master')

@section('judul')
    Rekomendasi Wisata
@endsection

@section('tabs')
    <a href="{{ route('admin.recomendation.create') }}" class="btn btn-primary">
        Tambah
    </a>
@endsection

@section('content')
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            @forelse ($recomendations as $key => $item)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $item->wisata->judul }}</td>
                    <td>{{ $item->wisata->harga }}</td>
                    <td>
                        <div class="row row-cols-2">
                            <div class="col">
                                <form action="{{ route('admin.recomendation.destroy', $item->id) }}" method="post">
                                    @csrf()
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <th scope="row" colspan="5" class="text-center">Tidak ada data</th>
                </tr>
            @endforelse
        </table>
    </div>
@endsection
