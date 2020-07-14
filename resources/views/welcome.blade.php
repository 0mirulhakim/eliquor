<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eliquor</title>

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
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.container .btn2  {
  position: absolute;
  top: 80%;
  left: 40%;
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
  left: 60%;
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
  width: 80%;
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
.carousel-item {
  height: 50vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
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

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
    
    <img alt="Selangor logo" src="img/jataselangor.png" style="height: 74px; width: 63px;" title="Selangor">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">e-Liquor PDTK</a>
                </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
       
          <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="{{ url('/status') }}">{{ __('Semak Status') }}</a>
                            </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Hubungi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="img/garispanduan.doc">Garis Panduan</a>
          </li>             
          
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header>
  @foreach($homes as $home)
  <img style=background-image class="projects-section bg-black" alt="" width=100% height=50px>
 
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
      <div class="centered1">
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Permohonan Lesen Baru</h2>
          <p class="lead">Pemohon yang hendak membuat lesen bagi kali pertama.</p>
          <p class="lead">{{$home->data}}</p>
          <a href="{{ url('/baru1') }}" class="btn btn-primary js-scroll-trigger" color="black">Baru</a>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Permohonan Memperbaharui Lesen </h2>
          <p class="lead">Pemohon yang hendak memperbaharui lesen yang sudah tamat tempoh.</p>
          <p class="lead">{{$home->data1}}</p>
          <a href="{{ url('/memperbaharui1') }}" class="btn btn-primary js-scroll-trigger">Memperbaharui</a>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Permohonan Rayuan Lesen</h2>
          <p class="lead">Pemohon yang hendak membuat rayuan permohonan lesen.</p>
          <p class="lead">{{$home->data2}}</p>
          <a href="{{ url('/rayuan1') }}" class="btn btn-primary js-scroll-trigger">Rayuan</a>
        </div>
      </div>
   
     <!-- Slide four - Set the background image for this slide in the line below -->
     <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Semak Status Permohonan </h2>
          <p class="lead">Pemohon yang hendak menyemak status permohonan lesen.</p>
          
          <a href="{{ url('/status') }}" class="btn btn-primary js-scroll-trigger">Semak Status</a>
        </div>
      </div>
      </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>

<!-- Page Content -->
<section class="py">
  <div class="container">
    <h1 class="display-4"></h1>
    <p class="lead">{{$home->pengumuman}}</p>
  </div>
</section>
<section class="py">
  <div class="container">
    <h1 class="display-4"></h1>
    <p class="lead">E-Liquor merupakan sebuah laman web baru untuk memohon lesen minuman keras secara online di Pejabat Daerah/Tanah Klang</p>
  </div>
</section>
  </div>
</div>
      </div>
    </div>
        <html>
<head>
    
</html>

  </header>
 

  <section id="projects" class="projects-section bg-black">
    
@endforeach
<br><br><br><br><br><br>
 
  <section id="qq" class="contact-section bg-black">

  <!-- Contact Section -->
  <br><br><br><br> <marquee><font color="white">PERMOHONAN LESEN MINUMAN KERAS</font> </marquee><br><br><br><br>
  </section>
  <section id="contact" class="contact-section bg-black">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Alamat</h4>
              <hr class="my-4">
              <div class="small text-black-50">Lembaga Perlesenan Minuman Keras,</div>
              <div class="small text-black-50">Tingkat 1,</div>
              <div class="small text-black-50">Pejabat Daerah/Tanah Klang,</div>
              <div class="small text-black-50">Jalan Kota, Kawasan 1, 41902 Klang, Selangor.</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="#">eliquorklang@selangor.gov.my </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Phone</h4>
              <hr class="my-4">
              <div class="small text-black-50">03-3371 1963  </div>
              <div class="small text-black-50">EXT: 215 (Suhana)</div>
              <div class="small text-black-50">EXT: 226 (Firdaus)</div>
            </div>
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
        <a href="#" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-github"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Muhammad Amirul Hakim Bin Azman Pejabat Daerah/Tanah Klang {{ date('Y') }}
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
