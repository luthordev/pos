

<?php $__env->startSection('header'); ?>
    <a href="<?php echo e(route('bill.index')); ?>" class="text-warning">Tagihan</a>
    <a href="#" class="text-grey">&nbsp;/&nbsp;</a>
    <a href="#" class="text-grey">Detail Tagihan</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-warning">
                    Detail Tagihan
                </h6>
            </div>
            <div class="card-body">
                <div>
                    <label for="invoice">Invoice</label>
                    <p><?php echo e($bill->invoice); ?></p>
                </div>
                <div>
                    <label for="date">Tanggal</label>
                    <p><?php echo date_format(date_create($bill->date), 'd/M/Y'); ?></p>
                </div>
                <div>
                    <label for="supplier">Supplier</label>
                    <p><?php echo e($bill->product->supplier->name); ?></p>
                </div>
                <div>
                    <label for="produk">Produk</label>
                    <p><?php echo e($bill->product->name); ?></p>
                </div>
                <div>
                    <label for="qty">Qty</label>
                    <p><?php echo e($bill->qty); ?></p>
                </div>
                <div>
                    <label for="supplier">Jumlah Tagihan</label>
                    <p>Rp <?php echo number_format($bill->total_bill, 0); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pos\resources\views/bill/show.blade.php ENDPATH**/ ?>