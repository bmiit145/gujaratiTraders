<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cupan_code;
use DB;

class CupanController extends Controller
{
    public function index(Request $request)
    {
        $coupan = DB::table('cupan_codes')->get();
          return view('Admin.CupanCode.cupan', compact('coupan'));
    }

    public function ImportCoupan(Request $request)
    {
       $file = $request->file('file');
       $fileContents = file($file->getPathname());
   
       foreach ($fileContents as $line) {
           $data = str_getcsv($line);
   
           cupan_code::create([
               'cupan_code' => $data[1],
           ]);
       }
   
       return redirect()->back()->with('success', 'CSV file imported successfully.');
    }

    public function provide_coupan(Request $request)
    {
        $id = $request->id;
        // dd($id);
        $data = cupan_code::find($id);
        if($data->is_share == 0){
            $data->is_share = 1;
        }else{
            $data->is_share = 0;
        }
        $data->update();
        return back();
    }

    public function coupan_update(Request $request)
    {
        $id = $request->id;
        $data = cupan_code::find($id);
        $data->cupan_code = $request->cupan_code;
        $data->discount_amount = $request->discount_amount;
        $data->update();
        return back();
    }

    public function coupan_code_delete(Request $request)
    {
        $id = $request->id;
        $data = cupan_code::find($id);
        $data->delete();
        return back();
    }
}
