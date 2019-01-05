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

<style>
    #navbar{
        border: 1px solid black;
        text-align: right;
        right: 0px;
    }
</style>

<body>
    <div id="navbar">
        @yield('nav-bar-text')
    </div>
</body>
</html>
