<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.6.0/dt-1.11.3/datatables.min.css"/>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/datatables.min.css')); ?>">

    <script src="<?php echo e(asset('js/app.js')); ?>"></script>

    <?php echo $__env->yieldContent('css'); ?>
    
</head>

<body>

    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="mb-0">POS</h3>
                <p class="text-white mb-0">Point Of Sales</p>
            </div>

            <ul class="list-unstyled components">
                <li class="<?php echo e(request()->is('sale*') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('sale.index')); ?>">Penjualan</a>
                </li>
                <li class="<?php echo e(request()->is('product*') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('product.index')); ?>">Produk</a>
                </li>
                <li class="<?php echo e(request()->is('supplier*') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('supplier.index')); ?>">Supplier</a>
                </li>
                <li class="<?php echo e(request()->is('bills*') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('bill.index')); ?>">Tagihan</a>
                </li>
                <li class="<?php echo e(request()->is('report*') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('report.index')); ?>">Laporan</a>
                </li>
            </ul>
        </nav>


        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="ml-2"><?php echo $__env->yieldContent('header'); ?></div>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <a href="#" class="btn btn-white btn-sm">Logout</a>
                        </ul>
                    </div>
                </div>
            </nav>

            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.6.0/dt-1.11.3/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        var formater = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' })
    </script>

    <?php echo $__env->yieldContent('js'); ?>

    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });

    </script>
    </body>

</html><?php /**PATH C:\laragon\www\pos\resources\views/layouts/app.blade.php ENDPATH**/ ?>