<?php

namespace App\Http\Controllers;

use App\Models\index_table;
use App\Models\Maintenance;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServeController extends Controller
{
    public function index()
    {
        return view('serve.index');
    }

    public function create()
    {

        $serves = DB::table('maintenances')->latest()->paginate(10);
        return view('serve.create', compact('serves'));
    }

    public function form()
    {
        $serves = DB::table('transfers')->latest()->paginate(10);
        return view('serve.form', compact('serves'));
    }
//    public function insert(){
//        $serves = DB::table('index')->latest()->paginate(10);
//        return view('index.store', compact('serves'));
//    }
    public function finalform()
    {
        $serves = index_table::all();
        return view('serve.finalform', compact('serves'));

    }

    public function delete($id)
    {
        DB::table('maintenances')->where('id', $id)->delete();
        return redirect()->route('serve');
    }

//    public function deletealltruncate(){
//        DB::table('serve')->truncate();
//        return redirect()->route('serve');
//    }

    public function show($id)
    {
        $maintenanceReq = Maintenance::findOrFail($id);
        return view('serve.show', compact('maintenanceReq'));
    }

    public function showform($id)
    {
        $transfer = transfer::findOrFail($id);
        return view('serve.showform', compact('transfer'));
    }

//    public function showfinalform($id){
//        $maintenanceReq = Maintenance::findOrFail($id);
//        return view('serve.showfinalform',compact('maintenanceReq'));
//    }

    public function search(Request $request)
    {
        $request = $request->all();
        $start_date=$request['start_date'];
        $end_date=$request['end_date'];
        $maintenances= DB::table('maintenances')->where('created_at','<',$end_date)->where('created_at','>' , $start_date)->get();
        $index= DB::table('index')->where('created_at','<',$end_date)->where('created_at','>' , $start_date)->get();
        $transfers=  DB::table('transfers')->where('created_at','<',$end_date)->where('created_at','>' , $start_date)->get();
//            dd($index);
        return view('serve.search', compact('maintenances','index', 'transfers'));
    }

}
