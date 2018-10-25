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

    #table{
        border : 1px solid black;
    }
</style>

<body>
    <div id="navbar">
        Hello, <a href="/table/<?php echo e(!empty($userName) ? $userName : 'Guest'); ?>"><?php echo e(!empty($userName) ? $userName : 'Guest'); ?></a>
    </div>

    <div id="upload-place">
        <table id="table">
            <tr>
                <th>Foto</th>
                <th>Data Hasil</th>
            </tr>
            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <img src="/images/<?php echo e($i->alamat_gambar); ?>" width="200px" height="200px">/images/<?php echo e($i->alamat_gambar); ?>

                    </td>
                    <td><?php echo e($i->hasil_scan); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</body>
</html>
