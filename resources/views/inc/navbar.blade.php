<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            
    <img alt="Selangor logo" src="img/jataselangor.png" style="height: 74px; width: 63px;" title="Selangor">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('Pejabat Daerah/Tanah Klang', 'E-Liquor PDTK') }}
                </a>
                <div class="w3-xlarge ">
                
          <a class="nav-link js-scroll-trigger" href="{{ url('/') }}"><span><i class="fa fa-home"></i> Home </span></a></div>
              
     
        <ul class="navbar-nav ml-auto">
        
          <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="{{ url('/status') }}">{{ __('Semak Status') }}</a>
                            </li>
          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="img/garispanduan.pdf">Garis Panduan</a>
          </li>             
          
          </li>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        
                            
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

            