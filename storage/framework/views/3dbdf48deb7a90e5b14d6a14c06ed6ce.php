

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
                                <input id="nama_distributor" type="text" class="form-control" name="nama_distributor"
                                    required="" value="<?php echo e($distributor->nama_distributor); ?>">
                                <div class="invalid-feedback">
                                    Kolom ini harus di isi!
                                </div>
                            </div>
                        </div>

                        <!-- Kota -->
                        <div class="col-6">
                            <div class="form-group">
                                <label for="kota">Kota</label>
                                <input id="kota" type="text" class="form-control" name="kota"
                                    required="" value="<?php echo e($distributor->kota); ?>">
                                <div class="invalid-feedback">
                                    Kolom ini harus di isi!
                                </div>
                            </div>
                        </div>

                        <!-- Provinsi -->
                        <div class="col-6">
                            <div class="form-group">
                                <label for="provinsi">Provinsi</label>
                                <input id="provinsi" type="text" class="form-control" name="provinsi"
                                    required="" value="<?php echo e($distributor->provinsi); ?>">
                                <div class="invalid-feedback">
                                    Kolom ini harus di isi!
                                </div>
                            </div>
                        </div>

                        <!-- Kontak -->
                        <div class="col-6">
                            <div class="form-group">
                                <label for="kontak">Kontak</label>
                                <input id="kontak" type="text" class="form-control" name="kontak"
                                    required="" value="<?php echo e($distributor->kontak); ?>">
                                <div class="invalid-feedback">
                                    Kolom ini harus di isi!
                                </div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" name="email"
                                    required="" value="<?php echo e($distributor->email); ?>">
                                <div class="invalid-feedback">
                                    Kolom ini harus di isi dengan email yang valid!
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
<?php echo $__env->make('layouts.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app_laravel_nuy\app_laravel_nuy\resources\views/pages/admin/distributor/edit.blade.php ENDPATH**/ ?>