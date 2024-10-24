
<?php $__env->startSection('title', 'Admin Product'); ?>
<?php $__env->startSection('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Produk</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a>
                </div>
                <div class="breadcrumb-item">Produk</div>
            </div>
        </div>
        <a href="<?php echo e(route('product.create')); ?>" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i>
            Produk</a>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-md">
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Harga Produk</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        $no = 0
                    ?>
                    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($no += 1); ?></td>
                            <td><?php echo e($item->name); ?></td>
                            <td><?php echo e($item->price); ?> Points</td>
                            <td>
                                <a href="<?php echo e(route('product.detail', $item->id)); ?>" class="badge badge-info">Detail</a>
                                <a href="<?php echo e(route('product.edit', $item->id)); ?>" class="badge badge-warning"> Edit </a>
                                <a href="<?php echo e(route('product.delete', $item->id)); ?>" class="badge badge-danger"data-confirm-delete="true">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <td colspan="5" class="text-center">Data Produk Kosong</td>
                    <?php endif; ?>
                </table>
            </div>
        </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app_laravel_nuy\app_laravel_nuy\resources\views/pages/admin/product/index.blade.php ENDPATH**/ ?>