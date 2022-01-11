<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use PDF;

class ReportController extends Controller
{
    public function index(){
        $sales = Sale::where('date', '>=', date("Y-m-d 00:00:00"))->get();
        // return $sales;
        return view('report.index', ["sales" => $sales]);
    }

    public function today(){
        $sales = Sale::where('date', '>=', date("Y-m-d 00:00:00"))->get();

        return view('report.pdf', ['sales' => $sales]);
        // $pdf = PDF::loadview('report.pdf', ['sales' => $sales]);
	    // return $pdf->download('laporan-penjualan.pdf');
    }

    public function custom(Request $request){
        $data = $request;
        $sales = Sale::where('date', '>=', $data['from'])->where('date', '<=', $data['to'])->get();
        
        return view('report.pdf', ['sales' => $sales]);
    }
}
