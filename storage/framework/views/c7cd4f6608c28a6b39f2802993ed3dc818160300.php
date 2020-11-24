<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dclothes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Font Detector</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo e(url('/')); ?>">Home</a></li>
            <li style="padding:auto;">
                <a href="/table/<?php echo e(!empty($userName) ? $userName : 'Guest'); ?>"> Hello, <?php echo e(!empty($userName) ? $userName : 'Guest'); ?></a>
            </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <?php if(auth()->guard()->check()): ?>
                <li><a href=""><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>
            <?php else: ?>
                <li><a href=""><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href=""><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

<div class="container">
    <?php echo $__env->yieldContent('isi'); ?>
</div>


</body>
</html>