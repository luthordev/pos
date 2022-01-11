@extends('layouts.app')

@section('content')
<div class="card mb-3">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-warning">
            Buat Laporan
        </h6>
    </div>
    <div class="card-body">
        <div class="row">
            <form action="{{ route('report.custom') }}" method="POST">
                @csrf
                <div class="col">
                    <div class="form-group">
                        <label for="from">Dari</label>
                        <input type="date" name="from" id="from" class="form-control" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="to">Sampai</label>
                        <input type="date" name="to" id="to" class="form-control" required>
                    </div>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-warning" style="width: 100%">Buat Laporan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-warning">
            Laporan Hari Ini
        </h6>
    </div>
    <div class="card-body">
        <a href="{{ route('report.today') }}" class="btn btn-success mb-3">Export Laporan Hari Ini</a>
        <table class="table">
            <thead>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama Barang</th>
                <th>Harga Jual</th>
                <th>Terjual</th>
                <th>Pemasukkan</th>
            </thead>
            <tbody>
                @foreach($sales as $sale)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>@date($sale->date)</td>
                    <td>{{ $sale->product->name }}</td>
                    <td>Rp @money($sale->product->price)</td>
                    <td>{{ $sale->qty }}</td>
                    <td>Rp @money($sale->qty*$sale->product->price)</td>
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
    $('.table').DataTable({
        searching: false
    });
} );
</script>
@endsection