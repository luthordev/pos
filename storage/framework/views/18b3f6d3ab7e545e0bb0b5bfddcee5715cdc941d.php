

<?php $__env->startSection('header'); ?>
    <a href="<?php echo e(route('product.index')); ?>" class="text-warning">Produk</a>
    <a href="#" class="text-grey">&nbsp;/&nbsp;</a>
    <a href="#" class="text-grey">Tambah Produk Baru</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-warning">
                    Form Produk
                </h6>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('product.addStock')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="text" name="id" id="id" class="form-control" value="<?php echo e($product->id); ?>" hidden>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?php echo e($product->name); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="purchase_price">Harga Beli</label>
                        <input type="number" name="purchase_price" id="purchase_price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="qty">Qty</label>
                        <input type="number" name="qty" id="qty" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="payment">Pembayaran</label>
                        <select name="payment" id="payment" class="form-control" required>
                            <option disabled selected>-- PILIH METODE PEMBAYARAN --</option>
                            <option value="cash">Cash</option>
                            <option value="credit">Kredit</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-warning" style="width: 100%">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-12">
        <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="alert alert-danger">
                    <?php echo e($error); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pos\resources\views/product/add.blade.php ENDPATH**/ ?>