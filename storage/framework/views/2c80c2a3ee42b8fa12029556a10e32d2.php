
<?php $__env->startSection('title', 'Admin Flash Sale'); ?>
<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Flash Sale</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>">
                            Dashboard</a></div>
                    <div class="breadcrumb-item">Flash Sale</div>
                </div>
            </div>
            <a href="<?php echo e(route('flashsale.create')); ?>" class="btn btn-icon icon-left btn-primary">
                <i class="fas fa-plus"></i> Tambah Flash Sale</a>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                            <th>#</th>
                            <th>Nama Produk</th>
                            <th>Harga Asli</th>
                            <th>Harga Diskon</th>
                            <th>Stok</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Berakhir</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            $no = 0;
                        ?>
                        <?php $__empty_1 = true; $__currentLoopData = $flashSales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($no += 1); ?></td>
                                <td><?php echo e($item->product_name); ?></td>
                                <td><?php echo e($item->original_price); ?> Points</td>
                                <td><?php echo e($item->discount_price); ?> Points</td>
                                <td><?php echo e($item->stock); ?></td>
                                <td><?php echo e($item->start_time); ?></td>
                                <td><?php echo e($item->end_time); ?></td>
                                <td>
                                    <a href="<?php echo e(route('flashsale.detail', $item->id)); ?>" class="badge badge-info">Detail</a>
                                    <a href="<?php echo e(route('flashsale.edit', $item->id)); ?>" class="badge badge-warning">Edit</a>
                                    <form action="<?php echo e(route('flashsale.delete', $item->id)); ?>" method="POST" class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="badge badge-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus Flash Sale ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <td colspan="8" class="text-center">Data Flash Sale Kosong</td>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app_laravel_nuy\app_laravel_nuy\resources\views/pages/admin/flashsale/index.blade.php ENDPATH**/ ?>