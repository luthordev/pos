@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-warning">
            Supplier
        </h6>
    </div>
    <div class="card-body">
        <a href="{{ route('suppliers.create') }}" class="btn btn-warning mb-3">Tambah Supplier</a>
        <table class="table">
            <thead>
                <th>No</th>
                <th>Nama</th>
                <th>No Telepon</th>
                <th>Alamat</th>
                <th>Action</th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Berkah Jaya</td>
                    <td>08561216751</td>
                    <td>Cijambe, Subang</td>
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