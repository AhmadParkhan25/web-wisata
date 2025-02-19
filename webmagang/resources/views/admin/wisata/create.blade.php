@extends('layouts.master')

@section('judul')
    Tambah Wisata
@endsection

@section('tabs')
    <a href="{{ route('admin.wisata.index') }}" class="btn btn-primary">
        Kembali
    </a>
@endsection

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('admin.wisata.store') }}" enctype="multipart/form-data">
            @csrf()
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', '') }}"
                    aria-describedby="judul-error">
                @error('judul')
                    <div id="judul-error" class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ old('lokasi', '') }}"
                    aria-describedby="lokasi-error">
                @error('lokasi')
                    <div id="lokasi-error" class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" min="0" class="form-control" id="harga" name="harga"
                    value="{{ old('harga', '') }}" aria-describedby="harga-error">
                @error('harga')
                    <div id="harga-error" class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">gambar</label>
                <input type="file" accept="image/*" class="form-control" id="gambar" name="image"
                    value="{{ old('image', '') }}" aria-describedby="gambar-error">
                @error('image')
                    <div id="gambar-error" class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="summernote" name="descrip">{{ old('descrip', '') }}</textarea>
                @error('descrip')
                    <div id="deskripsi-error" class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tips" class="form-label">Tips</label>
                <textarea class="summernote" name="tips">{{ old('tips', '') }}</textarea>
                @error('tips')
                    <div id="tips-error" class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="istimewa" class="form-label">Istimewa</label>
                <textarea class="summernote" name="istimewa">{{ old('istimewa', '') }}</textarea>
                @error('istimewa')
                    <div id="istimewa-error" class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-5">Submit</button>
        </form>
    </div>
@endsection

@push('script')
@endpush
