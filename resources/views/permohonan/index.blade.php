<?php use App\Permohonan; ?>
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
button{
    float:right;
   
}
.btn1 {
  box-shadow: 0 .1875rem .1875rem 0 rgba(0,0,0,.1) !important;
  padding: 1.25rem 2rem;
  font-family: 'Varela Round';
  font-size: 80%;
  text-transform: uppercase;
  letter-spacing: .15rem;
  border: 0;
  margin-left:500px;
 
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

    <h1 style="margin-left: 15px"> Permohonan Baru</h1>
    @if (count($posts)>0)
    @foreach($posts as $post)
 
              <div class="clearfix">  
                    <div class="card p-3 mt-3 mb-3">        
            <h3><img class="img" style="width:10%" src="{{asset('storage/passport/' . $post->passport)}} " height="150px">      
            <a style="margin-left:18px" href="{{route('permohonan.show', $post->id)}}">{{$post->nama}}</a><pre>
<small> Kelas Permohonan : {{$post->kelas_permohonan}}</small><a align="right" class="btn1" type="button" href="{{route('permohonan.show', $post->id)}}"><i class="fas fa-edit">Kemaskini</i></a>
<small> Nama Syarikat    : {{$post->nama_syarikat}}</small>
<small> Dimohon pada     : {{$post->created_at}}</small></h3>
  </pre>
  
            </div></div>
    @endforeach
    
    @else
        <p>Tiada Permohonan Baru</p>
        @endif
  @endsection    
