<?php

namespace App\Http\Controllers;
use DB;
use App\Permohonan;
use App\Status_permohonans;
use Illuminate\Http\Request;
use Mail;
class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::select('SELECT * FROM permohonan where status_permohonan_id="1" AND jenis_permohonan="1"');
        return view('permohonan.index')->with('posts',$posts);
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
        $this->validate($request, [
            'jenis_permohonan' => 'required',
            'kelas_permohonan' => 'required',
            'nama' => 'required',
            'no_ic' =>[ 'required_without:passport1'],
            'passport1'=> 'required_without:no_ic',
            'alamat' => 'required',
            'no_phone' => 'required',
            'nama_syarikat' => 'required',
            'alamat_premis' => 'required',
            'no_perakuan' => 'required',
            
            'tarikh' => 'required',
            'setuju' => 'required',
            'passport' => 'image|required|max:1999',
            'jenayah' => 'required',
            'iklan_5_minggu' => 'required',
            'peraturan' => 'required',
        ]);
        
        //Handle File Upload
  if($request->hasFile('passport')){
    //Get filename with the extension
     $filenamewithExt = $request->file('passport')->getClientOriginalName();
     
    //Get just filename
    $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
    
    //Get just ext
    $extension = $request->file('passport')->guessClientExtension();
    
    //FileName to store
    $fileNameToStore =  $filename.'_'.time().'.'.$extension;
    
    //Upload Image
    $path = $request->file('passport')->storeAs('public/passport/',$fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
            //Handle File Upload
  if($request->hasFile('salinan_pendaftaran_syarikat')){
    //Get filename with the extension
     $filenamewithExt = $request->file('salinan_pendaftaran_syarikat')->getClientOriginalName();
     
    //Get just filename
    $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
    
    //Get just ext
    $extension = $request->file('salinan_pendaftaran_syarikat')->guessClientExtension();
    
    //FileName to store
    $fileNameToStore1 =  $filename.'_'.time().'.'.$extension;
    
    //Upload Image
    $path = $request->file('salinan_pendaftaran_syarikat')->storeAs('public/salinan_pendaftaran_syarikat/',$fileNameToStore1);
        } else {
            $fileNameToStore1 = 'noimage.jpg';
        }
         //Handle File Upload
  if($request->hasFile('memorandum')){
    //Get filename with the extension
     $filenamewithExt = $request->file('memorandum')->getClientOriginalName();
     
    //Get just filename
    $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
    
    //Get just ext
    $extension = $request->file('memorandum')->guessClientExtension();
    
    //FileName to store
    $fileNameToStore2 =  $filename.'_'.time().'.'.$extension;
    
    //Upload Image
    $path = $request->file('memorandum')->storeAs('public/memorandum/',$fileNameToStore2);
        } else {
            $fileNameToStore2 = 'noimage.jpg';
        }
         //Handle File Upload
  if($request->hasFile('borang21_44_49')){
    //Get filename with the extension
     $filenamewithExt = $request->file('borang21_44_49')->getClientOriginalName();
     
    //Get just filename
    $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
    
    //Get just ext
    $extension = $request->file('borang21_44_49')->guessClientExtension();
    
    //FileName to store
    $fileNameToStore3 =  $filename.'_'.time().'.'.$extension;
    
    //Upload Image
    $path = $request->file('borang21_44_49')->storeAs('public/borang21_44_49/',$fileNameToStore3);
        } else {
            $fileNameToStore3 = 'noimage.jpg';
        }
         //Handle File Upload
  if($request->hasFile('salinan_id_sst')){
    //Get filename with the extension
     $filenamewithExt = $request->file('salinan_id_sst')->getClientOriginalName();
     
    //Get just filename
    $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
    
    //Get just ext
    $extension = $request->file('salinan_id_sst')->guessClientExtension();
    
    //FileName to store
    $fileNameToStore4 = $filename.'_'.time().'.'.$extension;
    
    //Upload Image
    $path = $request->file('salinan_id_sst')->storeAs('public/salinan_id_sst/',$fileNameToStore4);
        } else {
            $fileNameToStore4 = 'noimage.jpg';
        }
         //Handle File Upload
  if($request->hasFile('surat_permohonan_lesen')){
    //Get filename with the extension
     $filenamewithExt = $request->file('surat_permohonan_lesen')->getClientOriginalName();
     
    //Get just filename
    $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
    
    //Get just ext
    $extension = $request->file('surat_permohonan_lesen')->guessClientExtension();
    
    //FileName to store
    $fileNameToStore5 =  $filename.'_'.time().'.'.$extension;
    
    //Upload Image
    $path = $request->file('surat_permohonan_lesen')->storeAs('public/surat_permohonan_lesen/',$fileNameToStore5);
        } else {
            $fileNameToStore5 = 'noimage.jpg';
        }
         //Handle File Upload
  if($request->hasFile('lesen_jualan')){
    //Get filename with the extension
     $filenamewithExt = $request->file('lesen_jualan')->getClientOriginalName();
     
    //Get just filename
    $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
    
    //Get just ext
    $extension = $request->file('lesen_jualan')->guessClientExtension();
    
    //FileName to store
    $fileNameToStore6 =  $filename.'_'.time().'.'.$extension;
    
    //Upload Image
    $path = $request->file('lesen_jualan')->storeAs('public/lesen_jualan/',$fileNameToStore6);
        } else {
            $fileNameToStore6 = 'noimage.jpg';
        }
         //Handle File Upload
  if($request->hasFile('lain')){
    //Get filename with the extension
     $filenamewithExt = $request->file('lain')->getClientOriginalName();
     
    //Get just filename
    $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
    
    //Get just ext
    $extension = $request->file('lain')->guessClientExtension();
    
    //FileName to store
    $fileNameToStore7 =  $filename.'_'.time().'.'.$extension;
    
    //Upload Image
    $path = $request->file('lain')->storeAs('public/lain/',$fileNameToStore7);
        } else {
            $fileNameToStore7 = 'noimage.jpg';
        }
        //Handle File Upload
  if($request->hasFile('salinan_ic')){
    //Get filename with the extension
     $filenamewithExt = $request->file('salinan_ic')->getClientOriginalName();
     
    //Get just filename
    $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
    
    //Get just ext
    $extension = $request->file('salinan_ic')->guessClientExtension();
    
    //FileName to store
    $fileNameToStore8 =  $filename.'_'.time().'.'.$extension;
    
    //Upload Image
    $path = $request->file('salinan_ic')->storeAs('public/salinan_ic/',$fileNameToStore8);
        } else {
            $fileNameToStore8 = 'noimage.jpg';
        }
        //Handle File Upload
  if($request->hasFile('notis_iklan')){
    //Get filename with the extension
     $filenamewithExt = $request->file('notis_iklan')->getClientOriginalName();
     
    //Get just filename
    $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
    
    //Get just ext
    $extension = $request->file('notis_iklan')->guessClientExtension();
    
    //FileName to store
    $fileNameToStore9 =  $filename.'_'.time().'.'.$extension;
    
    //Upload Image
    $path = $request->file('notis_iklan')->storeAs('public/notis_iklan/',$fileNameToStore9);
        } else {
            $fileNameToStore9 = 'noimage.jpg';
        }
        //Handle File Upload
  if($request->hasFile('iklan_5_minggu')){
    //Get filename with the extension
     $filenamewithExt = $request->file('iklan_5_minggu')->getClientOriginalName();
     
    //Get just filename
    $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
    
    //Get just ext
    $extension = $request->file('iklan_5_minggu')->guessClientExtension();
    
    //FileName to store
    $fileNameToStore10 =  $filename.'_'.time().'.'.$extension;
    
    //Upload Image
   $path = $request->file('iklan_5_minggu')->storeAs('public/iklan_5_minggu/',$fileNameToStore10);
        } else {
            $fileNameToStore10 = 'noimage.jpg';
        }
        //Handle File Upload
  if($request->hasFile('pelan_lokasi')){
    //Get filename with the extension
     $filenamewithExt = $request->file('pelan_lokasi')->getClientOriginalName();
     
    //Get just filename
    $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
    
    //Get just ext
    $extension = $request->file('pelan_lokasi')->guessClientExtension();
    
    //FileName to store
    $fileNameToStore11 =  $filename.'_'.time().'.'.$extension;
    
    //Upload Image
    $path = $request->file('pelan_lokasi')->storeAs('public/pelan_lokasi/',$fileNameToStore11);
        } else {
            $fileNameToStore11 = 'noimage.jpg';
        }
        //Handle File Upload
  if($request->hasFile('gambar_3r_premis')){
    //Get filename with the extension
     $filenamewithExt = $request->file('gambar_3r_premis')->getClientOriginalName();
     
    //Get just filename
    $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
    
    //Get just ext
    $extension = $request->file('gambar_3r_premis')->guessClientExtension();
    
    //FileName to store
    $fileNameToStore12 =  $filename.'_'.time().'.'.$extension;
    
    //Upload Image
    $path = $request->file('gambar_3r_premis')->storeAs('public/gambar_3r_premis/',$fileNameToStore12);
        } else {
            $fileNameToStore12 = 'noimage.jpg';
        }
             //Handle File Upload
  if($request->hasFile('surat_rayuan')){
    //Get filename with the extension
     $filenamewithExt = $request->file('surat_rayuan')->getClientOriginalName();
     
    //Get just filename
    $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
    
    //Get just ext
    $extension = $request->file('surat_rayuan')->guessClientExtension();
    
    //FileName to store
    $fileNameToStore13 =  $filename.'_'.time().'.'.$extension;
    
    //Upload Image
    $path = $request->file('surat_rayuan')->storeAs('public/surat_rayuan/',$fileNameToStore13);
        } else {
            $fileNameToStore13 = 'noimage.jpg';
        }
        
       $jenis=Permohonan::where('jenis_permohonan',$request->jenis_permohonan)->get();
       $numRow=count($jenis)+1;
           $no_rujukan=date('Y').'/'.$request->jenis_permohonan.'/'.$numRow;
      
        //Create Post
        $post=new Permohonan;
        $post->jenis_permohonan=$request->input('jenis_permohonan');
        $post->kelas_permohonan=$request->input('kelas_permohonan');
        $post->nama=$request->input('nama');
        $post->no_rujukan=$no_rujukan;
        $post->no_ic=$request->input('no_ic');
        $post->passport1=$request->input('passport1');
        $post->alamat=$request->input('alamat'); 
        $post->no_phone=$request->input('no_phone');
        $post->nama_syarikat=$request->input('nama_syarikat');
        $post->alamat_premis=$request->input('alamat_premis');
        $post->no_perakuan=$request->input('no_perakuan');
        $post->no_lesen=$request->input('no_lesen');
        $post->tarikh=$request->input('tarikh');
        $post->tarikh1=$request->input('tarikh');
        $post->setuju=$request->input('setuju');
        $post->status_permohonan_id=$request->input('status_permohonan_id');
        $post->passport=$fileNameToStore;
        $post->salinan_pendaftaran_syarikat=$fileNameToStore1;
        $post->memorandum=$fileNameToStore2;
        $post->borang21_44_49=$fileNameToStore3;
        $post->salinan_id_sst=$fileNameToStore4;
        $post->surat_permohonan_lesen=$fileNameToStore5;
        $post->lesen_jualan=$fileNameToStore6;
        $post->jenayah=$request->input('jenayah');
        $post->peraturan=$request->input('peraturan');
        $post->lain=$fileNameToStore7;
        $post->salinan_ic=$fileNameToStore8;
        $post->notis_iklan=$fileNameToStore9;
        $post->iklan_5_minggu=$fileNameToStore10;
        $post->pelan_lokasi=$fileNameToStore11;
        $post->gambar_3r_premis=$fileNameToStore12;
        $post->surat_rayuan=$fileNameToStore13;
        $post->save(); 
        $status=new Status_permohonans;
        $status->permohonan_id=$post->id;
        $status->created_at=$post->created_at;
        $status->catatan=$request->input('catatan');
        $status->status=$request->input('status_permohonan_id');
        
        $status->save(); 
        $data = array('name'=>"Staff e-liquor ", "body" => "Permohonan baru telah masuk");      
        Mail::send('emails.mail', $data, function($message) {
            $message->to('perepat7@gmail.com', 'staff')
                    ->subject('Permohonan Baru Lesen ');
            $message->from('eliquorklang@google.com','e-liquor pdtk');
        });
        
        return redirect('/status')->with('success',"Permohonan lesen telah  dihantar dan no.rujukan anda ialah  $no_rujukan  sila simpan untuk digunakan semasa menyemak status permohonan anda.");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Permohonan::find($id);
        return view ('permohonan.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post= Permohonan::find($id);
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
