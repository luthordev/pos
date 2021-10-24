<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Bill;
use App\Models\OrderHistory;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = Supplier::all();

        return view('product.create', ['suppliers' => $suppliers]);
    }

    public function add()
    {
        $products = Product::all();
        $suppliers = Supplier::all();

        return view('product.add', ['products' => $products, 'suppliers' => $suppliers]);
    }

    public function addStok(Product $product, Request $request){
        $request->validate([
            'qty' => 'required',
        ]);

        $data = $request->all();

        $product->update([
            'qty' => $data['qty'],
        ]);
        $product->save();

        $orderHistory = new OrderHistory([
            'product_id' => $product->id,
            'supplier_id' => $product->supplier->id,
            'qty' => $data['qty'],
            'total_price' => $product->purchase_price * $data['qty'],
            'payment' => $data['payment']
        ]);
        $orderHistory->save();
        
        return redirect()->route('product.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'purchase_price' => 'required',
            'price' => 'required',
            'qty' => 'required',
            'supplier' => 'required',
            'payment' => 'required',
        ]);

        $data = $request->all();

        $product = new Product([
            'barcode' => rand(000000000001, 999999999999),
            'name' => $data['name'],
            'purchase_price' => $data['purchase_price'],
            'price' => $data['price'],
            'qty' => $data['qty'],
            'supplier_id' => $data['supplier'],
        ]);
        $product->save();

        $latestProduct = Product::latest()->select('id', 'purchase_price')->first();

        $orderHistory = new OrderHistory([
            'product_id' => $latestProduct->id,
            'supplier_id' => $latestProduct->supplier->id,
            'qty' => $data['qty'],
            'total_price' => $latestProduct->purchase_price * $data['qty'],
            'payment' => $data['payment']
        ]);
        $orderHistory->save();

        if($data['payment'] == 'credit'){
            $bill = new Bill([
                'invoice' => 'INV/BILL/' . date('Ymd') . '/' . strtoupper(Str::random(10)) . rand(001, 999),
                'date' => date('Y-m-d H:m:s'),
                'product_id' => $latestProduct->id,
                'qty' => $data['qty'],
                'total_bill' => $latestProduct->purchase_price * $data['qty'],
                'status' => 'unpaid'
            ]);
            $bill->save();
        }
        
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Product $product, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $data = $request->all();

        $product->update([
            'name' => $data['name'],
            'price' => $data['price'],
        ]);
        $product->save();
        
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        $bill = Bill::where('product_id', '=', $product->id)->first();
        if($bill) $bill->delete();
        

        return redirect()->back();
    }
}
