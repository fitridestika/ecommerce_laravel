<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">Teknik Informatika | RPL</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">RPL</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            
            <!-- Dashboard -->
            <li class="<?php echo e(Route::is('admin.dashboard') ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>">
                    <i class="fas fa-home"></i> 
                    <span>Dashboard</span>
                </a>
            </li>
            
            <!-- Produk -->
            <li class="<?php echo e(Request::is('product*') ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('admin.product')); ?>">
                    <i class="fas fa-box"></i>
                    <span>Produk</span>
                </a>
            </li>

            <!-- Distributor -->
            <li class="<?php echo e(Request::is('distributor*') ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('admin.distributor')); ?>">
                    <i class="fas fa-truck"></i>
                    <span>Distributor</span>
                </a>
            </li>

            <!-- Flash Sale -->
            <li class="<?php echo e(Request::is('flashsale*') ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('admin.flashsale')); ?>">
                    <i class="fas fa-bolt"></i>
                    <span>Flash Sale</span>
                </a>
            </li>

        </ul>
    </aside>
</div><?php /**PATH C:\xampp\htdocs\famelaoktavianda\famelaoktavianda-app\resources\views/layouts/admin/sidebar.blade.php ENDPATH**/ ?>