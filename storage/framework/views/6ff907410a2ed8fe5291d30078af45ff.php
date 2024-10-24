
<?php $__env->startSection('content'); ?>
<!-- start banner Area -->
<section class="banner-area">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-start">
            <div class="col-lg-12">
                <div class="">
                    <!-- single-slide -->
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="banner-content">
                                <h1>Nike New <br>Collection!</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                    ad minim veniam, quis nostrud exercitation.</p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img class="img-fluid" src="<?php echo e(asset('assets/templates/user/img/banner/banner-img.png')); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
<!-- start product Area -->
<section class="section_gap">
    <!-- single product slide -->>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h1>Latest Products</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- single product -->
            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid" src="<?php echo e(asset('images/'. $item->image)); ?>" alt="">
                                <div class="product-details">
                                    <h6><?php echo e($item->name); ?></h6>
                                    <div class="price">
                                        <h6>Harga: <?php echo e($item->price); ?> Points</h6>
                                    </div>
                                    <div class="prd-bottom">
                                        <a class="social-info" href="javascript:void(0);"onclick="confirmPurchase('<?php echo e($item->id); ?>', '<?php echo e(Auth::user()->id); ?>')">
                                            <span class="ti-bag"></span>
                                            <p class="hover-text">Beli</p>
                                        </a>
                                        <a href="<?php echo e(route('user.detail.product',$item->id)); ?>" class="social-info">
                                            <span class="lnr lnr-move"></span>
                                            <p class="hover-text">Detail</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-lg-12 col-md-12">
                    <div class="single-product">
                        <h3 class="text-center">Tidak ada produk</h3>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- end product Area -->
 <!-- start flash sale Area -->
<section class="section_gap">
    <div class="container">
        <h1 class="text-center">Flash Sale</h1>
        <div class="row">
            <?php $__empty_1 = true; $__currentLoopData = $flashSales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flashSalesItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product card text-center">
                        <img src="<?php echo e(asset('images/' . $flashSalesItem->image)); ?>" class="card-img-top"
                            alt="<?php echo e($flashSalesItem->product_name); ?>">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo e($flashSalesItem->product_name); ?></h2>
                            <p class="card-text"><strike>Rp<?php echo e(number_format($flashSalesItem->original_price, 2)); ?></strike>
                            </p>
                            <p class="card-text">Rp<?php echo e(number_format($flashSalesItem->discount_price, 2)); ?></p>
                            <p class="card-text">Diskon: <?php echo e(round($flashSalesItem->discount_percentage)); ?>%</p>
                            <p class="card-text">Sisa waktu:
                                <?php echo e(\Carbon\Carbon::parse($flashSalesItem->end_time)->diffForHumans()); ?></p>
                            <p class="card-text">Stok tersisa: <?php echo e($flashSalesItem->stock); ?></p>
                            <button class="btn btn-primary">Beli Sekarang</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-lg-12">
                    <h3 class="text-center">Tidak ada produk flash sale saat ini.</h3>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- end flash sale Area -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmPurchase(productId, userId) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda akan membeli produk ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Beli!',
            cancelButtonText: 'Batal'}).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '/product/purchase/' + productId+ '/' + userId;
            }
        });
    }
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.user.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\famelaoktavianda\famelaoktavianda-app\resources\views/pages/user/index.blade.php ENDPATH**/ ?>