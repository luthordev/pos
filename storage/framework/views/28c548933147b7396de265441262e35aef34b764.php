

<?php $__env->startSection('header'); ?>
    <a href="<?php echo e(route('product.index')); ?>" class="text-warning">Produk</a>
    <a href="#" class="text-grey">&nbsp;/&nbsp;</a>
    <a href="#" class="text-grey">Edit Produk</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-warning">
                    Form Edit Produk
                </h6>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('product.update', $product->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input value="<?php echo e($product->name); ?>" type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Harga Beli</label>
                        <input value="<?php echo e($product->purchase_price); ?>" type="number" name="price" id="price" class="form-control" readonly required>
                    </div>
                    <div class="form-group">
                        <label for="price">Harga Jual</label>
                        <input value="<?php echo e($product->price); ?>" type="number" name="price" id="price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="qty">Qty</label>
                        <input value="<?php echo e($product->qty); ?>" type="number" name="qty" id="qty" class="form-control" readonly required>
                    </div>
                    <div class="form-group">
                        <label for="supplier">Supplier</label>
                        <input value="<?php echo e($product->supplier->name); ?>" type="text" name="supplier" id="supplier" class="form-control" readonly required>
                    </div>
                    <button type="submit" class="btn btn-warning" style="width: 100%">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pos\resources\views/product/edit.blade.php ENDPATH**/ ?>