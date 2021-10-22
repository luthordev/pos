@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-warning">
            Produk
        </h6>
    </div>
    <div class="card-body">
        <a href="{{ route('product.create') }}" class="btn btn-warning mb-3">Tambah Produk</a>
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
                @foreach($products as $product)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $product->name }}</td>
                    <td>Rp @money($product->price)</td>
                    <td>{{ $product->qty }}</td>
                    <td>{{ $product->supplier->name }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('product.show', $product->id) }}" class="mr-2 btn btn-primary">Detail</a>
                            <a href="{{ route('product.edit', $product->id) }}" class="mr-2 btn btn-success">Edit</a>
                            <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="mr-2 btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
    $('.table').DataTable();
} );
</script>
@endsection