@extends('layouts.admin')

@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
<br>
<div class="container-fluid">
<section  class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> Kemaskini Maklumat Pengumuman</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
              @foreach($posts as $post)
    {!! Form::open(['action' => ['RayuanController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    @method('PUT')
        @csrf  
        
              
               <!-- <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
             -->
          
        <div class="form-group" >
      
            {{Form::text('id', $post->id, ['class' => 'form-control','hidden'])}}
        </div>  
        <div class="form-group">
            {{Form::label('data', 'Info 1')}}
            {{Form::textarea('data', $post->data, ['class' => 'form-control', 'rows' => 4, 'cols' => 54, 'style' => 'resize:none'])}}
        </div>
                  <div class="form-group">
            {{Form::label('data1', 'Info 2')}}
            {{Form::textarea('data1', $post->data1, ['class' => 'form-control', 'rows' => 4, 'cols' => 54, 'style' => 'resize:none'])}}
        </div>
                
  <div class="form-group">
            {{Form::label('data2', 'Info 3')}}
            {{Form::textarea('data2', $post->data2, ['class' => 'form-control', 'rows' => 4, 'cols' => 54, 'style' => 'resize:none'])}}
        </div>
        <div class="form-group">
            {{Form::label('pengumuman', ' pengumuman')}}
            {{Form::textarea('pengumuman', $post->pengumuman, ['class' => 'form-control', 'rows' => 4, 'cols' => 54, 'style' => 'resize:none'])}}
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

          </div>
          @endforeach
@endsection