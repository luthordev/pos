

<?php $__env->startSection('css'); ?>
    <style>
        .big-checkbox {
            width: 30px;
            height: 30px;
            border: 1px solid #c8ced3;
        }
    </style>
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
                <form action="<?php echo e(route('order.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
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
                            <input type="text" name="resi" id="resi" class="form-control" placeholder="Enter Resi Number">
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
                            <div class="input-group mb-3">
                                <select class="custom-select" name="product" id="product">
                                        <option selected>Choose...</option>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($product->id); ?>" data-price="<?php echo e($product->price); ?>" data-product="<?php echo e($product->product_name); ?>"><?php echo e($product->product_name); ?> - Rp<?php echo e($product->price); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <div class="input-group mb-3">
                                <select class="custom-select" name="category" id="category">
                                    <option selected>Choose...</option>
                                    <option value="Children">Children</option>
                                    <option value="Adult">Adult</option>
                                    <option value="Mix">Mix</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" id="children">
                            <label>Children</label>
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <input type="checkbox" name="55" class="big-checkbox">
                                    <input type="checkbox" name="54" class="big-checkbox">
                                    <input type="checkbox" name="53" class="big-checkbox">
                                    <input type="checkbox" name="52" class="big-checkbox">
                                    <input type="checkbox" name="51" class="big-checkbox">
                                </div>
                                <div class="ml-2">
                                    <input type="checkbox" name="61" class="big-checkbox">
                                    <input type="checkbox" name="62" class="big-checkbox">
                                    <input type="checkbox" name="63" class="big-checkbox">
                                    <input type="checkbox" name="64" class="big-checkbox">
                                    <input type="checkbox" name="65" class="big-checkbox">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <input type="checkbox" name="85" class="big-checkbox">
                                    <input type="checkbox" name="84" class="big-checkbox">
                                    <input type="checkbox" name="83" class="big-checkbox">
                                    <input type="checkbox" name="82" class="big-checkbox">
                                    <input type="checkbox" name="81" class="big-checkbox">
                                </div>
                                <div class="ml-2">
                                    <input type="checkbox" name="71" class="big-checkbox">
                                    <input type="checkbox" name="72" class="big-checkbox">
                                    <input type="checkbox" name="73" class="big-checkbox">
                                    <input type="checkbox" name="74" class="big-checkbox">
                                    <input type="checkbox" name="75" class="big-checkbox">
                                </div>
                            </div>
                        </div>
    
                        <div class="form-group" id="adult">
                            <label>Adult</label>
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <input type="checkbox" name="18" class="big-checkbox">
                                    <input type="checkbox" name="17" class="big-checkbox">
                                    <input type="checkbox" name="16" class="big-checkbox">
                                    <input type="checkbox" name="15" class="big-checkbox">
                                    <input type="checkbox" name="14" class="big-checkbox">
                                    <input type="checkbox" name="13" class="big-checkbox">
                                    <input type="checkbox" name="12" class="big-checkbox">
                                    <input type="checkbox" name="11" class="big-checkbox">
                                </div>
                                <div class="ml-2">
                                    <input type="checkbox" name="21" class="big-checkbox">
                                    <input type="checkbox" name="22" class="big-checkbox">
                                    <input type="checkbox" name="23" class="big-checkbox">
                                    <input type="checkbox" name="24" class="big-checkbox">
                                    <input type="checkbox" name="25" class="big-checkbox">
                                    <input type="checkbox" name="26" class="big-checkbox">
                                    <input type="checkbox" name="27" class="big-checkbox">
                                    <input type="checkbox" name="28" class="big-checkbox">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <input type="checkbox" name="48" class="big-checkbox">
                                    <input type="checkbox" name="47" class="big-checkbox">
                                    <input type="checkbox" name="46" class="big-checkbox">
                                    <input type="checkbox" name="45" class="big-checkbox">
                                    <input type="checkbox" name="44" class="big-checkbox">
                                    <input type="checkbox" name="43" class="big-checkbox">
                                    <input type="checkbox" name="42" class="big-checkbox">
                                    <input type="checkbox" name="41" class="big-checkbox">
                                </div>
                                <div class="ml-2">
                                    <input type="checkbox" name="31" class="big-checkbox">
                                    <input type="checkbox" name="32" class="big-checkbox">
                                    <input type="checkbox" name="33" class="big-checkbox">
                                    <input type="checkbox" name="34" class="big-checkbox">
                                    <input type="checkbox" name="35" class="big-checkbox">
                                    <input type="checkbox" name="36" class="big-checkbox">
                                    <input type="checkbox" name="37" class="big-checkbox">
                                    <input type="checkbox" name="38" class="big-checkbox">
                                </div>
                            </div>
                        </div>
    
                        <div class="form-group" id="mix">
                            <label>Mix</label>
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <input type="checkbox" name="18" class="big-checkbox">
                                    <input type="checkbox" name="17" class="big-checkbox">
                                    <input type="checkbox" name="16" class="big-checkbox">
                                    <input type="checkbox" name="15" class="big-checkbox">
                                    <input type="checkbox" name="14" class="big-checkbox">
                                    <input type="checkbox" name="13" class="big-checkbox">
                                    <input type="checkbox" name="12" class="big-checkbox">
                                    <input type="checkbox" name="11" class="big-checkbox">
                                </div>
                                <div class="ml-2">
                                    <input type="checkbox" name="21" class="big-checkbox">
                                    <input type="checkbox" name="22" class="big-checkbox">
                                    <input type="checkbox" name="23" class="big-checkbox">
                                    <input type="checkbox" name="24" class="big-checkbox">
                                    <input type="checkbox" name="25" class="big-checkbox">
                                    <input type="checkbox" name="26" class="big-checkbox">
                                    <input type="checkbox" name="27" class="big-checkbox">
                                    <input type="checkbox" name="28" class="big-checkbox">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <input type="checkbox" name="55" class="big-checkbox">
                                    <input type="checkbox" name="54" class="big-checkbox">
                                    <input type="checkbox" name="53" class="big-checkbox">
                                    <input type="checkbox" name="52" class="big-checkbox">
                                    <input type="checkbox" name="51" class="big-checkbox">
                                </div>
                                <div class="ml-2">
                                    <input type="checkbox" name="61" class="big-checkbox">
                                    <input type="checkbox" name="62" class="big-checkbox">
                                    <input type="checkbox" name="63" class="big-checkbox">
                                    <input type="checkbox" name="64" class="big-checkbox">
                                    <input type="checkbox" name="65" class="big-checkbox">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <input type="checkbox" name="85" class="big-checkbox">
                                    <input type="checkbox" name="84" class="big-checkbox">
                                    <input type="checkbox" name="83" class="big-checkbox">
                                    <input type="checkbox" name="82" class="big-checkbox">
                                    <input type="checkbox" name="81" class="big-checkbox">
                                </div>
                                <div class="ml-2">
                                    <input type="checkbox" name="71" class="big-checkbox">
                                    <input type="checkbox" name="72" class="big-checkbox">
                                    <input type="checkbox" name="73" class="big-checkbox">
                                    <input type="checkbox" name="74" class="big-checkbox">
                                    <input type="checkbox" name="75" class="big-checkbox">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="mr-2">
                                    <input type="checkbox" name="48" class="big-checkbox">
                                    <input type="checkbox" name="47" class="big-checkbox">
                                    <input type="checkbox" name="46" class="big-checkbox">
                                    <input type="checkbox" name="45" class="big-checkbox">
                                    <input type="checkbox" name="44" class="big-checkbox">
                                    <input type="checkbox" name="43" class="big-checkbox">
                                    <input type="checkbox" name="42" class="big-checkbox">
                                    <input type="checkbox" name="41" class="big-checkbox">
                                </div>
                                <div class="ml-2">
                                    <input type="checkbox" name="31" class="big-checkbox">
                                    <input type="checkbox" name="32" class="big-checkbox">
                                    <input type="checkbox" name="33" class="big-checkbox">
                                    <input type="checkbox" name="34" class="big-checkbox">
                                    <input type="checkbox" name="35" class="big-checkbox">
                                    <input type="checkbox" name="36" class="big-checkbox">
                                    <input type="checkbox" name="37" class="big-checkbox">
                                    <input type="checkbox" name="38" class="big-checkbox">
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
                            <label for="payment">Payment Method</label>
                            <div class="input-group mb-3">
                                <select class="custom-select" name="payment" id="payment">
                                    <option selected>Choose...</option>
                                    <option value="1">Directly</option>
                                    <option value="2">Installment</option>
                                    <option value="3">Later</option>
                                </select>
                            </div>
                            <div id="payment_method">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <p class="m-0">Panduan</p>
                                        <p class="m-0">BCA - 05128090 A.N Nama Nama</p>
                                        <p class="m-0">BRI - 2323232 A.N Nama Nama</p>
                                        <p class="m-0">MANDIRI - 112313090 A.N Nama Nama</p>
                                        <hr>
                                        <p class="m-0">1. Transfer sebesar <span id="tfbill"></span> ke salah satu rekening diatas.</p>
                                        <p class="m-0">2. Screenshot/foto bukti transfer.</p>
                                        <p class="m-0">3. Isi formulir dibawah.</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sender_name">Sender Name</label>
                                    <input type="text" name="sender_name" id="sender_name" class="form-control" placeholder="Enter Sender Name">
                                </div>
                                <div class="form-group">
                                    <label for="total_bill">Bill</label>
                                    <input type="text" name="total_bill" id="total_bill" class="form-control" value="" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="sender_account_number">Sender Account Number</label>
                                    <input type="text" name="sender_account_number" id="sender_account_number" class="form-control" placeholder="Enter Sender Account Number">
                                </div>
                                <div class="form-group">
                                    <label for="amount_of_transfer">Amount Of Transfer (Rp)</label>
                                    <input type="number" name="amount_of_transfer" id="amount_of_transfer" class="form-control" placeholder="Enter Amount Of Transfer">
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
                            <p id="v-product"></p>
                        </div>
                        <input type="hidden" name="price" id="v-price" value="" required>
                        <div>
                            <label>Category</label>
                            <p id="v-category"></p>
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

            $('.step-two').hide()
            $('.step-three').hide()
        });

        $('#step-one').on('click', function () {
            $('.step-one').hide()
            $('.step-two').show()
            $('.step-three').hide()

            let qty = document.querySelectorAll('input[type=checkbox]:checked').length;
            let price = $('#product option:selected').attr('data-price')
            let totalPrice = parseInt(price) * parseInt(qty);
            $('#total_bill').val(formater.format(totalPrice))
            $('#tfbill').text(formater.format(totalPrice))
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
            loadImage(photo_model, $('#v-photo_model'))

            let product = $('#product option:selected').text()
            $('#v-product').html(product)

            let category = $('#category option:selected').text()
            $('#v-category').html(category)

            let qty = document.querySelectorAll('input[type=checkbox]:checked').length;

            let price = $('#product option:selected').attr('data-price')
            $('#v-price').val(price)

            let design = $('#design').prop('files')[0]
            loadImage(design, $('#v-design'))

            let sender_name = $('#sender_name').val()
            $('#v-sender_name').html(sender_name)

            let sender_account_number = $('#sender_account_number').val()
            $('#v-sender_account_number').html(sender_account_number)

            let evidence_of_payment = $('#evidence_of_payment').prop('files')[0]
            loadImage(evidence_of_payment, $('#v-evidence_of_payment'))
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

        $(document).ready(function (){
            $('#payment_method').hide()
        });

        $('#evidence_of_payment').on('change', function () {
            var fileName = $(this).val();
            var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
            $(this).next('.custom-file-label').html(cleanFileName);
        });

        $('#payment').on('change', function () {
            if ($(this).val() == 1) {
                $('#payment_method').show()
            }else if($(this).val() == 2){
                $('#payment_method').show()
            }else if($(this).val() == 3) {
                $('#payment_method').hide()
            }else {
                $('#payment_method').hide()
            }
        });

        $('#design').on('change', function () {
            var fileName = $(this).val();
            var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
            $(this).next('.custom-file-label').html(cleanFileName);
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\silg\resources\views/order/form.blade.php ENDPATH**/ ?>