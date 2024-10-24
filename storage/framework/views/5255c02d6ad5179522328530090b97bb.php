
<?php $__env->startSection('content'); ?>
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Halaman Detail Produk</h1>
                <nav class="d-flex align-items-center">
                    <a href="<?php echo e(route('user.dashboard')); ?>"> Home <span class="lnr lnr-arrow-right"> </span></a>
                    <a href="single-product.html">Detail Produk</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<section class="section_gap">
    <!--================Single Product Area =================-->
    <div class="product_image_area">
        <div class="container">
            <div class="row s_product_inner">
                <div class="col-lg-6">
                    <div class="single-prd-item">
                        <img class="img-fluid" src="<?php echo e(asset('images/' . $product->image)); ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h3><?php echo e($product->name); ?></h3>
                        <h2><?php echo e($product->price); ?> Points</h2>
                        <ul class="list">
                            <li>
                                <a class="active" href="#">
                                    <span> Kategori</span> : <?php echo e($product->category); ?> </a>
                            </li>
                        </ul>
                        <p><?php echo e($product->description); ?></p>
                        <div class="card_area d-flex align-items-center">
                            <a class="primary-btn" href="javascript:void(0);" onclick="confirmPurchase('<?php echo e($product->id); ?>', '<?php echo e(Auth::user()->id); ?>')"> Beli Produk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Single Product Area =================-->
</section>
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
                window.location.href = '/product/purchase/' + productId + '/'+ userId;
            }
        });
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\famelaoktavianda\famelaoktavianda-app\resources\views/pages/user/detail.blade.php ENDPATH**/ ?>