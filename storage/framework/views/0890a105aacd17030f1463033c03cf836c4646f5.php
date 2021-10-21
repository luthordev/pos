

<?php $__env->startSection('header'); ?>
    <a href="<?php echo e(route('order.index')); ?>" class="text-warning">Order</a>
    <a href="#" class="text-grey">&nbsp;/&nbsp;</a>
    <a href="#" class="text-grey">Detail Order</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-warning">
                    Detail Customer
                </h6>
            </div>
            <div class="card-body">
                <div>
                    <label for="name">Customer Name</label>
                    <p><?php echo e($order->name); ?></p>
                </div>
                <div>
                    <label for="price">Email</label>
                    <p><?php echo e($order->email); ?></p>
                </div>
                <div>
                    <label for="step">Phonenumber</label>
                    <p><?php echo e($order->phone_number); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-warning">
                    Detail Product
                </h6>
            </div>
            <div class="card-body">
                <div>
                    <label for="product_name">Product Name</label>
                    <p><?php echo e($order->product_name); ?></p>
                </div>
                <div>
                    <label for="product_name">Price</label>
                    <p><?php echo e($order->price); ?></p>
                </div>
                <div>
                    <label for="category">Category</label>
                    <p><?php echo e($order->category); ?></p>
                </div>
                <div>
                    <label for="detail">Detail</label>
                    <?php if($order->category == "Adult"): ?>
                    <div class="d-flex">
                                <div class="mr-2">
                                    <input type="checkbox" name="18" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '18') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="17" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '17') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="16" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '16') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="15" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '15') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="14" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '14') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="13" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '13') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="12" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '12') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="11" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '11') ? 'checked' : ''); ?>>
                                </div>
                                <div class="ml-2">
                                    <input type="checkbox" name="21" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '21') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="22" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '22') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="23" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '23') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="24" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '24') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="25" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '25') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="26" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '26') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="27" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '27') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="28" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '28') ? 'checked' : ''); ?>>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="mr-2">
                                    <input type="checkbox" name="48" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '48') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="47" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '47') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="46" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '46') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="45" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '45') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="44" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '44') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="43" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '43') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="42" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '42') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="41" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '41') ? 'checked' : ''); ?>>
                                </div>
                                <div class="ml-2">
                                    <input type="checkbox" name="31" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '31') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="32" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '32') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="33" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '33') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="34" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '34') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="35" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '35') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="36" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '36') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="37" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '37') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="38" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '38') ? 'checked' : ''); ?>>
                                </div>
                            </div>
                    <?php endif; ?>

                    <?php if($order->category == "Children"): ?>
                            <div class="d-flex">
                                <div class="mr-2">
                                    <input type="checkbox" name="55" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '55') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="54" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '54') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="53" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '53') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="52" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '52') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="51" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '51') ? 'checked' : ''); ?>>
                                </div>
                                <div class="ml-2">
                                    <input type="checkbox" name="61" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '61') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="62" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '62') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="63" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '63') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="64" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '64') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="65" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '65') ? 'checked' : ''); ?>>
                                </div>
                            </div>
                            <div class="d-flex ">
                                <div class="mr-2">
                                    <input type="checkbox" name="85" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '85') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="84" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '84') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="83" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '83') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="82" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '82') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="81" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '81') ? 'checked' : ''); ?>>
                                </div>
                                <div class="ml-2">
                                    <input type="checkbox" name="71" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '71') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="72" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '72') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="73" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '73') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="74" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '74') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="75" class="big-checkbox" disabled disabled <?php echo e(str_contains($order->id_category, '75') ? 'checked' : ''); ?>>
                                </div>
                            </div>
                    <?php endif; ?>

                    <?php if($order->category == "Mix"): ?>
                    <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <input type="checkbox" name="18" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '18') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="17" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '17') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="16" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '16') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="15" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '15') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="14" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '14') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="13" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '13') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="12" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '12') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="11" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '11') ? 'checked' : ''); ?>>
                                </div>
                                <div class="ml-2">
                                    <input type="checkbox" name="21" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '21') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="22" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '22') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="23" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '23') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="24" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '24') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="25" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '25') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="26" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '26') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="27" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '27') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="28" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '28') ? 'checked' : ''); ?>>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <input type="checkbox" name="55" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '55') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="54" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '54') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="53" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '53') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="52" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '52') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="51" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '51') ? 'checked' : ''); ?>>
                                </div>
                                <div class="ml-2">
                                    <input type="checkbox" name="61" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '61') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="62" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '62') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="63" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '63') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="64" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '64') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="65" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '65') ? 'checked' : ''); ?>>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <input type="checkbox" name="85" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '85') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="84" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '84') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="83" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '83') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="82" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '82') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="81" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '81') ? 'checked' : ''); ?>>
                                </div>
                                <div class="ml-2">
                                    <input type="checkbox" name="71" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '71') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="72" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '72') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="73" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '73') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="74" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '74') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="75" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '75') ? 'checked' : ''); ?>>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <input type="checkbox" name="48" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '48') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="47" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '47') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="46" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '46') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="45" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '45') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="44" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '44') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="43" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '43') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="42" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '42') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="41" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '41') ? 'checked' : ''); ?>>
                                </div>
                                <div class="ml-2">
                                    <input type="checkbox" name="31" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '31') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="32" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '32') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="33" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '33') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="34" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '34') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="35" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '35') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="36" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '36') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="37" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '37') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="38" class="big-checkbox" disabled <?php echo e(str_contains($order->id_category, '38') ? 'checked' : ''); ?>>
                                </div>
                            </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-12 col-12">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-warning">
                    Detail Order
                </h6>
            </div>
            <div class="card-body">
                <div>
                    <label for="name">Invoice</label>
                    <p><?php echo e($order->invoice); ?></p>
                </div>
                <div>
                    <label for="name">Total Price</label>
                    <p>Rp<?php echo e($order->bill); ?></p>
                </div>
                <div>
                    <label for="name">Customer</label>
                    <p><?php echo e($order->name); ?></p>
                </div>
                <div>
                    <label for="price">Progress</label>
                    <p><?php echo e(explode(",", $order->steps)[$order->status-1]); ?></p>
                </div>
                <?php if($order->photo_progress): ?>
                <div>
                    <label for="step">Photo Progress</label>
                    <p><img src="<?php echo e(asset('orders/'.$order->photo_progress)); ?>" height="350px" width="auto"></p>
                </div>
                <?php endif; ?>
                <div>
                    <label for="price">Order Date</label>
                    <p><?php echo e($order->order_date); ?></p>
                </div>
                <div>
                    <label for="step">Photo Model</label>
                    <p><img src="<?php echo e(asset('orders/'.$order->photo_model)); ?>" height="350px" width="auto"></p>
                </div>
                <div>
                    <label for="step">Design</label>
                    <p><img src="<?php echo e(asset('orders/'.$order->design)); ?>" height="350px" width="auto"></p>
                </div>
                <div>
                    <label for="price">Resi Number</label>
                    <p><?php echo e($order->resi ?? '-'); ?></p>
                </div>
                <div>
                    <label for="price">Payment Status</label>
                    <p><?php echo e($order->payment_status); ?></p>
                </div>
                <div>
                    <label for="price">Sender Name</label>
                    <p><?php echo e($order->sender_name ?? '-'); ?></p>
                </div>
                <div>
                    <label for="price">Sender Account Number</label>
                    <p><?php echo e($order->sender_account_number ?? '-'); ?></p>
                </div>
                <?php if($order->evidence_of_payment): ?>
                <div>
                    <label for="step">Evidence Of Payment</label>
                    <p><img src="<?php echo e(asset('orders/'.$order->evidence_of_payment)); ?>" height="350px" width="auto"></p>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\silg\resources\views/order/show.blade.php ENDPATH**/ ?>