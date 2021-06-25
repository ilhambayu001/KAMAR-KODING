<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashboard</title>

  <!-- Favicons -->
  <link href="adminassets/img/favicon.png" rel="icon">
  <link href="adminassets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="adminassets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="adminassets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="adminassets/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="adminassets/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="adminassets/css/style.css" rel="stylesheet">
  <link href="adminassets/css/style-responsive.css" rel="stylesheet">
  <script src="adminassets/lib/chart-master/Chart.js"></script>
  <!-- Nyolong CSS AdminLTE -->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('adminlteassets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('adminlteassets/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlteassets/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('adminlteassets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('adminlteassets/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('adminlteassets/plugins/summernote/summernote-bs4.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlteassets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlteassets/css/adminlte.min.css') }}">
    <!-- End: Nyolong CSS AdminLTE -->

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
        <a href="index.html" class="logo"><b>KAMAR<span>KODING</span></b></a>
        
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
              <a href="javascript:;">
                <i class="fa fa-cogs"></i>
                <span>Data Pengguna</span>
                </a>
              <ul class="sub">
                <li><a class="active" href="/redirects/listpengguna">List Pengguna</a></li>
                <li><a href="/redirects/listorder">List Order</a></li>
                <li><a href="/redirects/listpembayaran">List Pembayaran</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-tasks"></i>
                <span>Kontrol Kelas</span>
                </a>
              <ul class="sub">
                <li><a href="/redirects/listkelas">List Kelas</a></li>
                <li><a href="/redirects/tambahkelas">Tambah Kelas Pengguna</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-book"></i>
                <span>Materi & Modul & Quiz</span>
                </a>
              <ul class="sub">
                <li><a href="/redirects/listmateri">List Materi</a></li>
                <li><a href="/redirects/listmodul">List Modul</a></li>
                <li><a href="/redirects/listexams">List Exams</a></li>
              </ul>
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
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>Jumlah Pengguna yang Daftar Perbulan</h3>
            </div>
            <div class="custom-bar-chart">
              <ul class="y-axis">
                <li><span>500</span></li>
                <li><span>250</span></li>
                <li><span>100</span></li>
                <li><span>50</span></li>
                <li><span>20</span></li>
                <li><span>0</span></li>
              </ul>
              @if ($tanggal < 8)
              <div class="bar">
                <div class="title">JAN</div>
                <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">{{$dataBulan['Januari']}}%</div>
              </div>
              <div class="bar ">
                <div class="title">FEB</div>
                <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">{{$dataBulan['Februari']}}%</div>
              </div>
              <div class="bar ">
                <div class="title">MAR</div>
                <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">{{$dataBulan['Maret']}}%</div>
              </div>
              <div class="bar ">
                <div class="title">APR</div>
                <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">{{$dataBulan['April']}}%</div>
              </div>
              <div class="bar">
                <div class="title">MAY</div>
                <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">{{$dataBulan['Mei']}}%</div>
              </div>
              <div class="bar ">
                <div class="title">JUN</div>
                <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">{{$dataBulan['Juni']}}%</div>
              </div>
              <div class="bar">
                <div class="title">JUL</div>
                <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">{{$dataBulan['Juli']}}%</div>
              </div>
              @else
              <div class="bar">
                <div class="title">AUG</div>
                <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">{{$dataBulan['Agustus']}}%</div>
              </div>
              <div class="bar">
                <div class="title">SEP</div>
                <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">{{$dataBulan['September']}}%</div>
              </div>
              <div class="bar">
                <div class="title">OCT</div>
                <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">{{$dataBulan['Oktober']}}%</div>
              </div>
              <div class="bar">
                <div class="title">NOV</div>
                <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">{{$dataBulan['November']}}%</div>
              </div>
              <div class="bar">
                <div class="title">DES</div>
                <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">{{$dataBulan['Desember']}}%</div>
              </div>
              @endif
              
            </div>
            <!--custom chart end-->
            <div class="row mt">
         
            </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
          <!-- <div class="col-lg-3 ds">
           
          </div> -->
          <!-- /col-lg-3 -->
          <!-- **********************************************NYOLONG CARD********************************************** -->
          
          <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{$dataOrder->count()}}</h3>

            <p>Jumlah Order Bulan Ini</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="/redirects/listorder" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{$Income}}<sup style="font-size: 20px"></sup></h3>

            <p>Ekspetasi Income</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="/redirects/listorder" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{$dataUser->count()}}</h3>

            <p>Jumlah Users</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="/redirects/listpengguna" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{$dataPembayaran->count()}}</h3>

            <p>Pembayaran Mengunggu Konfirmasi</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="/redirects/listpembayaran" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
          <!-- **********************************************ED: NYOLONG CARD********************************************** -->
          <div class="col-lg-6">
           <div>
           <!-- ******************************DONAT CHART******************************* -->
            <!-- DONUT CHART -->
            <div class="card card-danger" style="height: 400px;">
              <div class="card-header">
                <h3 class="card-title">Kelas Favorit</h3>
              </div>
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 300px; height: 300px; max-height: 300px;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          <!-- ******************************ED: DONAT CHART****************************** -->
          <!-- //-------------
    //- ***********************************************************************************DONUT CHART***********************************************************************************-
    //------------- -->
    <script src="adminlteassets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="adminlteassets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="adminlteassets/plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE App -->
    <script src="adminlteassets/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="adminlteassets/js/demo.js"></script>

    <!-- DONAT CHART -->
  <script>
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
        @foreach ($dataLangganan as $langgan)
          '{{$langgan->nama_langganan}}',
        @endforeach
      ],
      datasets: [
        {
          data: [
            @foreach ($dataLangganan as $donat)
              {{$donat->users->count()}},
            @endforeach
          ],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
  </script>
  <!-- ED: DONAT CHART -->
  <!-- //-------------
    //- ***********************************************************************************ED: DONUT CHART***********************************************************************************-
    //------------- -->
           </div>
        </div>
        <div class="col-lg-6">
           <!-- CALENDAR-->
           <div id="calendar" class="mb">
              <div class="panel green-panel no-margin">
                <div class="panel-body" style="height: 400px;">
                  <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                    <div class="arrow"></div>
                    <h3 class="popover-title" style="disadding: none;"></h3>
                    <div id="date-popover-content" class="popover-content"></div>
                  </div>
                  <div id="my-calendar"></div>
                </div>
              </div>
            </div>
            <!-- / calendar -->
          </div>
        </div>
        
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="adminassets/lib/jquery/jquery.min.js"></script>

  <script src="adminassets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="adminassets/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="adminassets/lib/jquery.scrollTo.min.js"></script>
  <script src="adminassets/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="adminassets/lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="adminassets/lib/common-scripts.js"></script>
  <script type="text/javascript" src="adminassets/lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="adminassets/lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="adminassets/lib/sparkline-chart.js"></script>
  <script src="adminassets/lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to KAMAR KODING!',
        // (string | mandatory) the text inside the notification
        text: 'Ambil Laptop mu dan kopi mu, mari ngoding bersama kami.',
        // (string | optional) the image to display on the left
        image: 'adminassets/img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
    
  </script>
  
</body>

</html>
