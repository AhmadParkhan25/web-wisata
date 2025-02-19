@extends('layouts.master')

@section('judul')
    Wisata
@endsection

@section('tabs')
    <a href="{{ route('admin.wisata.create') }}" class="btn btn-primary">
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
                    <th scope="col">Lokasi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            @forelse ($wisatas as $key => $item)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->lokasi }}</td>
                    <td>
                        <div class="row row-cols-2">
                            <div class="col">
                                <a href="{{ route('admin.wisata.edit', $item->id) }}" class="btn btn-warning">
                                    Edit
                                </a>
                            </div>

                            <div class="col">
                                <form action="{{ route('admin.wisata.destroy', $item->id) }}" method="post">
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
