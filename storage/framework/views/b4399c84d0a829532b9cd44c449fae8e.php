

<?php $__env->startSection('title', 'Detail Distributor'); ?>

<?php $__env->startSection('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Distributor</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="<?php echo e(route('admin.distributor')); ?>">Distributor</a></div>
                <div class="breadcrumb-item">Detail</div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4>Detail Distributor: <?php echo e($distributor->name_distributor); ?></h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Nama Distributor: </strong><?php echo e($distributor->name_distributor); ?></p>
                        <p><strong>Kota: </strong><?php echo e($distributor->kota); ?></p>
                        <p><strong>Provinsi: </strong><?php echo e($distributor->provinsi); ?></p>
                        <p><strong>Kontak: </strong><?php echo e($distributor->kontak); ?></p>
                        <p><strong>Email: </strong><?php echo e($distributor->email); ?></p>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <a href="<?php echo e(route('distributor.edit', $distributor->id)); ?>" class="btn btn-warning">Edit</a>
                <a href="<?php echo e(route('distributor.delete', $distributor->id)); ?>" class="btn btn-danger" data-confirm-delete="true">Hapus</a>
                <a href="<?php echo e(route('admin.distributor')); ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app_laravel_nuy\app_laravel_nuy\resources\views/pages/admin/distributor/detail.blade.php ENDPATH**/ ?>