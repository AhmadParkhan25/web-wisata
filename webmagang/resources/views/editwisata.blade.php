<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1 class="text-center mt-3">Edit Wisata</h1>
    <form class="mx-5" action="/home/{{$wisatas->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('Put')
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group">
            <label>Nama Wisata</label>
            <input type="text" class="form-control" name="judul" value="{{$wisatas->judul}}">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" rows="3" name="descrip">{{$wisatas->descrip}}</textarea>
        </div>
        <div class="form-group">
            <label>Keistimewaan</label>
            <textarea class="form-control" rows="3" name="istimewa">{{$wisatas->istimewa}}</textarea>
        </div>
        <div class="form-group">
            <label>Tips</label>
            <textarea class="form-control" rows="3" name="tips">{{$wisatas->tips}}</textarea>
        </div>
        <div class="form-group">
            <label>harga</label>
            <input type="text" class="form-control" name="harga" value="{{$wisatas->harga}}">
        </div>
        <div class="form-group">
            <label>Lokasi</label>
            <input type="text" class="form-control" name="lokasi" value="{{$wisatas->lokasi}}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</body>

</html>
