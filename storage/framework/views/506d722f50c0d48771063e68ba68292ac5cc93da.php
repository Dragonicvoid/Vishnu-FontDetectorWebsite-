<?php $__env->startSection('isi'); ?>
    <div class="container" id="upload-place">
        <form action="/home" method="POST" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <img style="width: 100%;" src="images\web.png">
            <br><br>
            <div class="form-group">
                <label for="email">Choose Picture:</label>
                <div>
                    <input type="file" class="form-control"  name="photo">
                </div>
            </div>
            <input class="btn btn-success"type="submit" value="Upload">
            <?php if( count( $errors ) > 0 ): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-warning text-danger"><?php echo e($error); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </form>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>