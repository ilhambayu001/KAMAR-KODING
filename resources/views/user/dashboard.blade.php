<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashboard</title>

  <!-- Favicons -->
  <link href="adminassets/img/favicon.png" rel="icon">
  <link href="adminassets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
<link href="{{ asset('adminassets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{  asset('adminassets/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('adminassets/css/style.css')}}" rel="stylesheet">
  <link href="{{ asset('adminassets/css/style-responsive.css')}}" rel="stylesheet">
  {{-- Anjir lah nyolong css --}}
   <!-- Favicons -->
   <link href="userassets/img/favicon.png" rel="icon">
   <link href="userassets/img/apple-touch-icon.png" rel="apple-touch-icon">
 
   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 
   <!-- Vendor CSS Files -->
   <link href="userassets/vendor/animate.css/animate.min.css" rel="stylesheet">
   <link href="userassets/vendor/aos/aos.css" rel="stylesheet">
   <link href="userassets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="userassets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
   <link href="userassets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
   <link href="userassets/vendor/remixicon/remixicon.css" rel="stylesheet">
   <link href="userassets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
 
   <!-- Template Main CSS File -->
   <link href="userassets/css/style.css" rel="stylesheet">
  {{-- end Anjir lah nyolong css --}}
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
     <!--header start-->
     <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="/" class="logo"><b>KAMAR<span>KODING</span></b></a>
      
    {{-- tombol profile --}}
   
    {{-- end tombol profile --}}
    {{-- tombol log out --}}
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li> 
            <form class="logout">
          <x-jet-responsive-nav-link style="color: black" href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
            {{ __('Profile') }}
        </x-jet-responsive-nav-link>
      
        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
            <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                {{ __('API Tokens') }}
            </x-jet-responsive-nav-link>
        @endif
            </form>
            </li>
          <li><form class="logout" method="POST" action="{{ route('logout') }}">
            @csrf
            <x-jet-responsive-nav-link style="color: black" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                            this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-jet-responsive-nav-link>
        </form></li>
        </ul>
      </div>
      {{-- end tombol log out --}}
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
       <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                <p class="centered"><a href="{{ route('profile.show') }}"><img src="{{ asset('adminassets/img/ui-sam.jpg')}}" class="img-circle" width="80"></a></p>
                <h5 class="centered"> {{ Auth::user()->name }}</h5>
                <li class="mt">
                  <a href="/redirects">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                  <a href="/redirects/keranjang">
                    <i class="fa fa-tasks"></i>
                    <span>Keranjangku</span>
                    </a>
                </li>
              </ul>
              <!-- sidebar menu end-->
            </div>
          </aside>
          <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">
        <div class="row">
          
          @foreach ($dataLangganan as $langganan)
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="userassets/img/events-1.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">{{$langganan->nama_langganan}}</a></h5>
                <p class="fst-italic text-center">{{$langganan->harga}}</p>
                <p class="card-text">{{$langganan->keterangan}}</p>
                <div class="col text-center">
                  <?php $check=0 ?>
                  @foreach ($langganan->users as $p)
                  @if ($iduser == $p->pivot->user_id && $langganan->id == $p->pivot->langganan_id)
                <?php $check++ ?>  
                    <a href="/redirects/{{$langganan->id}}/kelas  " class="btn btn-success btn-lg">buka</a>
                               
                  @endif
                  @endforeach
                  @if($check == 0)
                  <div id="beli{{$langganan->nama_langganan}}">
                  <form action="" method="POST" enctype="multipart/from-data">
                    @csrf
                   <input type="hidden" name="user_id" value="{{$iduser}}">
                   <input type="hidden" name="nama_order" value="{{$langganan->nama_langganan}}">
                   <input type="hidden" name="harga" value="{{$langganan->harga}}">
                    <input type="submit" href="/redirects/keranjang" class="btn btn-success" value="Beli">
                   </form>
                  </div>
                  @endif
                </div>
              </div>
            </div>
          </div>
          @endforeach
        
        </div>

      </div>
    </section><!-- End Events Section -->
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>KAMAR KODING</strong>. 
        </p>
        <a href="blank.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{ asset('adminassets/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('adminassets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('adminassets/lib/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <script src="{{ asset('adminassets/lib/jquery.ui.touch-punch.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{ asset('adminassets/lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{ asset('adminassets/lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{ asset('adminassets/lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="{{ asset('adminassets/lib/common-scripts.js')}}"></script>
  <!--script for this page-->
  {{-- Script Nyolong --}}
  <!-- Vendor JS Files -->
  <script src="userassets/vendor/aos/aos.js"></script>
  <script src="userassets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="userassets/vendor/php-email-form/validate.js"></script>
  <script src="userassets/vendor/purecounter/purecounter.js"></script>
  <script src="userassets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="userassets/js/main.js"></script>
</body>

</html>
