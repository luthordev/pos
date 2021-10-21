@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-warning">
            Produk
        </h6>
    </div>
    <div class="card-body">
        <a href="{{ route('products.create') }}" class="btn btn-warning mb-3">Tambah Produk</a>
        <table class="table">
            <thead>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Supplier</th>
                <th>Action</th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Item 1</td>
                    <td>Rp 10.000</td>
                    <td>97</td>
                    <td>Berkah Jaya</td>
                    <td>
                        <div class="d-flex">
                            <a href="#" class="mr-2 btn btn-primary">Detail</a>
                            <a href="#" class="mr-2 btn btn-success">Edit</a>
                            <form action="#" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="mr-2 btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Item 2</td>
                    <td>Rp 15.000</td>
                    <td>66</td>
                    <td>Berkah Jaya</td>
                    <td>
                        <div class="d-flex">
                            <a href="#" class="mr-2 btn btn-primary">Detail</a>
                            <a href="#" class="mr-2 btn btn-success">Edit</a>
                            <form action="#" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="mr-2 btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection