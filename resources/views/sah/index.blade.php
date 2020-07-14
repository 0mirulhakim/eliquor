<?php use App\Post; ?>
<style>


.img {
    float: left;
}
h3 {
  float: right;
}
.clearfix {
  overflow: auto;
}



</style>

<body>



@extends('layouts.admin')
@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

    <h1>Permohonan Lesen Baru</h1>
    @if (count($posts)>0)
    @foreach($posts as $post)
 
              <div class="clearfix">  
                    <div class="card p-3 mt-3 mb-3">        
            <h3><img class="img" style="width:10%" src="{{asset('storage/passport/' . $post->passport)}} " height="150px">
            <a style="margin-left:18px"href="{{route('permohonan.show', $post->id)}}">{{$post->nama}}</a><pre>
<small> Status Permohonan: <?php if( $post->status_permohonan_id == 1 ){
                                     echo "Dalam Semakan";
                        }else if( $post->status_permohonan_id == 2 ){
                                     echo "Permohonan Diterima & Dalam Tindakan";
                        }else if( $post->status_permohonan_id == 3 ){
                                        echo "Permohonan Diluluskan";
                        }else{
                                     echo "Permohonan Ditolak";
                        }?></small>
<small> Kelas Permohonan : {{$post->kelas_permohonan}}</small>
<small> Nama Syarikat    : {{$post->nama_syarikat}}</small>
<small> Dimohon pada     : {{$post->created_at}}</small></h3>
  </pre>
            </div></div>
    @endforeach
    
    @else
        <p>Tiada Permohonan Yang Telah Disahkan</p>
        @endif
  @endsection    
