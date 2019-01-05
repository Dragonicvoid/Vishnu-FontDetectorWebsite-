<?php $__env->startSection('isi'); ?>




    <div class="container" id="upload-place">
        <form action="/home/" method="POST" enctype="multipart/form-data">
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
        </form>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>