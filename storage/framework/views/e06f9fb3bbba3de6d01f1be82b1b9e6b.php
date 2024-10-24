
<?php $__env->startSection('title', 'Admin Tambah Distributor'); ?>
<?php $__env->startSection('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Distributor</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.distributor')); ?>">Distributor</a></div>
                <div class="breadcrumb-item">Tambah Distributor</div>
            </div>
        </div>
        <a href="<?php echo e(route('admin.distributor')); ?>" class="btn btn-icon icon-left btn-warning"> Kembali</a>
        <div class="card mt-4">
            <form action="<?php echo e(route('distributor.store')); ?>" class="needs-validation" novalidate="" method="POST">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name_distributor">Nama Distributor</label>
                                <input id="name_distributor" type="text" class="form-control" name="name_distributor"
                                    required="">
                                <div class="invalid-feedback">
                                    Nama distributor harus diisi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="kota">Kota</label>
                                <input id="kota" type="text" class="form-control" name="kota" required="">
                                <div class="invalid-feedback">
                                    Kota harus diisi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="provinsi">Provinsi</label>
                                <input id="provinsi" type="text" class="form-control" name="provinsi" required="">
                                <div class="invalid-feedback">
                                    Provinsi harus diisi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="kontak">Kontak</label>
                                <input id="kontak" type="text" class="form-control" name="kontak"
                                    value="<?php echo e(old('kontak')); ?>" required="">
                                <div class="invalid-feedback">
                                    Kontak harus diisi!
                                </div>
                                <?php $__errorArgs = ['kontak'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" name="email" required="">
                                <div class="invalid-feedback">
                                    Email harus diisi!
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-icon icon-left btn-primary">
                        <i class="fas fa-plus"></i> Tambah Distributor
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\famelaoktavianda\famelaoktavianda-app\resources\views/pages/admin/distributor/create.blade.php ENDPATH**/ ?>