<!-- Main content -->
<section  class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> Kemaskini Maklumat Homepage</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
              @foreach($posts as $post)
    {!! Form::open(['action' => 'RayuanController@update', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
  @method
        @csrf  
        <div class="form-group">
      
            {{Form::text('id', $post->id, ['class' => 'form-control','hidden'])}}
        </div>  
        <div class="form-group">
            {{Form::label('data', 'Baru')}}
            {{Form::text('data', $post->data, ['class' => 'form-control'])}}
        </div>
                  <div class="form-group">
            {{Form::label('data1', 'Memperbaharui')}}
            {{Form::text('data2', $post->data1, ['class' => 'form-control'])}}
        </div>
                
  <div class="form-group">
            {{Form::label('data2', 'Rayuan')}}
            {{Form::text('data2', $post->data2, ['class' => 'form-control'])}}
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
          @endforeach