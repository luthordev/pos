<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Support\Facades\Http;


class SaleController extends Controller
{
    public function index(){
        $products = Product::where('qty', '>', 0)->get();

        return view("sale.index", ["products" => $products]);
    }

    public function submit(Request $request){
        $items = $request->all();
        $itemsnya = [];
        $invoice = 'INV/' . date('Ymd') . '/' . strtoupper(Str::random(10)) . rand(001, 999);
        for($i=0; $i < count($items['name']); $i++){
            // update stock
            $product = Product::where('id', '=', $items['id'][$i])->first();
            $product->update([
                'qty' => $product->qty-$items['qty'][$i],
            ]);
            $product->save();

            $sale = new Sale([
                'date' => date('Y-m-d H:m:s'),
                'invoice' => $invoice,
                'product_id' => $items['id'][$i],
                'qty' => $items['qty'][$i],
                'discount' => $items['discount'][$i]
            ]);
                        
            $sale->save();
        }

        $response = Http::post('localhost:3000/print', [
            'items' => $items,
        ]);

        return redirect()->route('sale.index');

    }
}
