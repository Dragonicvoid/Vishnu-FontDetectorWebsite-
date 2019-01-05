<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <script type="text/javascript" src="https://cdn.rawgit.com/naptha/tesseract.js/1.0.10/dist/tesseract.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/oliver-moran/jimp/v0.2.27/browser/lib/jimp.min.js"></script>
    <script type="module" src="<?php echo e(URL::asset('js/test.js')); ?>"></script>
    <title>Test</title>
</head>

<style>
    #navbar{
        border: 1px solid black;
        text-align: right;
        right: 0px;
    }

    #kosong{
        display: none;
    }
</style>

<body>
    <div id="navbar">
        Hello, <a href="/table/<?php echo e(!empty($userName) ? $userName : 'Guest'); ?>"><?php echo e(!empty($userName) ? $userName : 'Guest'); ?></a>
    </div>

    <div id="upload-place">
        <form action="/home/" method="POST" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <img src="images\web.png">
            <input value="<?php echo e(empty($userName) ? '' : $userName); ?>" name="userName" id="kosong">
            <input type="file" name="uploaded_image" id="uploadImage">
            <input type="submit" value="Done">
        </form>

    </div>
</body>
</html>
