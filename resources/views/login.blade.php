@extends('template')

@section('isi')

    <form method="post" action="/userlogin">
        {{csrf_field()}}
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" name="email">
        </div>

        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="password">
        </div>

        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember Me </label>
        </div>

        @if( count( $errors ) > 0 )
            @foreach ($errors->all() as $error)
                <div class="alert alert-warning text-danger">{{ $error }}</div>
            @endforeach
        @endif

        <button type="submit" class="btn btn-default">Submit</button>

    </form>

@endsection