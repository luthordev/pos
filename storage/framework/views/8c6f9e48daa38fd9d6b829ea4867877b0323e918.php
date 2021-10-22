

<?php $__env->startSection('header'); ?>
    <a href="<?php echo e(route('supplier.index')); ?>" class="text-warning">Supplier</a>
    <a href="#" class="text-grey">&nbsp;/&nbsp;</a>
    <a href="#" class="text-grey">Detail Supplier</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-warning">
                    Detail Supplier
                </h6>
            </div>
            <div class="card-body">
                <div>
                    <label for="name">Nama</label>
                    <p><?php echo e($supplier->name); ?></p>
                </div>
                <div>
                    <label for="telp">Telepon</label>
                    <p><?php echo e($supplier->telp); ?></p>
                </div>
                <div>
                    <label for="address">Alamat</label>
                    <p><?php echo e($supplier->address); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pos\resources\views/supplier/show.blade.php ENDPATH**/ ?>