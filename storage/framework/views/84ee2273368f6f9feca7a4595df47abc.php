

<?php $__env->startSection('title', 'Admin Edit Distributor'); ?>

<?php $__env->startSection('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Distributor</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a>
                </div>
                <div class="breadcrumb-item active">
                    <a href="<?php echo e(route('admin.distributor')); ?>">Distributor</a>
                </div>
                <div class="breadcrumb-item">Edit Distributor</div>
            </div>
        </div>

        <a href="<?php echo e(route('admin.distributor')); ?>" class="btn btn-icon icon-left btn-warning"> Kembali</a>

        <div class="card mt-4">
            <form action="<?php echo e(route('distributor.update', $distributor->id)); ?>" class="needs-validation" novalidate="" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="card-body">
                    <div class="row">
                        <!-- Nama Distributor -->
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nama_distributor">Nama Distributor</label>
                                <input id="nama_distributor" type="text" class="form-control" name="nama_distributor" value="<?php echo e($distributor->nama_distributor); ?>" required="">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>

                        <!-- Kota -->
                        <div class="col-6">
                            <div class="form-group">
                                <label for="kota">Kota</label>
                                <input id="kota" type="text" class="form-control" name="kota" value="<?php echo e($distributor->kota); ?>" required="">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>

                        <!-- Provinsi -->
                        <div class="col-6">
                            <div class="form-group">
                                <label for="provinsi">Provinsi</label>
                                <input id="provinsi" type="text" class="form-control" name="provinsi" value="<?php echo e($distributor->provinsi); ?>" required="">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>

                        <!-- Kontak -->
                        <div class="col-6">
                            <div class="form-group">
                                <label for="kontak">Kontak</label>
                                <input id="kontak" type="text" class="form-control" name="kontak" value="<?php echo e($distributor->kontak); ?>" required="">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e($distributor->email); ?>" required="">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi dengan email yang benar!
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Update -->
                    <button type="submit" class="btn btn-icon icon-left btn-primary">
                        <i class="fas fa-save"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\famelaoktavianda\famelaoktavianda-app\resources\views/pages/admin/distributor/edit.blade.php ENDPATH**/ ?>