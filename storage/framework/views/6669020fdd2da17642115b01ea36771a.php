 
<?php $__env->startSection('title', 'Admin Edit Flash Sale Product'); ?> 
<?php $__env->startSection('content'); ?> 
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Produk Flash Sale</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>">
                        Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.flashsale')); ?>">Flash Sale</a></div>
                <div class="breadcrumb-item">Edit Produk Flash Sale</div>
            </div>
        </div>

        <a href="<?php echo e(route('admin.flashsale')); ?>" class="btn btn-icon icon-left btn-warning"> Kembali</a>

        <div class="card mt-4">
            <form action="<?php echo e(route('flashsale.update', $flashSale->id)); ?>" class="needs-validation" novalidate=""
                enctype="multipart/form-data" method="POST">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="product_name">Nama Produk</label>
                                <input id="product_name" type="text" class="form-control" name="product_name"
                                    required="" value="<?php echo e($flashSale->product_name); ?>">
                                <div class="invalid-feedback">
                                    Kolom ini harus di isi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="original_price">Harga Normal (Point)</label>
                                <input id="original_price" type="number" class="form-control" name="original_price"
                                    required="" value="<?php echo e($flashSale->original_price); ?>">
                                <div class="invalid-feedback">
                                    Kolom ini harus di isi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="discount_price">Harga Diskon (Point)</label>
                                <input id="discount_price" type="number" class="form-control" name="discount_price"
                                    required="" value="<?php echo e($flashSale->discount_price); ?>">
                                <div class="invalid-feedback">
                                    Kolom ini harus di isi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="category">Kategori Produk</label>
                                <input id="category" type="text" class="form-control" name="category" required=""
                                    value="<?php echo e($flashSale->category); ?>">
                                <div class="invalid-feedback">
                                    Kolom ini harus di isi!
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="description">Deskripsi Produk</label>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="10"
                                    required=""><?php echo e($flashSale->description); ?></textarea>
                                <div class="invalid-feedback">
                                    Deskripsi harus di isi!
                                </div>
                            </div>
                        </div>
                        <!-- Input tanggal mulai dan akhir flash sale -->
                        <div class="col-6">
                            <div class="form-group">
                                <label for="start_time">Tanggal Mulai</label>
                                <input id="start_time" type="datetime-local" class="form-control" name="start_time"
                                    required=""
                                    value="<?php echo e(\Carbon\Carbon::parse($flashSale->start_time)->format('Y-m-d\TH:i')); ?>">
                                <div class="invalid-feedback">
                                    Kolom ini harus di isi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="end_time">Tanggal Berakhir</label>
                                <input id="end_time" type="datetime-local" class="form-control" name="end_time"
                                    required=""
                                    value="<?php echo e(\Carbon\Carbon::parse($flashSale->end_time)->format('Y-m-d\TH:i')); ?>">
                                <div class="invalid-feedback">
                                    Kolom ini harus di isi!
                                </div>
                            </div>
                        </div>

                        <!-- Input stok produk -->
                        <div class="col-6">
                            <div class="form-group">
                                <label for="stock">Stok Produk</label>
                                <input id="stock" type="number" class="form-control" name="stock" required=""
                                    value="<?php echo e($flashSale->stock); ?>">
                                <div class="invalid-feedback">
                                    Kolom ini harus di isi!
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
<?php echo $__env->make('layouts.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\famelaoktavianda\famelaoktavianda-app\resources\views/pages/admin/flashsale/edit.blade.php ENDPATH**/ ?>