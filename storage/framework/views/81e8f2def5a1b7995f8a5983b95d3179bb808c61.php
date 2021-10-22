

<?php $__env->startSection('header'); ?>
    <a href="<?php echo e(route('supplier.index')); ?>" class="text-warning">Supplier</a>
    <a href="#" class="text-grey">&nbsp;/&nbsp;</a>
    <a href="#" class="text-grey">Edit Supplier</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-warning">
                    Form Edit Supplier
                </h6>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('supplier.update', $supplier->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input value="<?php echo e($supplier->name); ?>" type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="telp">Telepon</label>
                        <input value="<?php echo e($supplier->telp); ?>" type="number" name="telp" id="telp" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <textarea name="address" id="address" rows="4" class="form-control" required><?php echo e($supplier->address); ?></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-warning" style="width: 100%">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pos\resources\views/supplier/edit.blade.php ENDPATH**/ ?>