
<?php $__env->startSection('title', 'Admin Detail Product'); ?>
<?php $__env->startSection('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Produk</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard
                    </a></div>
                <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.product')); ?>">Produk</a></div>
                <div class="breadcrumb-item">Detail Produk</div>
            </div>
        </div>
        <a href="<?php echo e(route('admin.product')); ?>" class="btn btn-icon icon-left btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
        <div class="row mt-4">
            <div class="col-12 col-md-4 col-lg-12 m-auto">
                <article class="article article-style-c">
                    <div class="article-header">
                        <div class="article-image" data-background="<?php echo e(asset('images/' . $product->image)); ?>">
                        </div>
                    </div>
                    <div class="article-details">
                        <div class="article-category"><a href="#"><?php echo e($product->name); ?></a>
                            <div class="bullet">
                            </div> <a href="#"><?php echo e($product->category); ?></a>
                        </div>
                        <div class="article-title">
                            <h2><a href="#">Harga: <?php echo e($product->price); ?> Points</a></h2>
                        </div>
                        <hr>
                        <p>
                            <?php echo e($product->description); ?>

                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\famelaoktavianda\famelaoktavianda-app\resources\views/pages/admin/product/detail.blade.php ENDPATH**/ ?>