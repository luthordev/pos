@extends('layouts.app')

@section('header')
    <a href="{{ route('supplier.index') }}" class="text-warning">Supplier</a>
    <a href="#" class="text-grey">&nbsp;/&nbsp;</a>
    <a href="#" class="text-grey">Detail Supplier</a>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-warning">
                    Detail Supplier
                </h6>
            </div>
            <div class="card-body">
                <div>
                    <label for="name">Nama</label>
                    <p>{{ $supplier->name }}</p>
                </div>
                <div>
                    <label for="telp">Telepon</label>
                    <p>{{ $supplier->telp }}</p>
                </div>
                <div>
                    <label for="address">Alamat</label>
                    <p>{{ $supplier->address }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection