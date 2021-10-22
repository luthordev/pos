

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-warning">
            Produk
        </h6>
    </div>
    <div class="card-body">
        <a href="<?php echo e(route('product.create')); ?>" class="btn btn-warning mb-3">Tambah Produk</a>
        <table class="table">
            <thead>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Supplier</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->index + 1); ?></td>
                    <td><?php echo e($product->name); ?></td>
                    <td>Rp <?php echo number_format($product->price, 0); ?></td>
                    <td><?php echo e($product->qty); ?></td>
                    <td><?php echo e($product->supplier->name); ?></td>
                    <td>
                        <div class="d-flex">
                            <a href="<?php echo e(route('product.show', $product->id)); ?>" class="mr-2 btn btn-primary">Detail</a>
                            <a href="<?php echo e(route('product.edit', $product->id)); ?>" class="mr-2 btn btn-success">Edit</a>
                            <form action="<?php echo e(route('product.destroy', $product->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="mr-2 btn btn-danger">Delete</button>
                            </form>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pos\resources\views/product/index.blade.php ENDPATH**/ ?>