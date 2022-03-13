<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vishnu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script type="text/javascript" src="https://cdn.rawgit.com/naptha/tesseract.js/1.0.10/dist/tesseract.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/oliver-moran/jimp/v0.2.27/browser/lib/jimp.min.js"></script>
    <script type="module" src="{{ URL::asset('js/test.js') }}"></script>
    <style>
        #navbar{
            border: 1px solid black;
            text-align: right;
            right: 0px;
        }

        #kosong{
            display: none;
        }

        #table{
            border : 1px solid black;
        }
    </style>

</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Vishnu</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{ url('/') }}">Home</a></li>
            <li style="padding:auto;">
                <a href="/table/{{!empty($userName) ? $userName : 'Guest'}}"> Hello, {{!empty($userName) ? $userName : 'Guest'}}</a>
            </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            @auth
                <li><a href=""><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>
            @else
                <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            @endauth
        </ul>
    </div>
</nav>

<div class="container">
    @yield('isi')
</div>


</body>
</html>