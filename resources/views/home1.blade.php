@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
            <h1 class="m-0 text-dark">Jumlah Permohonan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/posts') }}">Home</a></li>
              <li class="breadcrumb-item active">Permohonan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   
 
  <?php

    $conn = mysqli_connect("localhost", "root", "", "eliquor"); 
   
   $sql_qry="SELECT COUNT(*) as count FROM permohonan WHERE jenis_permohonan='1' AND status_permohonan_id='1'";

$duration = $conn->query($sql_qry);
while($record = $duration->fetch_array()){
    $total = $record['count'];
}
?>
<?php
  $sql_qry="SELECT COUNT(*) as count FROM permohonan WHERE jenis_permohonan='2' AND status_permohonan_id='1'";

$duration = $conn->query($sql_qry);
while($record = $duration->fetch_array()){
    $total1 = $record['count'];
}
?>
<?php
  $sql_qry="SELECT COUNT(*) as count FROM permohonan WHERE jenis_permohonan='3' AND status_permohonan_id='1'";

$duration = $conn->query($sql_qry);
while($record = $duration->fetch_array()){
    $total2 = $record['count'];
}
?>
<?php
  $sql_qry="SELECT COUNT(*) as count FROM permohonan WHERE status_permohonan_id='1'";

$duration = $conn->query($sql_qry);
while($record = $duration->fetch_array()){
    $total3 = $record['count'];
}
?>
<?php
  $sql_qry="SELECT COUNT(*) as count FROM permohonan WHERE status_permohonan_id='3'";

$duration = $conn->query($sql_qry);
while($record = $duration->fetch_array()){
    $total4 = $record['count'];
}
?>
<?php
  $sql_qry="SELECT COUNT(*) as count FROM permohonan WHERE status_permohonan_id='4'";

$duration = $conn->query($sql_qry);
while($record = $duration->fetch_array()){
    $total5 = $record['count'];
}
?>
  
  

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $total3?></h3>

                <p>Permohonan Baru</p>
              </div>
              <div class="icon">
                <i class="ion ion-clipboard"></i>
              </div>
              <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-up"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-olive">
              <div class="inner">
                <h3><?php echo $total?><sup style="font-size: 20px"></sup></h3>

                <p>Permohonan Lesen Baru</p>
              </div>
              <div class="icon">
                <i class="ion ion-folder"></i>
              </div>
              <a href="{{route('permohonan.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $total1?></h3>

                <p>Permohonan Memperbaharui Lesen</p>
              </div>
              <div class="icon">
                <i class="ion ion-folder"></i>
              </div>
              <a href="{{route('memperbaharui.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-orange">
              <div class="inner">
                <h3><?php echo $total2?></h3>

                <p>Permohonan Rayuan Lesen</p>
              </div>
              <div class="icon">
                <i class="ion ion-folder"></i>
              </div>
              <a href="{{route('rayuan.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
       <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $total4?></h3>

                <p>Permohonan Yang Diluluskan</p>
              </div>
              <div class="icon">
                <i class="ion ion-checkmark"></i>
              </div>
              <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-up"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $total5?><sup style="font-size: 20px"></sup></h3>

                <p>Permohonan Yang Ditolak</p>
              </div>
              <div class="icon">
                <i class="ion ion-close"></i>
              </div>
              <a href="{{route('permohonan.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
         
          <!-- ./col -->
          
          <!-- ./col -->
        </div>
      
              
@endsection
