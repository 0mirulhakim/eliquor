@extends('layouts.admin')

@section('content')
<style>

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  
}
th, td {
  padding: 15px;
  text-align: left;
  height: 50px;
  vertical-align: bottom;
}
th{
    font-weight: normal;
    height: 50px;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: 120px;
}

div.desc {
  padding: 15px;
  text-align: center;
}.btn{
  background-color: #4fbbd8 ;
  color:white;
}
.btn1 {
  box-shadow: 0 .1875rem .1875rem 0 rgba(0,0,0,.1) !important;
  padding: 1.25rem 2rem;
  font-family: 'Varela Round';
  font-size: 80%;
  text-transform: uppercase;
  letter-spacing: .15rem;
  border: 0;
 
}
.btn2 {
  box-shadow: 0 .1875rem .1875rem 0 rgba(0,0,0,.1) !important;
  padding: 1.25rem 2rem;
  font-family: 'Varela Round';
  font-size: 80%;
  text-transform: uppercase;
  letter-spacing: .15rem;
  border: 0;
  display:inline-block;
}

</style><br><br>
    <img  style="width:15%" src="{{asset('storage/passport/' . $post->passport)}} "  height="250" class="center">
    
    <table align="center">
    <h2 align="center">BUTIRAN PEMOHON</h2>
    <tr>
    <th bgcolor="#707070" width="30%">Jenis Permohonan :</th>
    <th><?php if( $post->jenis_permohonan == 1 ){
                                     echo "Baru";
                        }else if( $post->jenis_permohonan == 2 ){
                                     echo "Memperbaharui";
                        }else{
                                     echo "Rayuan";
                        }?></th>
  </tr>
    <tr>
    <th bgcolor="#707070" width="30%">Kelas Permohonan :</th>
    <th>{{$post->kelas_permohonan}}</th>
  </tr>
  <tr>
    <th bgcolor="#707070" width="30%">Nama Pemohon :</th>
    <th>{{$post->nama}}</th>
  </tr>
  <tr>
    <td bgcolor="#707070">No. Kad Pengenalan/Passport :</td>
    <td>{{$post->no_ic}}{{$post->passport1}}</td>
  </tr>
  <tr>
    <td bgcolor="#707070">Alamat Rumah Pemohon:</td>
    <td>{{$post->alamat}}</td>
  </tr>
  <tr>
    <td bgcolor="#707070">No. Telefon :</td>
    <td>{{$post->no_phone}}</td>
  </tr>
</table>
<table align="center">
    <h2 align="center">BUTIRAN PREMIS PERNIAGAAN</h2>
  <tr>
    <th bgcolor="#707070" width="30%">Nama Syarikat/Perniagaan :</th>
    <th>{{$post->nama_syarikat}}</th>
  </tr>
  <tr>
    <td bgcolor="#707070">Alamat Premis Perniagaan :</td>
    <td>{{$post->alamat_premis}}</td>
  </tr>
  <tr>
    <td bgcolor="#707070">No. Pendaftaran SSM :</td>
    <td>{{$post->no_perakuan}}</td>
  </tr>
  <tr>
    <td bgcolor="#707070">No. Lesen/Permit/MPK/MBSA:</td>
    <td>{{$post->no_lesen}}</td>
  </tr>
  <tr>
    <td bgcolor="#707070">Tarikh:</td>
    <td>{{$post->tarikh}}</td>
  </tr>
  <tr>
    <td bgcolor="#707070">No.Rujukan:</td>
    <td>{{$post->no_rujukan}}</td>
  </tr>
</table><br><br><br>


<div class="container mt-3"> <h2>Senarai Semak Permohonan</h2></div>
<div>
 <table width="90%" class="container mt-3" border="1">
 <tr class="container mt-3">
     
      <th bgcolor="#333" style="color:white">BIL</td>
      <th bgcolor="#333" style="color:white">PERKARA</th>
      <th bgcolor="#333" style="color:white">BUKTI</th>
      
 </tr></div><div>
 <tr>
      
      <td><?php echo ("1"); ?></td>
      <td><?php echo ("*Gambar Pemohon berukuran Passport"); ?></td>
      <td><div class="gallery">
  <a target="_blank" href="{{asset('storage/passport/' . $post->passport)}} ">
    <img src="{{asset('storage/passport/' . $post->passport)}} " alt="passport" width="600" height="400">
  </a>
