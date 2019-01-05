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
    <script type="module" src="<?php echo e(URL::asset('js/test.js')); ?>"></script>
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
            <li class="active"><a href="<?php echo e(url('/')); ?>">Home</a></li>
            <li style="padding:auto;">
            <?php if(!empty($username)): ?>
                    <a href="/table"> Hello, <?php echo e(!empty($username) ? $username : 'Guest'); ?></a>
            <?php else: ?>
                <li><a> Hello Guest  </a></li>
            <?php endif; ?>
            </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <?php if(!empty($username)): ?>
                <li><a href="/logout"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>
            <?php else: ?>
                <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

<div class="container">
    <?php echo $__env->yieldContent('isi'); ?>
</div>


</body>
</html>
