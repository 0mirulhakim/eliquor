<?php 
use App\Post;
use App\Status_permohonan;
?>
@extends('layouts.admin')

@section('content')

<br><br><br>
 
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
            {{Form::label('no_ic', 'No. Kad  Pengenalan/Passport')}}
            {{Form::text('no_ic', $post->no_ic , ['class' => 'form-control', 'placeholder' => 'no ic','disabled'])}}
        </div>
        <div class="form-group">
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
    <option value="1">Dalam Semakan</option>
    <option value="2">Permohonan Diterima & Dalam Tindakan</option>
    <option value="3">Permohonan Diluluskan</option>
    <option value="4">Permohonan Ditolak</option>
 
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

