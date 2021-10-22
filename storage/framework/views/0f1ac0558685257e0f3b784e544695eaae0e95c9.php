

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-4 col-12">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-warning">
                    Form Penjualan
                </h6>
            </div>
            <div class="card-body">
                <form action="#" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="product">Produk</label>
                        <select name="product" id="product" class="form-control">
                            <option disabled selected>-- PILIH PRODUK --</option>
                            <option value="1">Item 1</option>
                            <option value="2">Item 2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Harga</label>
                        <input type="number" name="price" id="price" class="form-control" readonly required>
                    </div>
                    <div class="form-group">
                        <label for="qty">Qty</label>
                        <input type="number" name="qty" id="qty" class="form-control" required>
                    </div>
                    
                    <button type="submit" class="btn btn-warning" style="width: 100%">Tambah Ke Keranjang</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-12">
        <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="alert alert-danger">
                    <?php echo e($error); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-warning">
                    Keranjang
                </h6>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>Produk</th>
                        <th>Qty</th>
                        <th>Harga</th>
                        <th>Total Harga</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr id="1">
                            <td><input type="text" class="form-control item-cart-field" readonly value="Item 1"></td>
                            <td><input type="text" class="form-control item-cart-field" readonly value="2"></td>
                            <td><input type="text" class="form-control item-cart-field" readonly value="Rp 10.000"></td>
                            <td><input type="text" class="form-control item-cart-field" readonly value="Rp 20.000"></td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="mr-2 btn btn-danger">x</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="line">
                    <div class="pt-3">
                        <span>Total Tagihan Rp.20.000</span>
                        <a href="#" class="btn btn-warning float-right">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pos\resources\views/sales/index.blade.php ENDPATH**/ ?>