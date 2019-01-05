<?php $__env->startSection('isi'); ?>

    <form method="post" action="/userlogin">
        <?php echo e(csrf_field()); ?>

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

        <?php if( count( $errors ) > 0 ): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="alert alert-warning text-danger"><?php echo e($error); ?></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <button type="submit" class="btn btn-default">Submit</button>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>