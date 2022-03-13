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
    <div id="navbar">
        Hello, <a href="/table/{{!empty($userName) ? $userName : 'Guest'}}">{{!empty($userName) ? $userName : 'Guest'}}</a>
    </div>

    <div id="upload-place">
        <table " id="table">
            <tr>
                <th>Foto</th>
                <th>Data Hasil</th>
            </tr>
            @foreach($images as $i)
                <tr>
                    <td>
                        <img src="/images/{{$i->alamat_gambar}}" width="200px" height="200px">
                    </td>
                    <td >{{$i->hasil_scan}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
@endsection