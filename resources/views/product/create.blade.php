@extends('layouts.app')

@section('header')
    <a href="{{ route('product.index') }}" class="text-warning">Produk</a>
    <a href="#" class="text-grey">&nbsp;/&nbsp;</a>
    <a href="#" class="text-grey">Tambah Produk Baru</a>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-warning">
                    Form Produk
                </h6>
            </div>
            <div class="card-body">
                <form action="{{ route('product.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="purchase_price">Harga Beli</label>
                        <input type="number" name="purchase_price" id="purchase_price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Harga Jual</label>
                        <input type="number" name="price" id="price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="qty">Qty</label>
                        <input type="number" name="qty" id="qty" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="supplier">Supplier</label>
                        <select name="supplier" id="supplier" class="form-control">
                            <option disabled selected>-- PILIH SUPPLIER --</option>
                            @foreach($suppliers as $supplier)
                            <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="payment">Pembayaran</label>
                        <select name="payment" id="payment" class="form-control">
                            <option disabled selected>-- PILIH METODE PEMBAYARAN --</option>
                            <option value="cash">Cash</option>
                            <option value="credit">Kredit</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-warning" style="width: 100%">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-12">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection