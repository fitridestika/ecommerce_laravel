

<?php $__env->startSection('title', 'Detail Flash Sale'); ?>

<?php $__env->startSection('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Flash Sale</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="<?php echo e(route('admin.flashsale')); ?>">Flash Sale</a></div>
                <div class="breadcrumb-item">Detail</div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4>Detail Flash Sale: <?php echo e($flashSale->product_name); ?></h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo e(asset('images/' . $flashSale->image)); ?>" alt="<?php echo e($flashSale->product_name); ?>" class="img-fluid rounded">
                    </div>
                    <div class="col-md-6">
                        <h4><?php echo e($flashSale->product_name); ?></h4>
                        <p><strong>Harga Asli: </strong>Rp<?php echo e(number_format($flashSale->original_price, 2)); ?></p>
                        <p><strong>Harga Diskon: </strong>Rp<?php echo e(number_format($flashSale->discount_price, 2)); ?></p>
                        <p><strong>Diskon: </strong><?php echo e(round($flashSale->discount_percentage)); ?>%</p>
                        <p><strong>Stok: </strong><?php echo e($flashSale->stock); ?></p>
                        <p><strong>Tanggal Mulai: </strong><?php echo e($flashSale->start_time); ?></p>
                        <p><strong>Tanggal Berakhir: </strong><?php echo e($flashSale->end_time); ?></p>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <a href="<?php echo e(route('flashsale.edit', $flashSale->id)); ?>" class="btn btn-warning">Edit</a>
                <a href="<?php echo e(route('flashsale.delete', $flashSale->id)); ?>" class="btn btn-danger" data-confirm-delete="true">Hapus</a>
                <a href="<?php echo e(route('admin.flashsale')); ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\famelaoktavianda\famelaoktavianda-app\resources\views/pages/admin/flashsale/detail.blade.php ENDPATH**/ ?>