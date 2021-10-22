@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-warning">
            Tagihan
        </h6>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Tanggal</th>
                <th>Supplier</th>
                <th>Jumlah Tagihan</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($bills as $bill)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>@date($bill->date)</td>
                    <td>{{ $bill->product->supplier->name }}</td>
                    <td>Rp @money($bill->total_bill)</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('bill.show', $bill->id) }}" class="mr-2 btn btn-primary">Detail</a>
                            <a href="{{ route('bill.edit', $bill->id) }}" class="mr-2 btn btn-success">Bayar</a>
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