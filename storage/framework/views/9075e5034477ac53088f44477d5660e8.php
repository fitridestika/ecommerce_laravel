
<?php $__env->startSection('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Distributor</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Distributor</div>
            </div>
        </div>
        <a href="<?php echo e(route('distributor.create')); ?>" class="btn btn-primary mb-3">Tambah Distributor</a>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama Distributor</th>
                        <th>Kota</th>
                        <th>Provinsi</th>
                        <th>Kontak</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $distributors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $distributor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($distributor->id); ?></td>
                            <td><?php echo e($distributor->name_distributor); ?></td>
                            <td><?php echo e($distributor->kota); ?></td>
                            <td><?php echo e($distributor->provinsi); ?></td>
                            <td><?php echo e($distributor->kontak); ?></td>
                            <td><?php echo e($distributor->email); ?></td>
                            <td>
                                <a href="<?php echo e(route('distributor.edit', $distributor->id)); ?>"class="btn btn-warning btn-sm">Edit</a>
                                <form action="<?php echo e(route('distributor.delete', $distributor->id)); ?>" method="POST"style="display:inline-block;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\famelaoktavianda\famelaoktavianda-app\resources\views/pages/admin/distributor/index.blade.php ENDPATH**/ ?>