<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CustomSearchController extends Controller
{
    function index(Request $request)
    {
     if(request()->ajax())
     {
      if(!empty($request->filter_tahun))
      {
        $data = DB::table('permohonan')
        ->join('status', 'status.id', '=', 'permohonan.status_permohonan_id')
        ->join('jenis_permohonan', 'jenis_permohonan.id', '=', 'permohonan.jenis_permohonan')
        ->select('status.status_nama','permohonan.*','jenis_permohonan.jenis_permohonan_nama')         
         ->whereYear('permohonan.tarikh', $request->filter_tahun)
         ->Where('permohonan.jenis_permohonan', $request->filter_status)
         ->get();
      }
      else
      {
        $data = DB::table('permohonan')
        ->whereYear('tarikh',date('Y'))
        ->join('status', 'status.id', '=', 'permohonan.status_permohonan_id')
        ->join('jenis_permohonan', 'jenis_permohonan.id', '=', 'permohonan.jenis_permohonan')
        ->select('status.status_nama','permohonan.*','jenis_permohonan.jenis_permohonan_nama')       
        ->get();
      }
      return datatables()->of($data)->make(true);
      
     }
     $status_name = DB::table('jenis_permohonan')
          ->select('id','jenis_permohonan_nama')  
          ->get();
     return view('custom_search', compact('status_name'));
    }
}

?>