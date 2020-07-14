@extends('layouts.admin')

@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
<h1>Sejarah Kemaskini</h1>
<div class="card">
<table width="400"class="table table-striped table-dark">
        <thead>
            <tr>
            <th>Nama Pemohon</th>
                <th>Status Permohonan</th>
                <th>Dikemaskini oleh</th>
                <th>Tarikh</th>
                <th>Catatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
         
            <tr>
            <td><a href="{{route('statuses.show', $post->id)}}">{{$post->nama}}</a></td>
                <td><?php if( $post->status == 1 ){
                                     echo "Dalam Semakan";
                        }else if( $post->status == 2 ){
                                     echo "Permohonan Diterima & Dalam Tindakan";
                        }else if( $post->status == 3 ){
                                        echo "Permohonan Diluluskan";
                        }else{
                                     echo "Permohonan Ditolak";
                        }?>
            </td>
            <td>{{$post->nama_staff}}</td>
            <td>{{$post->created_at}}</td>
            <td>{{$post->catatan}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>
    </div>
</div>
        </div>
      </div>
      
    </div>

                 

                  
                 
                </form>
             
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection
