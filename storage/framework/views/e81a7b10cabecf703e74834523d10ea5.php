
<?php $__env->startSection('title', 'Admin Distributor'); ?>
<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Distributor</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>">
                            Dashboard</a></div>
                    <div class="breadcrumb-item">Distributor</div>
                </div>
            </div>
            <a href="<?php echo e(route('distributor.create')); ?>" class="btn btn-icon icon-left btn-primary">
                <i class="fas fa-plus"></i> Tambah Distributor</a>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                            <th>#</th>
                            <th>Nama Distributor</th>
                            <th>Kota</th>
                            <th>Provinsi</th>
                            <th>Kontak</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            $no = 0;
                        ?>
                        <?php $__empty_1 = true; $__currentLoopData = $distributors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $distributor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($no += 1); ?></td>
                                <td><?php echo e($distributor->name_distributor); ?></td>
                                <td><?php echo e($distributor->kota); ?></td>
                                <td><?php echo e($distributor->provinsi); ?></td>
                                <td><?php echo e($distributor->kontak); ?></td>
                                <td><?php echo e($distributor->email); ?></td>
                                <td>
                                    <a href="<?php echo e(route('distributor.detail', $distributor->id)); ?>" class="badge badge-info">Detail</a>
                                    <a href="<?php echo e(route('distributor.edit', $distributor->id)); ?>" class="badge badge-warning">Edit</a>
                                    <form action="<?php echo e(route('distributor.delete', $distributor->id)); ?>" method="POST" class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="badge badge-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus distributor ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <td colspan="7" class="text-center">Data Distributor Kosong</td>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app_laravel_nuy\app_laravel_nuy\resources\views/pages/admin/distributor/index.blade.php ENDPATH**/ ?>