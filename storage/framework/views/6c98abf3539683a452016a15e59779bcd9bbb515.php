<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Rahim Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo e(route('home')); ?>">Product </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo e(route('product.create')); ?>">Create</a>
                </li>
            </ul>
            <form style="margin-right: 25px;" class="d-flex mr-5 " action="<?php echo e(route('product.filter')); ?>">
                <input class="form-control me-2" name="date" type="date" placeholder="date" value="<?php echo e(\Illuminate\Support\Facades\Session::get('date')); ?>">
                <input class="form-control me-2" name="price" type="search" placeholder="Price" value="<?php echo e(\Illuminate\Support\Facades\Session::get('price')); ?>">
                <button class="btn btn-outline-light" type="submit">Filter</button>
            </form>

        </div>
    </div>
</nav><?php /**PATH C:\xampp\htdocs\AkijGroupInternTest\resources\views/partials/header.blade.php ENDPATH**/ ?>