</div></td>    
 </tr></div>  
 <tr>
      
      <td><?php echo ("2"); ?></td>
      <td><?php echo ("*Salinan Kad Pengenalan"); ?></td>
      <td><div class="gallery">
 <iframe src="{{asset('storage/salinan_ic/' . $post->salinan_ic)}} " alt="salinan_ic" width="100%" height="100%"></iframe></div>
  <center><a target="_blank" class="btn  btn-default btn-sm" href="{{asset('storage/salinan_ic/' . $post->salinan_ic)}} "><i class="fas fa-folder"></i></a></center>
  
  
</td>    
 </tr></div><div>
 <tr>
      
      <td><?php echo ("3"); ?></td>
      <td><?php echo ("*Salinan Pendaftaran Syarikat/Perniagaan-SSM (Borang 9/13)"); ?></td>
      <td ><div class="gallery">
  <iframe src="{{asset('storage/salinan_pendaftaran_syarikat/' . $post->salinan_pendaftaran_syarikat)}} " alt="salinan_pendaftaran_syarikat" width="100%" height="100%"></iframe></div>
  <center><a target="_blank" class="btn  btn-default btn-sm" href="{{asset('storage/salinan_pendaftaran_syarikat/' . $post->salinan_pendaftaran_syarikat)}} "><i class="fas fa-folder"></i></a></center>
  
