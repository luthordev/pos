

<?php $__env->startSection('header'); ?>
    <a href="<?php echo e(route('order.list')); ?>" class="text-warning">Order</a>
    <a href="#" class="text-grey">&nbsp;/&nbsp;</a>
    <a href="#" class="text-grey">Payment</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-warning">
                    Form Payment
                </h6>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('order.paying', $order->id)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PATCH'); ?>
                    <div class="form-group">
                        <label for="product_name">Product</label>
                        <input type="text" class="form-control" name="product_name" value="<?php echo e($order->product_name); ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="bill">Bill (Rp)</label>
                        <input type="text" class="form-control" value="<?php echo e($order->bill); ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="amount_of_transfer">Amount Of Transfer</label>
                        <input type="text" class="form-control" name="amount_of_transfer" placeholder="Enter Amount Of Transfer" required>
                    </div>
                    <div class="form-group">
                        <label for="sender_name">Sender Name</label>
                        <input type="text" class="form-control" name="sender_name" placeholder="Enter Sender Name" required value="<?php echo e(old('sender_name')); ?>">
                    </div>
                    <div class="form-group">
                        <label for="sender_account_number">Sender Account Number</label>
                        <input type="number" class="form-control" name="sender_account_number" placeholder="Enter Sender Account Number" required value="<?php echo e(old('sender_account_number')); ?>">
                    </div>
                    <div class="form-group">
                        <label for="evidence_of_payment">Evidence Of Payment</label>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="evidence_of_payment" id="evidence_of_payment" required>
                                <label class="custom-file-label" for="evidence_of_payment">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning" style="width: 100%">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <?php if(session()->has('msg')): ?>
        <script>
            Swal.fire({
                title: 'Warning!',
                text: "The transfer amount must be the same as the bill",
                icon: 'warning',
                confirmButtonColor: '#febd55',
                confirmButtonText: 'Ok',
                allowOutsideClick: false
            })
        </script>
    <?php endif; ?>

<script>

    $('#evidence_of_payment').on('change', function () {
        var fileName = $(this).val();
        var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
        $(this).next('.custom-file-label').html(cleanFileName);
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\silg\resources\views/order/pay.blade.php ENDPATH**/ ?>