<?php $__env->startSection('content'); ?>
    <div class="wrapper">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2 class="mb-4">Edit Your Product</h2>
                <?php echo $__env->make('partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <form class="" action="<?php echo e(route('product.update', $product->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3 ">
                        <input type="hidden" class="form-control" name="product_id" value="<?php echo e($product->id); ?>"
                               id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Name</label>
                        <input type="text" class="form-control" name="product_name" value="<?php echo e($product->product_name); ?>"
                               id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Product Price</label>
                        <input type="number" class="form-control" name="product_price"
                               value="<?php echo e($product->product_price); ?>" id="exampleInputPassword1">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"> Expire Date</label>
                        <input type="datetime" class="form-control" name="expire_date" value="<?php echo e($product->expire_date); ?>"
                               id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AkijGroupInternTest\resources\views/pages/edit.blade.php ENDPATH**/ ?>