</td>    
 </tr></div><div>
 <tr>
      
      <td><?php echo ("4"); ?></td>
      <td><?php echo ("Memorandum and Article of Associate (M & A) Syarikat (Jika berkaitan)"); ?></td>
      <td><div class="gallery">
      <iframe src="{{asset('storage/memorandum/' . $post->memorandum)}} " alt="memorandum" width="100%" height="100%"></iframe></div>
  <center><a target="_blank" class="btn  btn-default btn-sm" href="{{asset('storage/memorandum/' . $post->memorandum)}} "><i class="fas fa-folder"></i></a></center>
  
  </td>    
 </tr></div><div>
 <tr>
      
      <td><?php echo ("5"); ?></td>
      <td><?php echo ("Borang 21,44 & 49 (Jika berkaitan)"); ?></td>
      <td><div class="gallery">
      <iframe src="{{asset('storage/borang21_44_49/' . $post->borang21_44_49)}} " alt="borang21_44_49" width="100%" height="100%"></iframe></div>
  <center><a target="_blank" class="btn  btn-default btn-sm" href="{{asset('storage/borang21_44_49/' . $post->borang21_44_49)}} "><i class="fas fa-folder"></i></a></center>
  
  </td>    
 </tr></div><div>
 <tr>
      
      <td><?php echo ("6"); ?></td>
      <td><?php echo ("*Notis Iklan Permohonan di dalam Bahasa Melayu atau Inggeris sahaja.(Berita Harian/Utusan Malaysia/News Straits Times/The Star) \n Sekurang-kurangnya 1 hari dalam akhbar tempatan mengikut tarikh yang diwartakan)"); ?></td>
      <td><div class="gallery">
      <iframe src="{{asset('storage/notis_iklan/' . $post->notis_iklan)}} " alt="notis_iklan" width="100%" height="100%"></iframe></div>
  <center><a target="_blank" class="btn  btn-default btn-sm" href="{{asset('storage/notis_iklan/' . $post->notis_iklan)}} "><i class="fas fa-folder"></i></a></center>
  
  </td>    
 </tr></div><div><tr>
      
      <td><?php echo ("7"); ?></td>
      <td><?php echo ("*Iklan hendaklah ditampal dipremis perniagaan dalam tempoh masa 5 minggu"); ?></td>
      <td><div class="gallery">
      <iframe src="{{asset('storage/iklan_5_minggu/' . $post->iklan_5_minggu)}} " alt="iklan_5_minggu" width="100%" height="100%"></iframe></div>
  <center><a target="_blank" class="btn  btn-default btn-sm" href="{{asset('storage/iklan_5_minggu/' . $post->iklan_5_minggu)}} "><i class="fas fa-folder"></i></a></center>
  </td>    
 </tr></div><div>
 <tr>
      
      <td><?php echo ("8"); ?></td>
      <td><?php echo ("Salinan Dokumen ID SST (Jika ada)"); ?></td>
      <td><div class="gallery">
      <iframe src="{{asset('storage/salinan_id_sst/' . $post->salinan_id_sst)}} " alt="salinan_id_sst" width="100%" height="100%"></iframe></div>
  <center><a target="_blank" class="btn  btn-default btn-sm" href="{{asset('storage/salinan_id_sst/' . $post->salinan_id_sst)}} "><i class="fas fa-folder"></i></a></center>
  </td>    
 </tr> </div><div><tr>
      
      <td><?php echo ("9"); ?></td>
      <td><?php echo ("*Salinan Surat Permohonan Lesen/Lesen Premis Perniagaan/Lesen Bar/Lesen perniagaan daripada MPK/MBSA *Nota:Perlu dikemukakan Salinan kelulusan daripada PBT sebelum lesen menjual minuman keras boleh dikeluarkan dan pembayaran dijelaskan"); ?></td>
      <td><div class="gallery">
      <iframe src="{{asset('storage/surat_permohonan_lesen/' . $post->surat_permohonan_lesen)}} " alt="surat_permohonan_lesen" width="100%" height="100%"></iframe></div>
  <center><a target="_blank" class="btn  btn-default btn-sm" href="{{asset('storage/surat_permohonan_lesen/' . $post->surat_permohonan_lesen)}} "><i class="fas fa-folder"></i></a></center>
  </td>    
 </tr></div><tr>
      
      <td><?php echo ("10"); ?></td>
      <td><?php echo ("*Pelan Lokasi Premis Perniagaan berwarna(Google Map/Waze)"); ?></td>
      <td><div class="gallery">
      <iframe src="{{asset('storage/pelan_lokasi/' . $post->pelan_lokasi)}} " alt="pelan_lokasi" width="100%" height="100%"></iframe></div>
  <center><a target="_blank" class="btn  btn-default btn-sm" href="{{asset('storage/pelan_lokasi/' . $post->pelan_lokasi)}} "><i class="fas fa-folder"></i></a></center>
  
  </td>    
 </tr></div><tr>
      
      <td><?php echo ("11"); ?></td>
      <td ><?php echo ("*Gambar bersaiz 3R premis perniagaan berkaitan yang terkini (Meliputi gambar signboard luar dan didalam premis yang berwarna)"); ?></td>
      <td ><div class="gallery">
      <iframe src="{{asset('storage/gambar_3r_premis/' . $post->gambar_3r_premis)}} " alt="gambar_3r_premis" width="100%" height="100%"></iframe></div>
  <center><a target="_blank" class="btn  btn-default btn-sm" href="{{asset('storage/gambar_3r_premis/' . $post->gambar_3r_premis)}} "><i class="fas fa-folder"></i></a></center>
  
  </td>    
 </tr></div><div><div><div> <tr>
      
      <td ><?php echo ("12"); ?></td>
      <td ><?php echo ("*Mematuhi peraturan semasa yang ditetapkan oleh pihak PDRM(Polis),JKDM(Kastam),PKD(Kesihatan),MPK/MBSA"); ?></td>
      <td><?php if( $post->peraturan == 1 ){
                                     echo "Ya";
                        
                        }else{
                                     echo "Tidak";
                        }?></td>    
 </tr></div><div> <tr>
      
      <td><?php echo ("13"); ?></td>
      <td><?php echo ("*Bebas daripada Rekod Jenayah PDRM"); ?></td>
      <td><?php if( $post->jenayah == 1 ){
                                     echo "Ya";
                        
                        }else{
                                     echo "Tidak";
                        }?></td>    
 </tr></div><div> <tr>
      
      <td ><?php echo ("14"); ?></td>
      <td><?php echo ("Lain-lain"); ?></td>
      <td ><div class="gallery">
      <iframe src="{{asset('storage/lain/' . $post->lain)}} " alt="lain" width="100%" height="100%"></iframe></div>
  <center><a target="_blank" class="btn  btn-default btn-sm" href="{{asset('storage/lain/' . $post->lain)}} "><i class="fas fa-folder"></i></a></center>
  
  </td>    
 </tr>
 <div> <tr>
      
    <!--  <td ><?php echo ("15"); ?></td>
      <td><?php echo ("Lesen Menjual Minuman Keras PDT Klang (Tahun sebelum dan terkini)"); ?></td>
      <td ><div class="gallery">
  <a target="_blank" href="{{asset('storage/lesen_jualan/' . $post->lesen_jualan)}} ">
    <img src="{{asset('storage/lesen_jualan/' . $post->lesen_jualan)}} " alt="lain" width="600" height="400">
  </a>
