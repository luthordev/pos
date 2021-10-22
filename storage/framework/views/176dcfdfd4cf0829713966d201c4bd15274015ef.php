

<?php $__env->startSection('header'); ?>
    <a href="<?php echo e(route('bill.index')); ?>" class="text-warning">Tagihan</a>
    <a href="#" class="text-grey">&nbsp;/&nbsp;</a>
    <a href="#" class="text-grey">Bayar Tagihan</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-warning">
                    Form Bayar Tagihan
                </h6>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('bill.update', $bill->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-group">
                        <label for="total_bill">Total Tagihan</label>
                        <input value="<?php echo e($bill->total_bill); ?>" id="bill" class="form-control" hidden>
                        <input value="<?php echo number_format($bill->total_bill, 0); ?>" type="text" name="total_bill" id="total_bill" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="pay">Total Bayar</label>
                        <input type="number" name="pay" id="pay" class="form-control" required>
                    </div>
                    <div class="alert alert-warning" id="alert" role="alert">
                        Total bayar harus sama dengan total tagihan!
                    </div>
                    <button type="submit" id="submit" class="btn btn-warning" style="width: 100%" disabled>Bayar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
    var bill = parseInt($('#bill').val())
    var button = $('#submit')
    
    $('#pay').keyup(function(e){
        var pay = e.target.value
        if(pay == bill) return button.prop("disabled",false);
        return button.prop("disabled",true);
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pos\resources\views/bill/edit.blade.php ENDPATH**/ ?>