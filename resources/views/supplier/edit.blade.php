@extends('layouts.app')

@section('header')
    <a href="{{ route('supplier.index') }}" class="text-warning">Supplier</a>
    <a href="#" class="text-grey">&nbsp;/&nbsp;</a>
    <a href="#" class="text-grey">Edit Supplier</a>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-warning">
                    Form Edit Supplier
                </h6>
            </div>
            <div class="card-body">
                <form action="{{ route('supplier.update', $supplier->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input value="{{ $supplier->name }}" type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="telp">Telepon</label>
                        <input value="{{ $supplier->telp }}" type="number" name="telp" id="telp" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <textarea name="address" id="address" rows="4" class="form-control" required>{{ $supplier->address }}</textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-warning" style="width: 100%">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection