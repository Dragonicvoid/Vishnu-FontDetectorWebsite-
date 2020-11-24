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

<?php $__env->startSection('isi'); ?>
    <body>

    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Photo</th>
                <th></th>
                <th>Data Hasil</th>
            </tr>
            </thead>
            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                <tr>
                    <td><a href="gambar/<?php echo e($i->alamat_gambar); ?>"><img src="/images/<?php echo e($i->alamat_gambar); ?>" width="175px" height="100px"></a></td>
                    <td><td ><?php echo e($i->hasil_scan); ?></td></td>
                </tr>
                </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>

    </body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>