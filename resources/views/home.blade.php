@extends('template')

@section('isi')
    <div class="container" id="upload-place">
        <form action="/home" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <img style="width: 100%;" src="images\web.png">
            <br><br>
            <div class="form-group">
                <label for="email">Choose Picture:</label>
                <div>
                    <input type="file" class="form-control"  name="photo">
                </div>
            </div>
            <input class="btn btn-success"type="submit" value="Upload">
            @if( count( $errors ) > 0 )
                @foreach ($errors->all() as $error)
                    <div class="alert alert-warning text-danger">{{ $error }}</div>
                @endforeach
            @endif
        </form>
    </div>


@endsection
