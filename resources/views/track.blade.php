
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            * {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */

.column {
  float: left;
  width: 33.10%;
  padding: 0px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
.column1 {
    
  float: left;
  width: 33.33%;
  padding: 10px;
  font-family:'Varela Round';
}

/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  
}

            .m-b-md {
                margin-bottom: 30px;
            }
            .dropbtn {
  background-color: #fffff;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}



.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.centered {
  background-color: black;
  color:white;
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-family:'Varela Round';
}
.centered1 {
  background-color: black;
  color:white;
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.container .btn2  {
  position: absolute;
  top: 80%;
  left: 44%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.container .btn1  {
  position: absolute;
  top: 80%;
  left: 55%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.container .btn2:hover {
  background-color: black;
}
.container .btn1:hover {
  background-color: black;
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
table {
  background-color:white;
  border-collapse: collapse;
  width: 100%;
   margin-left: 0px;
      margin-right: 50px;
}

th, td {
  text-align: left;
  padding: 10px;
}

th {
  background-color: #333;
  color: white;
} 

.btn2 {
  box-shadow: 0 .1875rem .1875rem 0 rgba(0,0,0,.1) !important;
  padding: 1.25rem 2rem;
  font-family: 'Varela Round';
  font-size: 80%;
  text-transform: uppercase;
  letter-spacing: .15rem;
  border: 0;
}

.credit {
  position: absolute;
  bottom: -280px;
  right: 16px;
  color:white;
}
.btn-primary {
  background-color: $primary;
  &:hover {
    background-color: darken($primary, 10%);
  }
  &:focus {
    background-color: darken($primary, 10%);
    color: white;
  }
  &:active {
    background-color: darken($primary, 15%) !important;
  }
}

.show {display: block;}
        </style>
    </head>
    <body>
    
                     

    

                
            </div>
        </div>
        <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Grayscale - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">

  <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            
    <img alt="Selangor logo" src="img/jataselangor.png" style="height: 74px; width: 63px;" title="Selangor">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('Pejabat Daerah/Tanah Klang', 'Pejabat Daerah/Tanah Klang') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link " href="{{ url('/') }}" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ __('Permohonan') }} <span class="caret"></span>
                                </a>

                              
                              
                            </li>
                            
                           </div>
            @endif

    

                
            </div>
        </div>
                
            </div>
        </div>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<section id="about" class="about-section text-center">
    <div class="container">
      
        <div class="col-lg-8 mx-auto">
        @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

  @if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif
          <h2 class="text-white mb-4">Semak Status Permohonan</h2>
          <p class="text-white-50">Sila masukkan no.rujukan / kad pengenalan untuk menyemak status permohonan anda.</p>
          <form action="{{URL::to('/search')}}" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Contoh: 2018/1/3"minlength="5" maxlength="12"> <span class="input-group-btn">
          
            <button type="submit" class="btn btn-primary mx-auto">Semak</button>
                <span class="glyphicon glyphicon-search"></span>
            </button>
            
        </span>
    </div>
    <br><br><br> 
</form>
</div>

    @if(isset($details))
        
    <h2 style="color:white;">Semakan status</h2>
    <table class="table table-striped">
        <thead>
            <tr>
            <th>Bil</th>
                <th>Nama</th>
                <th>No. KP/Passport</th>
                <th>Status Permohonan</th>
                <th>Tarikh</th>
                <th>Catatan </th>

            </tr>
        </thead>
        <tbody>
            @foreach($details as $user=> $user1)
         
            <tr>
            <td>{{$user+1}}</td>
                <td>{{$user1->nama}}</td>
                <td>{{$user1->no_ic}}{{$user1->passport1}}</td>
                <td>{{$user1->status_nama}} </td>
            <td>{{$user1->created_at}}</td>
            <td>{!! nl2br(e($user1->catatan)) !!}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>
    @endif

        </div>
      </div>
      
  
      <br><br><br>  <br><br><br>  <br><br><br>
  </section>
 
  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Pejabat Daerah/Tanah Klang 2020
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>

</body>

</html>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        
    </body>
</html>
