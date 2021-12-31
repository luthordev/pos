@extends('layouts.app')

@section('css')
<style>
    .hide {
        visibility: hidden;
        display: none;
    }
</style>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-warning">
                    Form Penjualan
                </h6>
            </div>
            <div class="card-body">
                <form>
                    <input type="text" name="id" id="id" class="form-control" value="" hidden required>
                    <div class="form-group">
                        <label for="barcode">Barcode</label>
                        <input type="text" name="barcode" id="barcode" class="form-control" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="product">Produk</label>
                        <select name="product" id="product" class="form-control">
                            <option disabled selected>-- PILIH PRODUK --</option>
                            @foreach($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Harga</label>
                        <input type="number" name="price" id="price" class="form-control" readonly required>
                    </div>
                    <div class="form-group">
                        <label for="qty">Qty</label>
                        <input type="number" name="qty" id="qty" class="form-control" required>
                    </div>
                    <div class="form-group hide" id="fdiscount">
                        <label for="discount">Diskon (Rp)</label>
                        <input type="number" name="discount" id="discount" class="form-control" value="0" required>
                    </div>
                    
                    <button id="add" class="btn btn-warning" style="width: 100%">Tambah Ke Keranjang</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-12 col-sm-12">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @endforeach
        @endif

        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-warning">
                    Keranjang
                </h6>
            </div>
            <div class="card-body">
                <form action="{{ route('sale.submit') }}" method="post">
                @csrf
                    <table class="table">
                        <thead>
                            <th>Produk</th>
                            <th>Qty</th>
                            <th>Harga</th>
                            <th>Total Harga</th>
                            <th>Diskon</th>
                            <th></th>
                        </thead>
                        <tbody id="cart">
                        </tbody>
                    </table>
                    <div class="line">
                        <div class="pt-3">
                            <span>Total Diskon <b id="total_discount">Rp 0</b></span><br>
                            <span>Tagihan <b id="bill">Rp 0</b></span><br>
                            <span>Total Tagihan <b id="total_bill">Rp 0</b></span>
                            <button type="submit" href="#" class="btn btn-warning float-right">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    const products = {!! $products !!}
    let iid = $('#id')
    let ibarcode = $('#barcode')
    let iproduct = $('#product')
    let iprice = $('#price')
    let iqty = $('#qty')
    let idiscount = $('#discount')

    let total_discount = 0;
    let bill = 0;
    let total_bill = 0;

    ibarcode.keyup(function(e){
        let value = e.target.value
        
        if(value.length >= 11){
            if(JSON.stringify(products).includes(`"barcode":"${value}"`)) setItem(products.find(({barcode})=> barcode == value))
            else clearItem();
        }
    })

    iqty.keyup(function(e){
        let value = e.target.value

        if(value >= 5) $('#fdiscount').removeClass('hide');
        else{
            $('#fdiscount').addClass('hide');
            idiscount.val(0)
        }
    })

    iqty.change(function(e){
        let value = e.target.value

        if(value >= 5) $('#fdiscount').removeClass('hide');
        else{
            $('#fdiscount').addClass('hide');
            idiscount.val(0)
        }
    })

    iproduct.change(function(e) {
        let value = e.target.value;
        setItem(products.find(({id})=> id == value))
    })

    $('#add').click(function(e){
        e.preventDefault()

        if(iid.val().length > 0 && iqty.val() > 0) addToCart(products.find(({id})=> id == iid.val()), idiscount.val());
        else alert('Pilih produk & isi qty terlebih dahulu!');
    })

    const setItem = (product) => {
        iid.val(product.id)
        ibarcode.val(product.barcode)
        iproduct.val(product.id)
        iprice.val(product.price)
        iqty.focus()
    }

    const clearItem = () => {
        iid.val(null)
        ibarcode.val(null)
        iproduct.val(null)
        iprice.val(null)
        iqty.val(null)
        idiscount.val(0)
        $('#fdiscount').addClass('hide');
    }

    const addToCart = (product, discount) => {
        if(iqty.val() <= product.qty){
            $('#cart').append("<tr>" +
                fieldCart(product.name, 'name', product.id) + 
                fieldCart(iqty.val(), 'qty') +
                fieldCart(product.price, 'price') +
                fieldCart(product.price * iqty.val(), 'total_price') +
                fieldCart(discount, 'discount') +
                `<td><div class='d-flex'><a href='#' onclick='deleteRow(${product.price * iqty.val()}, ${discount})' class='mr-2 btn btn-danger'>x</a></div><td>` +
                '</tr>'
            )
            bill += product.price * iqty.val()
            total_discount += parseInt(discount)
            total_bill = bill - total_discount
            refreshPrice()
            clearItem()
            ibarcode.focus()
        } else alert(`Stok produk tersisa hanya ${product.qty} !`)
    }

    const fieldCart = (value, name, id = null) => {
        if(id != null) return `<td><input name="id[]" type="text" class="form-control item-cart-field" hidden value="${id}"><input name="${name}[]" type="text" class="form-control item-cart-field" readonly value="${value}"></td>`;
        return `<td><input name="${name}[]" type="text" class="form-control item-cart-field ${name}" readonly value="${value}"></td>`;
    }

    const refreshPrice = () => {
        $('#total_discount').html("Rp " + new Intl.NumberFormat('id-ID').format(total_discount))
        $('#bill').html("Rp " + new Intl.NumberFormat('id-ID').format(bill))
        $('#total_bill').html("Rp " + new Intl.NumberFormat('id-ID').format(total_bill))
    }

    const deleteRow = (price, discount) => {
        bill -= price
        total_bill -= price-discount
        total_discount -= discount
        refreshPrice();
        $(event.currentTarget).closest('tr').remove()
    }
</script>
@endsection