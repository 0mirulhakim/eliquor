@extends('layouts.admin')

@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
<div class="container">  
<h1>Sejarah Kemaskini</h1>
<div class="card">
<table width="400"class="table table-striped table-dark">
        <thead>
            <tr>
            <th> Bil.</th>
            <th>Nama Pemohon</th>
                <th>Status Permohonan</th>
                <th>Dikemaskini oleh</th>
                <th>Tarikh</th>
                <th>Catatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post=>$post1)
         
            <tr>
            <td>{{$post+1}}.</td>
            <td><a href="{{route('statuses.show', $post1->id)}}">{{$post1->nama}}</a></td>
                <td><?php if( $post1->status == 1 ){
                                     echo "Dalam Semakan";
                        }else if( $post1->status == 2 ){
                                     echo "Permohonan Diterima & Dalam Tindakan";
                        }else if( $post1->status == 3 ){
                                        echo "Permohonan Diluluskan";
                        }else{
                                     echo "Permohonan Ditolak";
                        }?>
            </td>
            <td>{{$post1->nama_staff}}</td>
            <td>{{$post1->created_at}}</td>
            <td>{!! nl2br(e($post1->catatan)) !!}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>  
@endsection
