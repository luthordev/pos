

<?php $__env->startSection('css'); ?>
    <style>
        .big-checkbox {
            width: 30px;
            height: 30px;
            border: 1px solid #c8ced3;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <a href="<?php echo e(route('order.list')); ?>" class="text-warning">Order</a>
    <a href="#" class="text-grey">&nbsp;/&nbsp;</a>
    <a href="#" class="text-grey">Revision</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-8 col-12">
        <div class="card">
            <div class="card-header">
                <div class="step-one">
                    <h6 class="m-0 text-warning font-weight-bold">
                        Order Form ( Step 1: )
                    </h6>
                </div>
                <div class="step-two">
                    <h6 class="m-0 text-warning font-weight-bold">
                        Order Form ( Step 2: )
                    </h6>
                </div>
                <div class="step-three">
                    <h6 class="m-0 text-warning font-weight-bold">
                        Order Form ( Step 3: )
                    </h6>
                </div>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('order.storeRevision')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PATCH'); ?>
                    <input type="hidden" name="id" id="id" value="<?php echo e($order->id); ?>">
                    <div class="step-one">
                        <div class="progress mb-3">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="card mb-2">
                            <div class="card-body">
                                <p class="m-0">File Template</p>
                                <p class="m-0">1. Children (<a href="https://drive.google.com/file/d/168Pietw5Lx_-lDLhcp7KIKfdZz4mmWj8/view?usp=sharing">download</a>)</p>
                                <p class="m-0">2. Adult (<a href="https://drive.google.com/file/d/1OljBZPM_Cpv0laWxl0XCimHc6a-Z6SIH/view?usp=sharing">download</a>)</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="resi">Resi Number</label>
                            <input value="<?php echo e($order->resi); ?>" type="text" name="resi" id="resi" class="form-control" placeholder="Enter Resi Number">
                        </div>
                        <div class="form-group">
                            <label for="photo_model">Model Photo</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="photo_model" id="photo_model"
                                        aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="photo_model">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="design">Design (download file template terlebih dahulu)</label>
                            <p>Tool Design: <a href="https://kleki.com/">https://kleki.com/</a></p>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="design" id="design"
                                        aria-describedby="inputGroupFileAddon02">
                                    <label class="custom-file-label" for="design">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product">Product</label>
                            <select class="custom-select" name="product" id="product" disabled>
                                <option value="<?php echo e($order->product->id); ?>" data-price="<?php echo e($order->product->price); ?>" data-product="<?php echo e($order->product->product_name); ?>" selected><?php echo e($order->product->product_name); ?> - Rp<?php echo e($order->product->price); ?></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <div class="input-group mb-3">
                                <select class="custom-select" name="category" id="category" disabled>
                                    <option value="<?php echo e($order->category); ?>" selected><?php echo e($order->category); ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" id="children">
                            <label>Children</label>
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <input type="checkbox" name="55" class="big-checkbox" <?php echo e(str_contains($order->id_category, '55') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="54" class="big-checkbox" <?php echo e(str_contains($order->id_category, '54') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="53" class="big-checkbox" <?php echo e(str_contains($order->id_category, '53') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="52" class="big-checkbox" <?php echo e(str_contains($order->id_category, '52') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="51" class="big-checkbox" <?php echo e(str_contains($order->id_category, '51') ? 'checked' : ''); ?>>
                                </div>
                                <div class="ml-2">
                                    <input type="checkbox" name="61" class="big-checkbox" <?php echo e(str_contains($order->id_category, '61') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="62" class="big-checkbox" <?php echo e(str_contains($order->id_category, '62') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="63" class="big-checkbox" <?php echo e(str_contains($order->id_category, '63') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="64" class="big-checkbox" <?php echo e(str_contains($order->id_category, '64') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="65" class="big-checkbox" <?php echo e(str_contains($order->id_category, '65') ? 'checked' : ''); ?>>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <input type="checkbox" name="85" class="big-checkbox" <?php echo e(str_contains($order->id_category, '85') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="84" class="big-checkbox" <?php echo e(str_contains($order->id_category, '84') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="83" class="big-checkbox" <?php echo e(str_contains($order->id_category, '83') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="82" class="big-checkbox" <?php echo e(str_contains($order->id_category, '82') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="81" class="big-checkbox" <?php echo e(str_contains($order->id_category, '81') ? 'checked' : ''); ?>>
                                </div>
                                <div class="ml-2">
                                    <input type="checkbox" name="71" class="big-checkbox" <?php echo e(str_contains($order->id_category, '71') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="72" class="big-checkbox" <?php echo e(str_contains($order->id_category, '72') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="73" class="big-checkbox" <?php echo e(str_contains($order->id_category, '73') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="74" class="big-checkbox" <?php echo e(str_contains($order->id_category, '74') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="75" class="big-checkbox" <?php echo e(str_contains($order->id_category, '75') ? 'checked' : ''); ?>>
                                </div>
                            </div>
                        </div>
    
                        <div class="form-group" id="adult">
                            <label>Adult</label>
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <input type="checkbox" name="18" class="big-checkbox" <?php echo e(str_contains($order->id_category, '18') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="17" class="big-checkbox" <?php echo e(str_contains($order->id_category, '17') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="16" class="big-checkbox" <?php echo e(str_contains($order->id_category, '16') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="15" class="big-checkbox" <?php echo e(str_contains($order->id_category, '15') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="14" class="big-checkbox" <?php echo e(str_contains($order->id_category, '14') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="13" class="big-checkbox" <?php echo e(str_contains($order->id_category, '13') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="12" class="big-checkbox" <?php echo e(str_contains($order->id_category, '12') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="11" class="big-checkbox" <?php echo e(str_contains($order->id_category, '11') ? 'checked' : ''); ?>>
                                </div>
                                <div class="ml-2">
                                    <input type="checkbox" name="21" class="big-checkbox" <?php echo e(str_contains($order->id_category, '21') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="22" class="big-checkbox" <?php echo e(str_contains($order->id_category, '22') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="23" class="big-checkbox" <?php echo e(str_contains($order->id_category, '23') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="24" class="big-checkbox" <?php echo e(str_contains($order->id_category, '24') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="25" class="big-checkbox" <?php echo e(str_contains($order->id_category, '25') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="26" class="big-checkbox" <?php echo e(str_contains($order->id_category, '26') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="27" class="big-checkbox" <?php echo e(str_contains($order->id_category, '27') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="28" class="big-checkbox" <?php echo e(str_contains($order->id_category, '28') ? 'checked' : ''); ?>>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <input type="checkbox" name="48" class="big-checkbox" <?php echo e(str_contains($order->id_category, '48') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="47" class="big-checkbox" <?php echo e(str_contains($order->id_category, '47') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="46" class="big-checkbox" <?php echo e(str_contains($order->id_category, '46') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="45" class="big-checkbox" <?php echo e(str_contains($order->id_category, '45') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="44" class="big-checkbox" <?php echo e(str_contains($order->id_category, '44') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="43" class="big-checkbox" <?php echo e(str_contains($order->id_category, '43') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="42" class="big-checkbox" <?php echo e(str_contains($order->id_category, '42') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="41" class="big-checkbox" <?php echo e(str_contains($order->id_category, '41') ? 'checked' : ''); ?>>
                                </div>
                                <div class="ml-2">
                                    <input type="checkbox" name="31" class="big-checkbox" <?php echo e(str_contains($order->id_category, '31') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="32" class="big-checkbox" <?php echo e(str_contains($order->id_category, '32') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="33" class="big-checkbox" <?php echo e(str_contains($order->id_category, '33') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="34" class="big-checkbox" <?php echo e(str_contains($order->id_category, '34') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="35" class="big-checkbox" <?php echo e(str_contains($order->id_category, '35') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="36" class="big-checkbox" <?php echo e(str_contains($order->id_category, '36') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="37" class="big-checkbox" <?php echo e(str_contains($order->id_category, '37') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="38" class="big-checkbox" <?php echo e(str_contains($order->id_category, '38') ? 'checked' : ''); ?>>
                                </div>
                            </div>
                        </div>
    
                        <div class="form-group" id="mix">
                            <label>Mix</label>
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <input type="checkbox" name="18" class="big-checkbox" <?php echo e(str_contains($order->id_category, '18') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="17" class="big-checkbox" <?php echo e(str_contains($order->id_category, '17') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="16" class="big-checkbox" <?php echo e(str_contains($order->id_category, '16') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="15" class="big-checkbox" <?php echo e(str_contains($order->id_category, '15') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="14" class="big-checkbox" <?php echo e(str_contains($order->id_category, '14') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="13" class="big-checkbox" <?php echo e(str_contains($order->id_category, '13') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="12" class="big-checkbox" <?php echo e(str_contains($order->id_category, '12') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="11" class="big-checkbox" <?php echo e(str_contains($order->id_category, '11') ? 'checked' : ''); ?>>
                                </div>
                                <div class="ml-2">
                                    <input type="checkbox" name="21" class="big-checkbox" <?php echo e(str_contains($order->id_category, '21') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="22" class="big-checkbox" <?php echo e(str_contains($order->id_category, '22') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="23" class="big-checkbox" <?php echo e(str_contains($order->id_category, '23') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="24" class="big-checkbox" <?php echo e(str_contains($order->id_category, '24') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="25" class="big-checkbox" <?php echo e(str_contains($order->id_category, '25') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="26" class="big-checkbox" <?php echo e(str_contains($order->id_category, '26') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="27" class="big-checkbox" <?php echo e(str_contains($order->id_category, '27') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="28" class="big-checkbox" <?php echo e(str_contains($order->id_category, '28') ? 'checked' : ''); ?>>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <input type="checkbox" name="55" class="big-checkbox" <?php echo e(str_contains($order->id_category, '55') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="54" class="big-checkbox" <?php echo e(str_contains($order->id_category, '54') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="53" class="big-checkbox" <?php echo e(str_contains($order->id_category, '53') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="52" class="big-checkbox" <?php echo e(str_contains($order->id_category, '52') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="51" class="big-checkbox" <?php echo e(str_contains($order->id_category, '51') ? 'checked' : ''); ?>>
                                </div>
                                <div class="ml-2">
                                    <input type="checkbox" name="61" class="big-checkbox" <?php echo e(str_contains($order->id_category, '61') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="62" class="big-checkbox" <?php echo e(str_contains($order->id_category, '62') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="63" class="big-checkbox" <?php echo e(str_contains($order->id_category, '63') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="64" class="big-checkbox" <?php echo e(str_contains($order->id_category, '64') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="65" class="big-checkbox" <?php echo e(str_contains($order->id_category, '65') ? 'checked' : ''); ?>>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <input type="checkbox" name="85" class="big-checkbox" <?php echo e(str_contains($order->id_category, '85') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="84" class="big-checkbox" <?php echo e(str_contains($order->id_category, '84') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="83" class="big-checkbox" <?php echo e(str_contains($order->id_category, '83') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="82" class="big-checkbox" <?php echo e(str_contains($order->id_category, '82') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="81" class="big-checkbox" <?php echo e(str_contains($order->id_category, '81') ? 'checked' : ''); ?>>
                                </div>
                                <div class="ml-2">
                                    <input type="checkbox" name="71" class="big-checkbox" <?php echo e(str_contains($order->id_category, '71') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="72" class="big-checkbox" <?php echo e(str_contains($order->id_category, '72') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="73" class="big-checkbox" <?php echo e(str_contains($order->id_category, '73') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="74" class="big-checkbox" <?php echo e(str_contains($order->id_category, '74') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="75" class="big-checkbox" <?php echo e(str_contains($order->id_category, '75') ? 'checked' : ''); ?>>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <input type="checkbox" name="48" class="big-checkbox" <?php echo e(str_contains($order->id_category, '48') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="47" class="big-checkbox" <?php echo e(str_contains($order->id_category, '47') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="46" class="big-checkbox" <?php echo e(str_contains($order->id_category, '46') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="45" class="big-checkbox" <?php echo e(str_contains($order->id_category, '45') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="44" class="big-checkbox" <?php echo e(str_contains($order->id_category, '44') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="43" class="big-checkbox" <?php echo e(str_contains($order->id_category, '43') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="42" class="big-checkbox" <?php echo e(str_contains($order->id_category, '42') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="41" class="big-checkbox" <?php echo e(str_contains($order->id_category, '41') ? 'checked' : ''); ?>>
                                </div>
                                <div class="ml-2">
                                    <input type="checkbox" name="31" class="big-checkbox" <?php echo e(str_contains($order->id_category, '31') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="32" class="big-checkbox" <?php echo e(str_contains($order->id_category, '32') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="33" class="big-checkbox" <?php echo e(str_contains($order->id_category, '33') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="34" class="big-checkbox" <?php echo e(str_contains($order->id_category, '34') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="35" class="big-checkbox" <?php echo e(str_contains($order->id_category, '35') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="36" class="big-checkbox" <?php echo e(str_contains($order->id_category, '36') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="37" class="big-checkbox" <?php echo e(str_contains($order->id_category, '37') ? 'checked' : ''); ?>>
                                    <input type="checkbox" name="38" class="big-checkbox" <?php echo e(str_contains($order->id_category, '38') ? 'checked' : ''); ?>>
                                </div>
                            </div>
                        </div>
                        <button type="button" id="step-one" class="float-right btn btn-warning">Next</button>
                    </div>
                    <div class="step-two">
                        <div class="progress mb-3">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="form-group">
                            <div id="payment_method">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <p class="m-0">Guide</p>
                                        <p class="m-0">1. Enter all the required data.</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sender_name">Sender Name</label>
                                    <input value="<?php echo e($order->sender_name); ?>" type="text" name="sender_name" id="sender_name" class="form-control" placeholder="Enter Sender Name">
                                </div>
                                <div class="form-group">
                                    <label for="sender_account_number">Sender Account Number</label>
                                    <input value="<?php echo e($order->sender_account_number); ?>" type="text" name="sender_account_number" id="sender_account_number" class="form-control" placeholder="Enter Sender Account Number">
                                </div>
                                <div class="form-group">
                                    <label for="amount_of_transfer">Amount Of Transfer (Rp)</label>
                                    <input value="<?php echo e($order->bill); ?>" type="number" name="amount_of_transfer" id="amount_of_transfer" class="form-control" placeholder="Enter Amount Of Transfer">
                                </div>
                                <div class="form-group">
                                    <label for="evidence_of_payment">Evidence of Payment</label>
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="evidence_of_payment" id="evidence_of_payment"
                                                aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="evidence_of_payment">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" id="prev-step-two" class="float-left btn btn-warning">Previous</button>
                        <button type="button" id="step-two" class="float-right btn btn-warning">Next</button>
                    </div>
                    <div class="step-three">
                        <div class="progress mb-3">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div>
                            <label>Resi Number</label>
                            <p id="v-resi"></p>
                        </div>
                        <div>
                            <label>Photo Model</label>
                            <p><img src="" id="v-photo_model" height="250" width="auto"></p>
                        </div>
                        <div>
                            <label>Design</label>
                            <p><img src="" id="v-design" height="250" width="auto"></p>
                        </div>
                        <div>
                            <label>Product</label>
                            <p id="v-product"><?php echo e($order->product->product_name); ?></p>
                        </div>
                        <input type="hidden" name="price" id="v-price" value="<?php echo e($order->product->price); ?>" required>
                        <div>
                            <label>Category</label>
                            <p id="v-category"><?php echo e($order->category); ?></p>
                        </div>
                        <!-- <div>
                            <label>Detail</label>
                            <p id="v-detail"></p>
                        </div> -->
                        <div>
                            <label>Sender Name</label>
                            <p id="v-sender_name"></p>
                        </div>
                        <div>
                            <label>Sender Account Number</label>
                            <p id="v-sender_account_number"></p>
                        </div>
                        <div>
                            <label>Evidence Of Payment</label>
                            <p><img src="" id="v-evidence_of_payment" height="250" width="auto"></p>
                        </div>
                        <button type="button" id="prev-step-three" class="float-left btn btn-warning">Previous</button>
                        <button type="submit" class="float-right btn btn-warning">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>

        function loadImage(file, wrapper) {
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function () {
                wrapper.attr("src", reader.result);
            };
            reader.onerror = function (error) {
                console.log('Error: ', error);
            };
        }

        $(document).ready(function (){
            $('#children').hide()
            $('#adult').hide()
            $('#mix').hide()

            let category = <?php echo $order->category == "Children" ? 1 : ($order->category == "Adult" ? 2 : 3); ?>;

            if (category == 1) {
                $('#children').show()
            } else if (category == 2) {
                $('#adult').show()
            } else {
                $('#mix').show()
            }

            $('.step-two').hide()
            $('.step-three').hide()
        });

        $('#step-one').on('click', function () {
            $('.step-one').hide()
            $('.step-two').show()
            $('.step-three').hide()
        });

        $('#prev-step-two').on('click', function () {
            $('.step-one').show()
            $('.step-two').hide()
            $('.step-three').hide()
        });

        $('#step-two').on('click', function () {
            $('.step-one').hide()
            $('.step-two').hide()
            $('.step-three').show()

            let resi = $('#resi').val()
            $('#v-resi').html(resi)

            let photo_model = $('#photo_model').prop('files')[0]
            if (photo_model != null) {
                loadImage(photo_model, $('#v-photo_model'))
            }

            let design = $('#design').prop('files')[0]
            if (design != null) {
                loadImage(design, $('#v-design'))
            }

            let sender_name = $('#sender_name').val()
            $('#v-sender_name').html(sender_name)

            let sender_account_number = $('#sender_account_number').val()
            $('#v-sender_account_number').html(sender_account_number)

            let evidence_of_payment = $('#evidence_of_payment').prop('files')[0]
            if (evidence_of_payment != null) {
                loadImage(evidence_of_payment, $('#v-evidence_of_payment'))
            }
        });

        $('#prev-step-three').on('click', function () {
            $('.step-one').hide()
            $('.step-two').show()
            $('.step-three').hide()
        });

        $('#photo_model').on('change', function () {
            var fileName = $(this).val();
            var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
            $(this).next('.custom-file-label').html(cleanFileName);
        });

        $('#category').on('change', function () {
            if ($(this).val() == 'Children') {
                $('#children').show()
                $('#adult').hide()
                $('#mix').hide()
            }else if($(this).val() == 'Adult'){
                $('#children').hide()
                $('#adult').show()
                $('#mix').hide()
            }else if($(this).val() == 'Mix') {
                $('#children').hide()
                $('#adult').hide()
                $('#mix').show()
            }else {
                $('#children').hide()
                $('#adult').hide()
                $('#mix').hide()
            }
        });

        $('#evidence_of_payment').on('change', function () {
            var fileName = $(this).val();
            var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
            $(this).next('.custom-file-label').html(cleanFileName);
        });

        $('#design').on('change', function () {
            var fileName = $(this).val();
            var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
            $(this).next('.custom-file-label').html(cleanFileName);
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\silg\resources\views/order/formRevision.blade.php ENDPATH**/ ?>