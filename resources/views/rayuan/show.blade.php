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
      <th bgcolor="#333" style="color:white">TANDAKAN</th>
      
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
 <td><?php echo ("2"); ?></td>
      <td><?php echo ("*Surat rayuan Oleh Pemohon"); ?></td>
      <td><div class="gallery">
  <a target="_blank" href="{{asset('storage/surat_rayuan/' . $post->surat_rayuan)}} ">
    <img src="{{asset('storage/surat_rayuan/' . $post->surat_rayuan)}} " alt="surat_rayuan" width="600" height="400">
  </a>
  
</div></td>    
 </tr></div><div>
 <tr>
      
      <td><?php echo ("3"); ?></td>
      <td><?php echo ("Memorandum and Article of Associate (M & A) Syarikat (Jika berkaitan)"); ?></td>
      <td><div class="gallery">
  <a target="_blank" href="{{asset('storage/memorandum/' . $post->memorandum)}} ">
    <img src="{{asset('storage/memorandum/' . $post->memorandum)}} " alt="memorandum" width="600" height="400">
  </a>
  
</div></td>    
 </tr></div><div>
 <tr>
      
      <td><?php echo ("4"); ?></td>
      <td><?php echo ("Borang 21,44 & 49 (Jika berkaitan)"); ?></td>
      <td><div class="gallery">
  <a target="_blank" href="{{asset('storage/borang21_44_49/' . $post->borang21_44_49)}} ">
    <img src="{{asset('storage/borang21_44_49/' . $post->borang21_44_49)}} " alt="lborang21_44_49ain" width="600" height="400">
  </a>
</div></td>    
 </tr></div><div>
 <tr>
      
      <td><?php echo ("5"); ?></td>
      <td><?php echo ("Salinan Dokumen ID SST (Jika ada)"); ?></td>
      <td><div class="gallery">
  <a target="_blank" href="{{asset('storage/salinan_id_sst/' . $post->salinan_id_sst)}} ">
    <img src="{{asset('storage/salinan_id_sst/' . $post->salinan_id_sst)}} " alt="salinan_id_sst" width="600" height="400">
  </a>
</div></td>    
 </tr> </div><div><tr>
      
      <td><?php echo ("6"); ?></td>
      <td><?php echo ("*Salinan Surat Permohonan Lesen/Lesen Premis Perniagaan/Lesen Bar/Lesen perniagaan daripada MPK/MBSA *Nota:Perlu dikemukakan Salinan kelulusan daripada PBT sebelum lesen menjual minuman keras boleh dikeluarkan dan pembayaran dijelaskan"); ?></td>
      <td><div class="gallery">
  <a target="_blank" href="{{asset('storage/surat_permohonan_lesen/' . $post->surat_permohonan_lesen)}} ">
    <img src="{{asset('storage/surat_permohonan_lesen/' . $post->surat_permohonan_lesen)}} " alt="surat_permohonan_lesen" width="600" height="400">
  </a>
</div></td>    
 </tr></div><div> <tr>
      
      <td><?php echo ("7"); ?></td>
      <td><?php echo ("*Gambar bersaiz 3R premis perniagaan berkaitan yang terkini (Meliputi gambar signboard luar dan didalam premis yang berwarna)"); ?></td>
      <td><div class="gallery">
  <a target="_blank" href="{{asset('storage/gambar_3r_premis/' . $post->gambar_3r_premis)}} ">
    <img src="{{asset('storage/gambar_3r_premis/' . $post->gambar_3r_premis)}} " alt="gambar_3r_premis" width="600" height="400">
  </a>
</div></td>    
 </tr></div><div> <tr>
      
      <td><?php echo ("8"); ?></td>
      <td><?php echo ("*Bebas daripada Rekod Jenayah PDRM"); ?></td>
      <td><?php if( $post->jenayah == 1 ){
                                     echo "Ya";
                        
                        }else{
                                     echo "Tidak";
                        }?></td>    
 </tr></div><div> <tr>
      
      <td><?php echo ("9"); ?></td>
      <td><?php echo ("Lain-lain"); ?></td>
      <td><div class="gallery">
  <a target="_blank" href="{{asset('storage/lain/' . $post->lain)}} ">
    <img src="{{asset('storage/lain/' . $post->lain)}} " alt="lain" width="600" height="400">
  </a>
</div></td>    
 </tr></div></th></tr></table></div>
<br><br>
    </body>




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
            {{Form::date('tarikh', '', ['class' => 'form-control', 'placeholder' => 'Tarikh','required'])}}
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
   
     