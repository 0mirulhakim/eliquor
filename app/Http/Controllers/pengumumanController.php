<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use DB;

use App\Homepage;
class pengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       // $data = array('name'=>"Staff e-liquor ", "body" => "Permohonan baru telah masuk");
            
       // Mail::send('emails.mail', $data, function($message) {
          //  $message->to('eliquorklang@selangor.gov.my', 'staff')
              //      ->subject('Permohonan Baru Lesen ');
         //   $message->from('eliquorklang@google.com','e-liquor pdtk');
     //   });
        $posts = DB::select('SELECT * FROM homepages where id="1"');
        return view('pengumuman')->with('posts',$posts);;
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
        $post=new Homepage;
       // $post=Homepage::find($id);
        $post=Homepage::find($request->input('id'));
        $post->data=$request->input('data');
        $post->data1=$request->input('data1');
        $post->data2=$request->input('data2');
        $post->save(); 
        return redirect('pengumuman')->with('success','Data telah dikemaskini.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
