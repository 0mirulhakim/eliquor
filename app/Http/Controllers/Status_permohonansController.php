<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Status_permohonans;
use App\Permohonan;
use Auth;
class Status_permohonansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('permohonan')
      
       ->join('status_permohonans', 'status_permohonans.permohonan_id', '=', 'permohonan.id')->where('nama_staff', '=', Auth::user()->name )
       ->select('status_permohonans.status','status_permohonans.permohonan_id','permohonan.nama','status_permohonans.id', 'status_permohonans.catatan', 'status_permohonans.nama_staff', 'status_permohonans.created_at')
       ->get();
        

  return view("statuses.index", ['posts' => $posts]);

}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post=new Status_permohonans;
        $post->permohonan_id=$request->input('permohonan_id');
        $post->nama_staff=$request->input('nama_staff');
        $post->catatan=$request->input('catatan');
        $post->status=$request->input('status');
        
        $post->save(); 

        //update table
        $permohonan=new Permohonan;
        $permohonan=Permohonan::find($request->permohonan_id);
        //$permohonan->id=$request->input('permohonan_id');
        $permohonan->status_permohonan_id=$request->status;
        $permohonan->catatan=$request->catatan;
        $permohonan->tarikh1=$request->tarikh;
        $permohonan->save();
        return redirect('statuses')->with('success','Data telah dikemaskini.');
        
      
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Status_permohonans::find($id);
        return view ('statuses.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post= Status_permohonan::find($id);
        return view ('permohonan.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
