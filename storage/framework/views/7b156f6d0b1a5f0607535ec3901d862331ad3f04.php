

<?php $__env->startSection('header'); ?>
    <a href="<?php echo e(route('product.index')); ?>" class="text-warning">Produk</a>
    <a href="#" class="text-grey">&nbsp;/&nbsp;</a>
    <a href="#" class="text-grey">Detail Produk</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-warning">
                    Detail Produk
                </h6>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <p><?php echo DNS1D::getBarcodeSVG($product->barcode, 'C128',2,50,'black', true); ?></p>
                   
                </div>
                <div>
                    <label for="name">Nama</label>
                    <p><?php echo e($product->name); ?></p>
                </div>
                <div>
                    <label for="purchase_price">Harga Beli</label>
                    <p>Rp <?php echo number_format($product->purchase_price, 0); ?></p>
                </div>
                <div>
                    <label for="price">Harga Jual</label>
                    <p>Rp <?php echo number_format($product->price, 0); ?></p>
                </div>
                <div>
                    <label for="qty">Qty</label>
                    <p><?php echo e($product->qty); ?></p>
                </div>
                <div>
                    <label for="supplier">Supplier</label>
                    <p><?php echo e($product->supplier->name); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pos\resources\views/product/show.blade.php ENDPATH**/ ?>