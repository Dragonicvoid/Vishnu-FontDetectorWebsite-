@extends('template')

@section('isi')

    <form method="post" action="/insert" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Full Name : </label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" name="email">
        </div>

        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="password">
        </div>

        <div class="form-group">
            <label for="pwd">Confirm Password:</label>
            <input type="password" class="form-control" name="password_confirmation">
        </div>

        <div class="form-group">
            <label for="phone">Phone : </label>
            <input type="numeric" class="form-control" name="phone">
        </div>

        <div class="form-group">
            <label for="comment">Gender: </label>
            <label class="radio-inline"><input type="radio" name="gender" value="male" >Male</label>
            <label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>
        </div>

        <div class="form-group">
            <label for="comment">Address</label>
            <textarea class="form-control" rows="5" name="address"></textarea>
        </div>

        <label for="comment">Upload Photo:  </label>
        <input type="file" class="form-control" name="photo">

        <div class="checkbox">
            <label><input type="checkbox" name="agree"> Agreement </label>
        </div>

        @if( count( $errors ) > 0 )
            @foreach ($errors->all() as $error)
                <div class="alert alert-warning text-danger">{{ $error }}</div>
            @endforeach
        @endif

        <button type="submit" class="btn btn-default">Submit</button>

    </form>


@endsection