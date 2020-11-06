<?php use App\Permohonan; ?>
<style>
  table {
  border-collapse: collapse;
  width: 100%;
  background-color: white;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: gray;
  color: black;
}
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
.btn:hover {
  background-color: gray;
  
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

    <h1 style="margin-left: 15px"> Permohonan Rayuan Lesen</h1>
    <div class="row">
            <div class="col-lg-12 my-3">
                <div class="card filterable" style="overflow:300;">

                    <div class="card-header bg-gray text-black">
                        
                        <span>
                                     <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Senarai  Permohonan Rayuan
                                </span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-lg table-responsive-sm table-responsive-md">
    <input id="myInput" style="float:right;" type="text" placeholder="Search.."><br><br>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
     <thead>
       <tr>
         <th>Bil.</th>
         <th>Nama Pemohon</th>
         <th>Kelas Permohonan</th>
         <th>Nama Syarikat</th>
         <th>Tarikh Permohonan</th>
         <th>Kemaskini</th>
         
       </tr>
     </thead>
    
     <tbody id="myTable">
     @if (count($posts)>0)
    @foreach($posts as $post1=>$post)
       <tr >
         <td>{{$post1+1}}.</td>
         <td>{{$post->nama}}</td>
         <td>{{$post->kelas_permohonan}}</td>
         <td>{{$post->nama_syarikat}}</td>
         <td>{{$post->created_at}}</td>
         <td><center><a class="btn" type="button" href="{{route('rayuan.show', $post->id)}}"class="btn btn-primary"><i class="fas fa-edit"></i></a></center></td>
       </tr>
       @endforeach 
     </tbody>
   </table>
  
</div>
                    </div>
                </div>
            </div>
        </div>
 
         <!--     <div class="clearfix">  
                    <div class="card p-3 mt-3 mb-3">        
            <h3><img class="img" style="width:10%" src="{{asset('storage/passport/' . $post->passport)}} " height="150px">      
            <a style="margin-left:18px" href="{{route('permohonan.show', $post->id)}}">{{$post->nama}}</a><pre>
<small> Kelas Permohonan :{{$post->kelas_permohonan}}</small><a align="right" class="btn1" type="button" href="{{route('permohonan.show', $post->id)}}"><i class="fas fa-edit">Kemaskini</i></a>
<small> Nama Syarikat    : {{$post->nama_syarikat}}</small>
<small> Dimohon pada     : {{$post->created_at}}</small></h3>
  </pre>
  
            </div></div>-->
    
    
    @else
        <p>Tiada Permohonan Baru</p>
        @endif 
  @endsection    
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>