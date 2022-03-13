@extends('template')

@section('isi')




    <div class="container" id="upload-place">
        <form action="/home/" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <img style="width: 100%;" src="images\web.png">
            <br><br>
            <label for="name">Username : </label>
            <input type="text" value="{{empty($userName) ? '' : $userName}}" name="userName">
            <br><br>
            <input type="file" name="uploaded_image" id="uploadImage">
            <br>
            <input class="btn btn-success"type="submit" value="Done">
        </form>
    </div>


@endsection
