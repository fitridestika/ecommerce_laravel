 
<?php $__env->startSection('title', 'Admin Dashboard'); ?> 
<?php $__env->startSection('content'); ?> 
    <div class="main-content"> 
        <section class="section"> 
            <div class="section-header"> 
                <h1>Dashboard</h1> 
                <div class="section-header-breadcrumb"> 
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div> 
                </div> 
            </div> 
 
            <div class="row"> 
                <div class="col-lg-3 col-md-6 col-sm-6 col-12"> 
                    <div class="card card-statistic-1"> 
                        <div class="card-icon bg-primary"> 
                            <i class="far fa-user"></i> 
                        </div> 
                        <div class="card-wrap"> 
                            <div class="card-header"> 
                                <h4>Total Pengguna</h4> 
                            </div> 
                            <div class="card-body"> 
                                200 
                            </div> 
                        </div> 
                    </div> 
                </div> 
                <div class="col-lg-3 col-md-6 col-sm-6 col-12"> 
                    <div class="card card-statistic-1"> 
                        <div class="card-icon bg-danger"> 
                            <i class="far fa-newspaper"></i> 
                        </div> 
                        <div class="card-wrap"> 
                            <div class="card-header"> 
                                <h4>Total Produk</h4> 
                            </div> 
                            <div class="card-body"> 
                                200 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </section> 
    </div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\famelaoktavianda\famelaoktavianda-app\resources\views/pages/admins/index.blade.php ENDPATH**/ ?>