@extends('layouts.app')

@section('header')
    <a href="{{ route('bill.index') }}" class="text-warning">Tagihan</a>
    <a href="#" class="text-grey">&nbsp;/&nbsp;</a>
    <a href="#" class="text-grey">Bayar Tagihan</a>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-warning">
                    Form Bayar Tagihan
                </h6>
            </div>
            <div class="card-body">
                <form action="{{ route('bill.update', $bill->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="total_bill">Total Tagihan</label>
                        <input value="{{ $bill->total_bill }}" id="bill" class="form-control" hidden>
                        <input value="@money($bill->total_bill)" type="text" name="total_bill" id="total_bill" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="pay">Total Bayar</label>
                        <input type="number" name="pay" id="pay" class="form-control" required>
                    </div>
                    <div class="alert alert-warning" id="alert" role="alert">
                        Total bayar harus sama dengan total tagihan!
                    </div>
                    <button type="submit" id="submit" class="btn btn-warning" style="width: 100%" disabled>Bayar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    var bill = parseInt($('#bill').val())
    var button = $('#submit')
    
    $('#pay').keyup(function(e){
        var pay = e.target.value
        if(pay == bill) return button.prop("disabled",false);
        return button.prop("disabled",true);
    })
</script>
@endsection