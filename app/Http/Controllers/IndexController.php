<?php

namespace App\Http\Controllers;

use App\Models\index_table;
use Illuminate\Http\Request;

class IndexController extends Controller
{
//    public  function index(){
//
//        $serves = index::all();
//        return view('index.store');
//
//    }
    public function store(Request $request){

        $index = new index_table();
        $index->item = $request->input('item');
        $index->Unit = $request->input('unit');
        $index->Quantity = $request->input('quantity');
        $index->the_value = $request->input('the_value');
        $index->purpose_of_purchase = $request->input('purpose_of_purchase');
//        $index->index_type = 'الصفحة الرئيسية';
//        $isSaved = $index->save();
//        return redirect()->back();


        for($i=0 ; $i<count($request['item']) ; $i++){
            $item=$request['item'][$i];
            $Unit=$request['unit'][$i];
            $Quantity=$request['quantity'][$i];
            $the_value=$request['the_value'][$i];
            $purpose_of_purchase=$request['purpose_of_purchase'][$i];

            $index->create([
                'item'=>$item,
                'Unit'=>$Unit,
                'Quantity'=>$Quantity,
                'the_value'=>$the_value,
                'purpose_of_purchase'=>$purpose_of_purchase,
                'order_type'=>'طلب صرف مواد'
            ]);
            return redirect()->back();

    }
    }
}
