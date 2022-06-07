
<?php $__env->startSection('title', 'Aurellia | Data Contacts'); ?>
<?php $__env->startSection('content'); ?>
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Data Contacts Us</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Nomor</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Pesan</th>
                                                <th>Aksi</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($index + 1); ?></td>
                                                <td><?php echo e($contact->nama); ?></td>
                                                <td><?php echo e($contact->email); ?></td>
                                                <td><?php echo e($contact->pesan); ?></td>
                                                <td>
                                                    <a href="<?php echo e(route('contacts.edit', $contact->id)); ?>"><i class="fas fa-edit"></i> </a>
                                                    |
                                                    <a href="<?php echo e(route('contacts.destroy', $contact->id)); ?>"><i class="fas fa-trash" style="color:red"></i> </a>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                    <?php echo e($contacts->links()); ?>

                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KK4 -A\modul\3-10-Aurellia\resources\views/admin/contacts/index.blade.php ENDPATH**/ ?>