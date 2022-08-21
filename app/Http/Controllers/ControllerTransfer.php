<?php

namespace App\Http\Controllers;
use App\Models\Transfer;

use Illuminate\Http\Request;

class ControllerTransfer extends Controller{
    //
    public function store(Request $request){

        $transfer = new Transfer();
        $transfer->transformer_adjective = $request->input('transformer_adjective');
        $transfer->Son = $request->input('son');
        $transfer->problem_description = $request->input('problem_description');
        $transfer->notes = $request->input('notes');
        $transfer->procedures = $request->input('procedures');
        $transfer->transfer_type = 'تحويل حالة';
        $isSaved = $transfer->save();
        return redirect()->back();


    }
}



