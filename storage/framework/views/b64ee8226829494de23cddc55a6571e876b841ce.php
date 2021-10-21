

<?php $__env->startSection('header'); ?>
    <a href="<?php echo e(route('order.index')); ?>" class="text-warning">Order</a>
    <a href="#" class="text-grey">&nbsp;/&nbsp;</a>
    <a href="#" class="text-grey">Edit Order</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-warning">
                    Form Edit Order
                </h6>
            </div>
            <div class="card-body">
                <?php if(auth()->user()->role == 'admin'): ?>
                <form action="<?php echo e(route('order.updateAdmin', $order->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php else: ?>
                <form action="<?php echo e(route('order.update', $order->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php endif; ?>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PATCH'); ?>
                    <div class="form-group">
                        <label for="status">Progress</label>
                        <select name="status" class="form-control" required>
                            <?php for($i = 1; $i <= count(explode(",", $order->steps)); $i++): ?>
                            <option value="<?php echo e($i); ?>" <?php echo e($order->status == $i ? 'selected' : ''); ?>><?php echo e(explode(",", $order->steps)[$i-1]); ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="photo_progress">Photo Progress</label>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="photo_progress" id="photo_progress"
                                    aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="photo_progress">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <?php if(auth()->user()->role != 'admin'): ?>
                    <input type="hidden" name="payment_status" value="<?php echo e($order->payment_status); ?>" readonly>
                    <?php endif; ?>

                    <?php if(auth()->user()->role == 'admin'): ?>
                    <div class="form-group">
                        <label for="payment_status">Payment Status</label>
                        <select name="payment_status" id="payment_status" class="form-control">
                            <option value="menunggu_konfirmasi" <?php echo e($order->payment_status == 'menunggu_konfirmasi' ? 'selected' : ''); ?>>Menunggu Konfirmasi</option>
                            <option value="lunas" <?php echo e($order->payment_status == 'lunas' ? 'selected' : ''); ?>>Lunas</option>
                            <option value="belum_lunas" <?php echo e($order->payment_status == 'belum_lunas' ? 'selected' : ''); ?>>Belum Lunas</option>
                        </select>
                    </div>
                    <?php endif; ?>

                    <button type="submit" class="btn btn-warning" style="width: 100%">Update Progress</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
    $('#photo_progress').on('change', function () {
        var fileName = $(this).val();
        var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
        $(this).next('.custom-file-label').html(cleanFileName);
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\silg\resources\views/order/edit.blade.php ENDPATH**/ ?>