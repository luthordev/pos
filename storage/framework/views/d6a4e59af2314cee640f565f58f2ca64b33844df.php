

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-warning">
            Supplier
        </h6>
    </div>
    <div class="card-body">
        <a href="<?php echo e(route('suppliers.create')); ?>" class="btn btn-warning mb-3">Tambah Supplier</a>
        <table class="table">
            <thead>
                <th>No</th>
                <th>Nama</th>
                <th>No Telepon</th>
                <th>Alamat</th>
                <th>Action</th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Berkah Jaya</td>
                    <td>08561216751</td>
                    <td>Cijambe, Subang</td>
                    <td>
                        <div class="d-flex">
                            <a href="#" class="mr-2 btn btn-primary">Detail</a>
                            <a href="#" class="mr-2 btn btn-success">Edit</a>
                            <form action="#" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="mr-2 btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pos\resources\views/suppliers/index.blade.php ENDPATH**/ ?>