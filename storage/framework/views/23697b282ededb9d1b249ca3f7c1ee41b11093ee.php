

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-warning">
            Tagihan
        </h6>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Tanggal</th>
                <th>Supplier</th>
                <th>Jumlah Tagihan</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $bills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->index + 1); ?></td>
                    <td><?php echo date_format(date_create($bill->date), 'd/M/Y'); ?></td>
                    <td><?php echo e($bill->product->supplier->name); ?></td>
                    <td>Rp <?php echo number_format($bill->total_bill, 0); ?></td>
                    <td>
                        <div class="d-flex">
                            <a href="<?php echo e(route('bill.show', $bill->id)); ?>" class="mr-2 btn btn-primary">Detail</a>
                            <a href="<?php echo e(route('bill.edit', $bill->id)); ?>" class="mr-2 btn btn-success">Bayar</a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
    $(document).ready(function() {
    $('.table').DataTable();
} );
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pos\resources\views/bill/index.blade.php ENDPATH**/ ?>