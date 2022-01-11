<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.6.0/dt-1.11.3/datatables.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">

    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body style="background-color: #FFF !important">
    <center>
        <h5 class="mt-4">Laporan Penjualan Toko Abi & Umi</h4>
    </center>
    
    <table class="table table-bordered mt-4">
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
</body>
</html>
