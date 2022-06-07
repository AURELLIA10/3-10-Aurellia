<header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                
                            </form>
                            <div class="header-button">
                               
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?php echo e(asset('admin/images//icon/avatar-01.jpg')); ?>" alt="<?php echo e(auth::user()->name); ?>" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo e(auth::user()->name); ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?php echo e(asset('admin/images//icon/avatar-01.jpg')); ?>" alt="<?php echo e(auth::user()->name); ?>" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo e(auth::user()->name); ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo e(auth::user()->email); ?></span>
                                                </div>
                                            </div>
                                           
                                            <div class="account-dropdown__footer">
                                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header><?php /**PATH D:\KK4 -A\modul\3-10-Aurellia\resources\views/partials/header.blade.php ENDPATH**/ ?>