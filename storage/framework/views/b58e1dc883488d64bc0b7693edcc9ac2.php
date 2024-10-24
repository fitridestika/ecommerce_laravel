 
<?php $__env->startSection('title', 'Admin Edit Product'); ?> 
<?php $__env->startSection('content'); ?> 
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Produk</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>">
                        Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.product')); ?>">Produk</a></div>
                <div class="breadcrumb-item">Edit Produk</div>
            </div>
        </div>

        <a href="<?php echo e(route('admin.product')); ?>" class="btn btn-icon icon-left btn-warning"> Kembali</a>

        <div class="card mt-4">
            <form action="<?php echo e(route('product.update', $product->id)); ?>" class="needs-validation" novalidate=""
                enctype="multipart/form-data" method="POST">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">Nama Produk</label>
                                <input id="name" type="text" class="form-control" name="name" required=""
                                    value="<?php echo e($product->name); ?>">
                                <div class="invalid-feedback">
                                    Kolom ini harus di isi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="price">Harga Produk (Point)</label>
                                <input id="price" type="number" class="form-control" name="price" required=""
                                    value="<?php echo e($product->price); ?>">
                                <div class="invalid-feedback">
                                    Kolom ini harus di isi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="category">Kategori Produk</label>
                                <input id="category" type="text" class="form-control" name="category" required=""
                                    value="<?php echo e($product->category); ?>">
                                <div class="invalid-feedback">
                                    Kolom ini harus di isi!
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="description">Deskripsi Produk</label>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="40"
                                    required=""><?php echo e($product->description); ?></textarea>
                                <div class="invalid-feedback">
                                    Isi berita harus di isi!
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="custom-file">
                                    <input class="custom-file-input" name="image" id="customFile" type="file">
                                    <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-icon icon-left btn-primary">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\famelaoktavianda\famelaoktavianda-app\resources\views/pages/admin/product/edit.blade.php ENDPATH**/ ?>