@extends('layouts.master')

@section('judul')
    Tambah Rekomendasi Wisata
@endsection

@section('tabs')
    <a href="{{ route('admin.recomendation.index') }}" class="btn btn-primary">
        Kembali
    </a>
@endsection

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('admin.recomendation.store') }}" enctype="multipart/form-data">
            @csrf()
            <div class="mb-3">
                <label for="recomendation" class="form-label">Pilih wisata untuk direkomendasikan</label>
                <select id="recomendation" name="recomendation" value="{{ old('recomendation', '') }}"
                    aria-describedby="recomendation-error" class="form-control" aria-label="Pilih rekomendasi">
                    <option value="" selected>Pilih wisata</option>
                    @foreach ($vacations as $item)
                        <option value="{{ $item->id }}">{{ $item->judul }}</option>
                    @endforeach
                </select>
                @error('recomendation')
                    <div id="recomendation-error" class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-5">Submit</button>
        </form>
    </div>
@endsection

@push('script')
@endpush
