
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<?php if(\Illuminate\Support\Facades\Session::has('success')): ?>
   <p class="success"><?php echo e(\Illuminate\Support\Facades\Session::get('success')); ?></p>
    <?php endif; ?><?php /**PATH C:\xampp\htdocs\AkijGroupInternTest\resources\views/partials/message.blade.php ENDPATH**/ ?>