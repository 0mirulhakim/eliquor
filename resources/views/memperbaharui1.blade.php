@extends('layouts.app')

@section('content')
<style>
form{
    background-color:#FFB6C1;
    border: 2px solid black;
    padding: 25px; 
    background-repeat: no-repeat;
    background-size: auto;
}
table {
  border-collapse: collapse;
  width: 80%;
   margin-left: 100px;
      margin-right: 60px;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
tr:nth-child(odd){background-color: #f2f2f2}
th {
  background-color: #333;
  color: white;
}
label.required:after {
    color: #cc0000;
    content: "*";
    font-weight: bold;
    margin-left: 5px;
}
</style>
    <h1>Permohonan Memperbaharui lesen</h1>
    {!! Form::open(['action' => 'PermohonanController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <h2>Butiran Pemohon</h2>
        <input type="hidden" id="jenis_permohonan" name="jenis_permohonan" value="2">
        <div class="form-group">
        {{Form::label('kelas_permohonan', 'Kelas Permohonan', [ 'class' => 'required' ])}}
        <select name="kelas_permohonan" class="custom-select mb-3" required>
    <option value="">Pilih Kelas</option>
    <option value="kelas1">Rumah Awam Kelas 1</option>
    <option value="kelas2">Rumah Awam Kelas 2</option>
    <option value="kelas3">Rumah Awam Kelas 3</option>
    <option value="borong">Borong</option>
    <option value="runcit">Runcit</option>
  </select></div>
        <div class="form-group">
        {{Form::label('nama', 'Nama (Huruf Besar)', [ 'class' => 'required' ])}}
            {{Form::text('nama', '', ['class' => 'form-control', 'placeholder' => 'Nama','required'])}}
        </div>
        <div class="form-group">
            {{Form::label('no_ic', 'Nombor kad pengenalan (warganegara)', [ 'class' => 'required' ])}}
            {{Form::text('no_ic', '', ['class' => 'form-control', 'placeholder' => 'contoh=123456789101','maxlength' => 12,'minlength' => 12])}}
        </div>
        <div class="form-group">
            {{Form::label('passport1', 'Nombor Passport (bukan warganegara)', [ 'class' => 'required' ])}}
            {{Form::text('passport1', '', ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group">
            {{Form::label('alamat', 'Alamat Rumah', [ 'class' => 'required' ])}}
            {{Form::textarea('alamat', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'alamat rumah','required'])}}
        </div>
        <div class="form-group">
            {{Form::label('no_phone', 'No. Telefon (Telefon Bimbit/Pejabat/Rumah)', [ 'class' => 'required' ])}}
            {{Form::text('no_phone', '', ['class' => 'form-control', 'placeholder' => 'contoh=012345678910','required'])}}
        </div>
        <h2>Butiran Premis Perniagaan</h2>
        <div class="form-group">
            {{Form::label('nama_syarikat', 'Nama Syarikat/Perniagaan', [ 'class' => 'required' ])}}
            {{Form::text('nama_syarikat', '', ['class' => 'form-control', 'placeholder' => 'Nama Syarikat/Perniagaan','required'])}}
        </div>
        <div class="form-group">
            {{Form::label('alamat_premis', 'Alamat Premis Perniagaan', [ 'class' => 'required' ])}}
            {{Form::textarea('alamat_premis', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Alamat Premis Perniagaan','required'])}}
        </div>
        <div class="form-group">
            {{Form::label('no_perakuan', 'No. Perakuan Pendaftaran Perniagaan/Perakuan Penubuhan', [ 'class' => 'required' ])}}
            {{Form::text('no_perakuan', '', ['class' => 'form-control', 'placeholder' => 'No. perakuan','required'])}}
        </div><div class="form-group">
            {{Form::label('no_lesen', 'No. Lesen/Permit/Rujukan MPK/MBSA (Jika Ada)')}}
            {{Form::text('no_lesen', '', ['class' => 'form-control', 'placeholder' => 'No. Lesen'])}}
   <!--     </div><div class="form-group">
            {{Form::label('tarikh', 'Tarikh', [ 'class' => 'required' ])}}
            {{Form::date('tarikh', '', ['class' => 'form-control', 'placeholder' => 'Tarikh','required'])}}
        </div> -->
        <div class="container mt-3">
        <div class="custom-control custom-checkbox mb-3">
      <input type="checkbox" class="custom-control-input" id="customCheck" name="setuju" required>
      <label class="custom-control-label" for="customCheck">Saya mengaku bahawa keterangan-keterangan di atas adalah betul dan lengkap.</label>
    </div></div>
    <input type="hidden" id="status_permohonan_id" name="status_permohonan_id" value="1">
    <input type="hidden" id="tarikh" name="tarikh" value="{{ date('Y-m-d') }}">
    <input type="hidden" id="iklan_5_minggu" name="iklan_5_minggu" value="NULL">
    <input type="hidden" id="peraturan" name="peraturan" value="NULL">
    <div class="container mt-3"> <h2>Senarai Semak Permohonan</h2></div>
<div>
 <table width="90%" class="container mt-3" border="1">
 <tr class="container mt-3">
     
      <th>BIL</td>
      <th>PERKARA</th>
      <th>TANDAKAN</th>
      
 </tr></div><div>
 <tr>
      
      <td><?php echo ("1"); ?></td>
     <td> {{Form::label('passport', 'Gambar Pemohon berukuran Passport (format JPEG/JPG)', [ 'class' => 'required' ])}}</td>
      <td> <div class="form-group">
      <div class="custom-file">
    <input type="file" class="form-group" id="inputGroupFile01" name="passport"
      aria-describedby="inputGroupFileAddon01" required>
    <label class="custom-file-label" for="inputGroupFile01">Image</label>
  </div>
         <!--   {{Form::file('passport', ['required'])}}-->
        </div></td>    
 </tr></div>   
 <script>
            $('#inputGroupFile01').on('change',function(){
                //get the file name
                var fileName = $(this).val().replace('C:\\fakepath\\', " ");
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })
</script>
 <td><?php echo ("2"); ?></td>
      <td> {{Form::label('salinan_pendaftaran_syarikat', 'Salinan Pendaftaran Syarikat/Perniagaan-SSM (Borang 9/13)', [ 'class' => 'required' ])}}</td>
      <td><div>
      <div class="custom-file">
    <input type="file" class="form-group" id="inputGroupFile02" name="salinan_pendaftaran_syarikat"
      aria-describedby="inputGroupFileAddon01" required>
    <label class="custom-file-label" for="inputGroupFile02">Choose File</label>
  </div>
      <!--{{Form::file('salinan_pendaftaran_syarikat', ['required'])}}-->
    </div></td>    
 </tr></div>
 <script>
            $('#inputGroupFile02').on('change',function(){
                //get the file name
                var fileName = $(this).val().replace('C:\\fakepath\\', " ");
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })
</script>
 <div>
 <tr>
      
      <td><?php echo ("3"); ?></td>
      <td><?php echo ("Memorandum and Article of Associate (M & A) Syarikat (Jika berkaitan)"); ?></td>
      <td><div>
      <div class="custom-file">
    <input type="file" class="form-group" id="inputGroupFile03" name="memorandum"
      aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile03">Choose File</label>
  </div>
     <!-- {{Form::file('memorandum')}}-->
    </div></td>    
 </tr></div>
 <script>
            $('#inputGroupFile03').on('change',function(){
                //get the file name
                var fileName = $(this).val().replace('C:\\fakepath\\', " ");
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })
</script>
 <div>
 <tr>
      
      <td><?php echo ("4"); ?></td>
      <td><?php echo ("Borang 21,44 & 49 (Jika berkaitan)"); ?></td>
      <td><div>
      <div class="custom-file">
    <input type="file" class="form-group" id="inputGroupFile04" name="borang21_44_49"
      aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile04">Choose File</label>
  </div>
     <!-- {{Form::file('borang21_44_49')}}-->
    </div></td>    
 </tr></div>
 <script>
            $('#inputGroupFile04').on('change',function(){
                //get the file name
                var fileName = $(this).val().replace('C:\\fakepath\\', " ");
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })
</script>
 <div>
 <tr>
      
      <td><?php echo ("5"); ?></td>
      <td><?php echo ("Salinan Dokumen ID SST (Jika ada)"); ?></td>
      <td><div>
      <div class="custom-file">
    <input type="file" class="form-group" id="inputGroupFile05" name="salinan_id_sst"
      aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile05">Choose File</label>
  </div>
     <!-- {{Form::file('salinan_id_sst')}}-->
    </div></td>    
 </tr> </div>
 <script>
            $('#inputGroupFile05').on('change',function(){
                //get the file name
                var fileName = $(this).val().replace('C:\\fakepath\\', " ");
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })
</script>
 <div><tr>
      
      <td><?php echo ("6"); ?></td>
      <td> {{Form::label('surat_permohonan_lesen', 'Salinan Surat Permohonan Lesen/Lesen Premis Perniagaan/Lesen Bar/Lesen perniagaan daripada MPK/MBSA *Nota:Perlu dikemukakan Salinan kelulusan daripada PBT sebelum lesen menjual minuman keras boleh dikeluarkan dan pembayaran dijelaskan', [ 'class' => 'required' ])}}</td>    
      <td><div>
      <div class="custom-file">
    <input type="file" class="form-group" id="inputGroupFile06" name="surat_permohonan_lesen"
      aria-describedby="inputGroupFileAddon01" required>
    <label class="custom-file-label" for="inputGroupFile06">Choose File</label>
  </div>
     <!-- {{Form::file('surat_permohonan_lesen', ['required'])}}-->
    </div></td>    
 </tr></div>
 <script>
            $('#inputGroupFile06').on('change',function(){
                //get the file name
                var fileName = $(this).val().replace('C:\\fakepath\\', " ");
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })
</script>
 <div> <tr>
      
      <td><?php echo ("7"); ?></td>
      <td> {{Form::label('lesen_jualan', 'Lesen Menjual Minuman Keras PDT Klang (Tahun sebelum dan terkini)', [ 'class' => 'required' ])}}</td>
      <td><div>
      <div class="custom-file">
    <input type="file" class="form-group" id="inputGroupFile07" name="lesen_jualan"
      aria-describedby="inputGroupFileAddon01" required>
    <label class="custom-file-label" for="inputGroupFile07">Choose File</label>
  </div>
     <!-- {{Form::file('lesen_jualan', ['required'])}}-->
    </div></td>    
 </tr></div>
 <script>
            $('#inputGroupFile07').on('change',function(){
                //get the file name
                var fileName = $(this).val().replace('C:\\fakepath\\', " ");
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })
</script>
 <div> <tr>
      
      <td><?php echo ("8"); ?></td>
      <td> {{Form::label('jenayah', 'Bebas daripada Rekod Jenayah PDRM', [ 'class' => 'required' ])}}</td>      
      <td><input name='jenayah' id='jenayah' type='radio' value=1>Ya 

<input name='jenayah' id='jenayah' type='radio' value=2>Tidak </td>    
 </tr></div><div> <tr>
      
      <td><?php echo ("9"); ?></td>
      <td><?php echo ("Lain-lain"); ?></td>
      <td><div>
      <div class="custom-file">
    <input type="file" class="form-group" id="inputGroupFile09" name="lain"
      aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile09">Choose File</label>
  </div>
      <!--{{Form::file('lain')}}-->
    </div></td>    
 </tr>
 <script>
            $('#inputGroupFile09').on('change',function(){
                //get the file name
                var fileName = $(this).val().replace('C:\\fakepath\\', " ");
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })
</script></div></th></tr></table></div>
<br><br>
    </body>
</html>

        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection