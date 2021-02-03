<?php $__env->startSection('content'); ?>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php echo $__env->make('partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <table class="table table-striped ">
                        <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Expire Date</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        $i=0;
                        ?>
                        <tbody>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(++$i); ?></td>
                                <td><?php echo e($product->product_name); ?></td>
                                <td><?php echo e($product->product_price); ?></td>
                                <td><?php echo e($product->expire_date); ?></td>
                                <td><a class="btn btn-primary" href="<?php echo e(route('product.edit', $product->id)); ?>">Edit</a>
                                    <a href="<?php echo e(route('product.delete', $product->id)); ?>"
                                       class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AkijGroupInternTest\resources\views/index.blade.php ENDPATH**/ ?>