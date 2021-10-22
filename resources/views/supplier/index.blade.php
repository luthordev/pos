@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-warning">
            Supplier
        </h6>
    </div>
    <div class="card-body">
        <a href="{{ route('supplier.create') }}" class="btn btn-warning mb-3">Tambah Supplier</a>
        <table class="table">
            <thead>
                <th>No</th>
                <th>Nama</th>
                <th>No Telepon</th>
                <th>Alamat</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($suppliers as $supplier)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $supplier->name }}</td>
                    <td>{{ $supplier->telp }}</td>
                    <td>{{ $supplier->address }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('supplier.show', $supplier->id) }}" class="mr-2 btn btn-primary">Detail</a>
                            <a href="{{ route('supplier.edit', $supplier->id) }}" class="mr-2 btn btn-success">Edit</a>
                            <form action="{{ route('supplier.destroy', $supplier->id) }}" method="POST">
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