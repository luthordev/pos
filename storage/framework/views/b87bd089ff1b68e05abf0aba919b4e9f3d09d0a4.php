

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-warning">
            List Order
        </h6>
    </div>
    <div class="card-body">
        
        <table class="table">
            <thead>
                <th>Date</th>
                <th>Invoice</th>
                <th>Product</th>
                <th>Payment Status</th>
                <th>Progress</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($order->order_date); ?></td>
                    <td><?php echo e($order->invoice); ?></td>
                    <td><?php echo e($order->product_name); ?></td>
                    <td><?php echo e($order->payment_status); ?></td>
                    <td><?php echo e(explode(",", $order->steps)[$order->status-1]); ?></td>
                    <td>
                        <a href="<?php echo e(route('order.detail', $order->id)); ?>" class="btn btn-primary">Detail</a>
                        <?php if($order->payment_status == 'belum_lunas'): ?>
                        <a href="<?php echo e(route('order.pay', $order->id)); ?>" class="btn btn-success">Bayar</a>
                        <?php endif; ?>
                        <?php if($order->resi == NULL): ?>
                        <a href="<?php echo e(route('order.updateResi', $order->id)); ?>" class="btn btn-secondary">Update Resi</a>
                        <?php endif; ?>
                        <?php if($order->payment_status == 'lunas' && $order->status == count(explode(',', $order->steps)) && auth()->user()->role == 'customer'): ?>
                        
                        <a href="<?php echo e(route('order.revision', $order->id)); ?>" class="btn btn-warning">Revisi</a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\silg\resources\views/order/list.blade.php ENDPATH**/ ?>