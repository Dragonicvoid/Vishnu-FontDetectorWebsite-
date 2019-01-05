@extends('template')
    <!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <script type="text/javascript" src="https://cdn.rawgit.com/naptha/tesseract.js/1.0.10/dist/tesseract.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/oliver-moran/jimp/v0.2.27/browser/lib/jimp.min.js"></script>
    <script type="module" src="{{ URL::asset('js/test.js') }}"></script>
    <title>Test</title>
</head>

@section('isi')
    <body>

    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Photo</th>
                <th></th>
                <th>Data Hasil</th>
            </tr>
            </thead>
            @foreach($images as $i)
                <tbody>
                <tr>
                    <td><a href="gambar/{{$i->alamat_gambar}}"><img src="/images/{{$i->alamat_gambar}}" width="175px" height="100px"></a></td>
                    <td><td >{{$i->hasil_scan}}</td></td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>

    </body>
</html>
@endsection
