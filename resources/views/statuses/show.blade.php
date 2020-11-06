@extends('layouts.admin')

@section('content')
<style>

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  
}
th, td {
  padding: 15px;
  text-align: left;
  height: 50px;
  vertical-align: bottom;
}
th{
    font-weight: normal;
    height: 50px;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: 120px;
}

div.desc {
  padding: 15px;
  text-align: center;
}
.btn1 {
  box-shadow: 0 .1875rem .1875rem 0 rgba(0,0,0,.1) !important;
  padding: 1.25rem 2rem;
  font-family: 'Varela Round';
  font-size: 80%;
  text-transform: uppercase;
  letter-spacing: .15rem;
  border: 0;
 
}
.btn2 {
  box-shadow: 0 .1875rem .1875rem 0 rgba(0,0,0,.1) !important;
  padding: 1.25rem 2rem;
  font-family: 'Varela Round';
  font-size: 80%;
  text-transform: uppercase;
  letter-spacing: .15rem;
  border: 0;
  display:inline-block;
}

</style><br><br>
    
    <table align="center">
    <h2 align="center">BUTIRAN PEMOHON</h2>
    <tr>
    <th bgcolor="#707070" width="30%">Jenis Permohonan :</th>
    <th><?php if( $post->status == 1 ){
                                     echo "Dalam Semakan";
                        }else if( $post->status == 2 ){
                                     echo "Permohonan Diterima & Dalam Tindakan";
                        }else if( $post->status == 3 ){
                                        echo "Permohonan Diluluskan";
                        }else{
                                     echo "Permohonan Ditolak";
                        }?></th>
  </tr>
    <tr>
    <th bgcolor="#707070" width="30%">Nama Staff :</th>
    <th>{{$post->nama_staff}}</th>
  </tr>
  <tr>
    <th bgcolor="#707070" width="30%">Id Permohonan</th>
    <th>{{$post->permohonan_id}}</th>
  </tr>
  
</table>



    
   





<br><br>
 <!-- this row will not appear when printing -->
 <div class="row no-print">
                <div class="col-12">
    <!--       <center><button type="button" onclick="clickHandler()"target="_blank"  class="btn1 btn-default"><i class="fas fa-print"></i>Print</button></center>
       <br>    <center><a  href="{{route('permohonan.edit', $post->id=$post->permohonan_id)}}" target="_blank" class="btn2 btn-default"><i class="fas fa-edit"></i>Edit</a></center> -->
<script>
    function clickHandler() {
        window.addEventListener("load", window.print());
    }
    
</script>
    
   
   
  @endsection      