</div></td>    
 </tr>--></div></th></tr></table></div> 
 
<br><br>
    </body>
</html>       





<br><br>
 <!-- this row will not appear when printing -->
 <div class="row no-print">
                <div class="col-12">
           <center><button type="button" onclick="clickHandler()"target="_blank"  class="btn1 btn-default"><i class="fas fa-print"></i>Print</button></center>
           
       <br>    
<script>
    function clickHandler() {
        window.addEventListener("load", window.print());
    }
    
</script>
    
            <!-- Main content -->
            <section  class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> Kemaskini Status</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
    {!! Form::open(['action' => 'Status_permohonansController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
  
        @csrf    
        <div class="form-group">
            {{Form::label('nama', 'Nama')}}
            {{Form::text('nama', $post->nama, ['class' => 'form-control', 'placeholder' => 'nama','disabled'])}}
        </div>
                  <div class="form-group">
            {{Form::label('no_ic', 'No. Kad  Pengenalan')}}
            {{Form::text('no_ic', $post->no_ic, ['class' => 'form-control', 'placeholder' => 'no ic','disabled'])}}
        </div>
        </div><div class="form-group">
            {{Form::label('tarikh', '*Tarikh')}}
            {{Form::date('tarikh',  old('tarikh', now()->format('Y-m-d')), ['class' => 'form-control', 'placeholder' => 'Tarikh','required'])}}
            
        </div>
        <input type="hidden" id="nama_staff" name="nama_staff" value="{{ Auth::user()->name }}">
        <input type="hidden" id="permohonan_id" name="permohonan_id" value="{{$post->id}}">
                  <div class="form-group">
        <label for="title">Status Permohonan</label>
        <select name="status" class="custom-select mb-3" >
    <option selected ><?php if( $post->status_permohonan_id == 1 ){
                                     echo "Dalam Semakan";
                        }else if( $post->status_permohonan_id == 2 ){
                                     echo "Permohonan Diterima & Dalam Tindakan";
                        }else if( $post->status_permohonan_id == 3 ){
                                        echo "Permohonan Diluluskan";
                        }else{
                                     echo "Permohonan Ditolak";
                        }?></option>
    <option value="2">Permohonan Diterima</option>
    <option value="4">Permohonan Ditolak</option>
    <option value="3">Permohonan Diluluskan</option>
  </select></div>
  <div class="form-group">
            {{Form::label('catatan', 'Catatan')}}
            {{Form::textarea('catatan', $post->catatan, ['class' => 'form-control', 'placeholder' => 'catatan'])}}
        </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                </div>
              </form>
            </div>
            <!-- /.card -->

            

          </div>
          <!--/.col (left) -->
          <!-- right column -->
   
        
    
    
    <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>


                 

                  
                 
              
             
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection
   
     