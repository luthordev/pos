@extends('layouts.app')

@section('header')
    <a href="{{ route('bill.index') }}" class="text-warning">Tagihan</a>
    <a href="#" class="text-grey">&nbsp;/&nbsp;</a>
    <a href="#" class="text-grey">Detail Tagihan</a>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-warning">
                    Detail Tagihan
                </h6>
            </div>
            <div class="card-body">
                <div>
                    <label for="invoice">Invoice</label>
                    <p>{{ $bill->invoice }}</p>
                </div>
                <div>
                    <label for="date">Tanggal</label>
                    <p>@date($bill->date)</p>
                </div>
                <div>
                    <label for="supplier">Supplier</label>
                    <p>{{ $bill->product->supplier->name }}</p>
                </div>
                <div>
                    <label for="produk">Produk</label>
                    <p>{{ $bill->product->name }}</p>
                </div>
                <div>
                    <label for="qty">Qty</label>
                    <p>{{ $bill->qty }}</p>
                </div>
                <div>
                    <label for="supplier">Jumlah Tagihan</label>
                    <p>Rp @money($bill->total_bill)</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection