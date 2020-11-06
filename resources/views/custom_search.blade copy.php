<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Eliquor</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ asset('/home') }}" class="nav-link">Home</a>
      </li>
     
    </ul>

    <!-- SEARCH FORM -->
   

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
     
      <!-- Notifications Dropdown Menu -->
       
          
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset('/home') }}" class="brand-link">
      
           <img src="{{ asset('img/jataselangor.png') }}" alt="selangor" class="brand-image"
           style="opacity: .8">
      <span class="brand-text font-weight-light">PDT Klang</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/img/6.png') }}"class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        
        <a  href="{{ url('/home') }}" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{ url('/pengumuman') }}" class="nav-link">
                  <i class="far fa-edit nav-icon"></i>
                  <p>Pengumuman</p>
                </a>
              </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Permohonan Baru
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="{{route('permohonan.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lesen Baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('memperbaharui.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Memperbaharui Lesen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('rayuan.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rayuan Lesen</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Dalam Tindakan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="{{route('sah.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lesen Baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('sah1.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Memperbaharui Lesen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('sah2.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rayuan Lesen</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="{{route('statuses.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Sejarah
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li> </li>
          <li class="nav-item">
            <a href="{{ url('/customsearch') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Laporan
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
         
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
          <div class="nav-link" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="nav-icon far fa-circle text-danger"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
           
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel 5.8 - Individual Column Search in Datatables using Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">    
     <br />
     <h3 align="center">Laporan Sistem E-Liquor</h3>
     <br />
            <br />
            <div class="no-print">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="form-group">
                        <select name="filter_tahun" id="filter_tahun" class="form-control" required>
                            <option value="">Pilih Tahun</option>
                            <option value="{{ date('Y') }}">{{ date('Y') }}</option>
                            <option value="{{ date('Y')-1 }}">{{ date('Y')-1 }}</option>
                            <option value="{{ date('Y')-2 }}">{{ date('Y')-2 }}</option>
                            
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <select name="filter_status" id="filter_status" class="form-control" required>
                            <option value="">Pilih Jenis Permohonan</option>
                            @foreach($status_name as $status)

                            <option value="{{ $status->id }}">{{ $status->jenis_permohonan_nama }}</option>

                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group" align="center">
                        <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>

                        <button type="button" name="reset" id="reset" class="btn btn-default">Reset</button>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            </div>
            <br />
   <div class="table-responsive">
    <table id="customer_data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Bil</th>
                            <th>Nama Pemohon & No.KP/Passport</th>
                            <th>Nama Perniagaan & Alamat</th>
                            <th>Keputusan</th>
                            <th>Ulasan</th>
                            
                        </tr>
                    </thead>
                </table>
   </div>
            <br />
            <br />
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
    fill_datatable();
    function fill_datatable(filter_tahun = '', filter_status = '')
    {
     
        var dataTable = $('#customer_data').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
                url: "{{ route('customsearch.index') }}",
                data:{filter_tahun:filter_tahun, filter_status:filter_status}
            },
            columns: [
    {
              data: function ( data, type, full, meta ) {
    return  meta.row + 1;
} },
                {   data: "nama",
        render: function ( data, type, row ) {
            return '<b>'+ row.nama + '</b><br>No.K/P:' + row.no_ic+'<br>Passport:' + row.passport1 +'<br><b>No.Rujukan: '+ row.no_rujukan+'<br>STATUS LESEN : <br> Permohonan '+ row.jenis_permohonan_nama+'<br>NO.TEL : '+ row.no_phone+'</b>' ;
        }
    },
    {   data: "alamat",
        render: function ( data, type, row ) {
            return '<b>'+ row.nama_syarikat + '</b><br>' + row.alamat_premis ;
        }
    },
    {   data: "alamat",
        render: function ( data, type, row ) {
            return row.jenis_permohonan_nama +'<br>('+row.tarikh + ')<br><b>' + row.status_nama+'</b>' ;
        }
    },
                {
                    data:'catatan',
                    name:'catatan',
                }
            ],
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    }
    $('#filter').click(function(){
        var filter_tahun = $('#filter_tahun').val();
        var filter_status = $('#filter_status').val();
      
        if(filter_tahun != '' &&  filter_status != '')
        {
            $('#customer_data').DataTable().destroy();
            fill_datatable(filter_tahun, filter_status);
        }
        else
        {
            alert('Select Both filter option');
        }
    });
    $('#reset').click(function(){
        $('#filter_tahun').val('');
        $('#filter_status').val('');
        $('#customer_data').DataTable().destroy();
        fill_datatable();
    });
});
</script>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


  </div>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<div class="row no-print">
                <div class="col-12">
           <center><a type="button" href="javascript:window.print()" class="btn1 btn-default"><i class="fas fa-print"></i>Print</a></center>
           </div>
</body>
</html>