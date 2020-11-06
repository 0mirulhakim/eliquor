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
                 
            <a style="margin-left:18px" href="{{route(' sah.show', $post->id)}}">{{$post->id}}</a><pre>
<small> Kelas Permohonan : {{$post->data}}</small>
<small> Nama Syarikat    : {{$post->data1}}</small>
<small> Dimohon pada     : {{$post->data2}}</small></h3>
  </pre>
  
            </div></div>
    @endforeach
    
    @else
        <p>Tiada Permohonan Baru</p>
        @endif
  @endsection    
