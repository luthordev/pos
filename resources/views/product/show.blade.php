@extends('layouts.app')

@section('header')
    <a href="{{ route('product.index') }}" class="text-warning">Produk</a>
    <a href="#" class="text-grey">&nbsp;/&nbsp;</a>
    <a href="#" class="text-grey">Detail Produk</a>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-warning">
                    Detail Produk
                </h6>
            </div>
            <div class="card-body">
                <div>
                    <label for="barcode">Barcode</label>
                    <p><img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($product->barcode, 'C128', 3, 40, array(0,0,0), true) }}" width="250" height="50"/></p>
                   
                </div>
                <div>
                    <label for="name">Nama</label>
                    <p>{{ $product->name }}</p>
                </div>
                <div>
                    <label for="purchase_price">Harga Beli</label>
                    <p>Rp @money($product->purchase_price)</p>
                </div>
                <div>
                    <label for="price">Harga Jual</label>
                    <p>Rp @money($product->price)</p>
                </div>
                <div>
                    <label for="qty">Qty</label>
                    <p>{{ $product->qty }}</p>
                </div>
                <div>
                    <label for="supplier">Supplier</label>
                    <p>{{ $product->supplier->name }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection