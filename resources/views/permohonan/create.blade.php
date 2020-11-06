@extends('layouts.app')

@section('content')
    <h1>Memperbaharui lesen</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <h2>Butiran Pemohon</h2>
        <div class="container mt-3">
        <label for="title">Jenis Permohonan</label>
        <select name="jenis_permohonan" class="custom-select mb-3" >
    <option selected >memperbaharui</option>
  </select></div>
        <div class="container mt-3">
        <label for="title">Kelas Permohonan</label>
        <select name="kelas_permohonan" class="custom-select mb-3" >
    <option selected ></option>
    <option value="kelas1">Rumah Awam Kelas 1</option>
    <option value="kelas2">Rumah Awam Kelas 2</option>
    <option value="kelas3">Rumah Awam Kelas 3</option>
    <option value="borong">Borong</option>
    <option value="runcit">Runcit</option>
  </select></div>
        <div class="form-group">
            {{Form::label('nama', 'Nama (Huruf Besar)')}}
            {{Form::text('nama', '', ['class' => 'form-control', 'placeholder' => 'Nama'])}}
        </div>
        <div class="form-group">
            {{Form::label('no_ic', 'Nombor kad pengenalan')}}
            {{Form::text('no_ic', '', ['class' => 'form-control', 'placeholder' => '123456789101'])}}
        </div>
        <div class="form-group">
            {{Form::label('alamat', 'Alamat Rumah')}}
            {{Form::textarea('alamat', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'alamat rumah'])}}
        </div>
        <div class="form-group">
            {{Form::label('no_phone', 'No. Telefon (Telefon Bimbit/Pejabat/Rumah)')}}
            {{Form::text('no_phone', '', ['class' => 'form-control', 'placeholder' => 'contoh=012345678910'])}}
        </div>
        <h2>Butiran Premis Perniagaan</h2>
        <div class="form-group">
            {{Form::label('nama_syarikat', 'Nama Syarikat/Perniagaan')}}
            {{Form::text('nama_syarikat', '', ['class' => 'form-control', 'placeholder' => 'Nama Syarikat/Perniagaan'])}}
        </div>
        <div class="form-group">
            {{Form::label('alamat_premis', 'Alamat Premis Perniagaan')}}
            {{Form::textarea('alamat_premis', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Alamat Premis Perniagaan'])}}
        </div>
        <div class="form-group">
            {{Form::label('no_perakuan', 'No. Perakaunan Pendaftaran Perniagaan/Perakuan Penubuhan')}}
            {{Form::text('no_perakuan', '', ['class' => 'form-control', 'placeholder' => 'No. perakuan'])}}
        </div><div class="form-group">
            {{Form::label('no_lesen', 'No. Lesen/Permit/Rujukan MPK/MBSA (Jika Ada)')}}
            {{Form::text('no_lesen', '', ['class' => 'form-control', 'placeholder' => 'No. Lesen'])}}
        </div><div class="form-group">
            {{Form::label('tarikh', 'Tarikh')}}
            {{Form::date('tarikh', '', ['class' => 'form-control', 'placeholder' => 'Tarikh'])}}
        </div>
        <div class="container mt-3">
        <div class="custom-control custom-checkbox mb-3">
      <input type="checkbox" class="custom-control-input" id="customCheck" name="setuju" required>
      <label class="custom-control-label" for="customCheck">Saya mengaku bahawa keterangan-keterangan di atas adalah betul dan lengkap.</label>
    </div></div>
    <input type="hidden" id="status_permohonan_id" name="status_permohonan_id" value="1">
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
      <td><?php echo ("Gambar Pemohon berukuran Passport"); ?></td>
      <td> <div class="form-group">
            {{Form::file('passport')}}
        </div></td>    
 </tr></div>   
 
<br><br>
    </body>
</html>

        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection