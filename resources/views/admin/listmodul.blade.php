<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>List - Modul</title>

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
      <section class="wrapper site-min-height">
        {{-- ini css someshit isi pengguna --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>
          body {
              color: #566787;
              background: #f5f5f5;
              font-family: 'Varela Round', sans-serif;
              font-size: 13px;
          }
          .table-responsive {
              margin: 30px 0;
          }
          .table-wrapper {
              min-width: 1000px;
              background: #fff;
              padding: 20px 25px;
              border-radius: 3px;
              box-shadow: 0 1px 1px rgba(0,0,0,.05);
          }
          .table-title {
              padding-bottom: 15px;
              background: #299be4;
              color: #fff;
              padding: 16px 30px;
              margin: -20px -25px 10px;
              border-radius: 3px 3px 0 0;
          }
          .table-title h2 {
              margin: 5px 0 0;
              font-size: 24px;
          }
          .table-title .btn {
              color: #566787;
              float: right;
              font-size: 13px;
              background: #fff;
              border: none;
              min-width: 50px;
              border-radius: 2px;
              border: none;
              outline: none !important;
              margin-left: 10px;
          }
          .table-title .btn:hover, .table-title .btn:focus {
              color: #566787;
              background: #f2f2f2;
          }
          .table-title .btn i {
              float: left;
              font-size: 21px;
              margin-right: 5px;
          }
          .table-title .btn span {
              float: left;
              margin-top: 2px;
          }
          table.table tr th, table.table tr td {
              border-color: #e9e9e9;
              padding: 12px 15px;
              vertical-align: middle;
          }
          table.table tr th:first-child {
              width: 60px;
          }
          table.table tr th:last-child {
              width: 100px;
          }
          table.table-striped tbody tr:nth-of-type(odd) {
              background-color: #fcfcfc;
          }
          table.table-striped.table-hover tbody tr:hover {
              background: #f5f5f5;
          }
          table.table th i {
              font-size: 13px;
              margin: 0 5px;
              cursor: pointer;
          }	
          table.table td:last-child i {
              opacity: 0.9;
              font-size: 22px;
              margin: 0 5px;
          }
          table.table td a {
              font-weight: bold;
              color: #566787;
              display: inline-block;
              text-decoration: none;
          }
          table.table td a:hover {
              color: #2196F3;
          }
          table.table td a.settings {
              color: #2196F3;
          }
          table.table td a.delete {
              color: #F44336;
          }
          table.table td i {
              font-size: 19px;
          }
          table.table .avatar {
              border-radius: 50%;
              vertical-align: middle;
              margin-right: 10px;
          }
          .status {
              font-size: 30px;
              margin: 2px 2px 0 0;
              display: inline-block;
              vertical-align: middle;
              line-height: 10px;
          }
          .text-success {
              color: #10c469;
          }
          .text-info {
              color: #62c9e8;
          }
          .text-warning {
              color: #FFC107;
          }
          .text-danger {
              color: #ff5b5b;
          }
          .pagination {
              float: right;
              margin: 0 0 5px;
          }
          .pagination li a {
              border: none;
              font-size: 13px;
              min-width: 30px;
              min-height: 30px;
              color: #999;
              margin: 0 2px;
              line-height: 30px;
              border-radius: 2px !important;
              text-align: center;
              padding: 0 6px;
          }
          .pagination li a:hover {
              color: #666;
          }	
          .pagination li.active a, .pagination li.active a.page-link {
              background: #03A9F4;
          }
          .pagination li.active a:hover {        
              background: #0397d6;
          }
          .pagination li.disabled i {
              color: #ccc;
          }
          .pagination li i {
              font-size: 16px;
              padding-top: 6px
          }
          .hint-text {
              float: left;
              margin-top: 10px;
              font-size: 13px;
          }
          </style>
          <script>
          $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
          });
          </script> 
        {{-- end css someshit isi pengguna --}}
        {{-- ini isi list pengguna --}}
        <div class="container-xl">
          <div class="table-responsive">
              <div class="table-wrapper">
                  <div class="table-title">
                      <div class="row">
                          <div class="col-sm-5">
                              <h2>Modul <b>    Management</b></h2>
                          </div>
                          <div class="col-sm-7">
                              {{-- Ini Tombol Tambah --}}
                            <a class="btn btn-secondary" data-toggle="modal" data-target="#tambah"><i class="material-icons">&#xE147;</i> <span>Tambah Modul Baru</span></a>
                             <div id="tambah" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      
                                  </div>
                                  <form action="" method="POST" enctype="multipart/from-data">  
                                                  
                                  @csrf
                                      <div class="modal-body">
                                        <div class="from-group">
                                            <label class="control-label" for="materi_id" style="color: black">Nama Materi: </label>
                                             <select class="from-control" name="materi_id" style="color: black">
                                                @foreach ($dataMateri as $l)
                                                <option value="{{$l->id}}" style="color: black">{{$l->nama_materi}}</option>
                                                @endforeach
                                             </select>
                                          </div>
                                        <div class="from-group">
                                            <label class="control-label" for="nm_brg" style="color: black"> Nama modul: </label>
                                            <input type="text" name="nama_modul" class="from-control" id="nm_brg" style="color: black" required>
                                        </div>
                                        <div class="from-group">
                                            <label class="control-label" for="nm_brg" style="color: black"> link modul: </label>
                                            <input type="text" name="link_modul" class="from-control" id="nm_brg" style="color: black" required>
                                        </div>
                                      <div class="modal-footer">
                                          <button type="reset" class="btn btn-danger">Reset</button>
                                          <input type="submit" class="btn btn-success" value="Save">
                                      </div>
                                      </div>
                                      </form>
                                      </div>
                                      </div>
                                      </div>
                                      {{-- end tombol tambah --}}	
                        </div>
                      </div>
                  </div>
                  <table class="table table-striped table-hover">
                      <thead>
                          <tr>
                              <th>ID Modul</th>
                              <th>Nama Materi</th>
                              <th>Nama Modul</th>						
                              <th>Link Modul</th>
                              <th>Dibuat Pada</th>
                              <th>Actions</th>
                          </tr>
                      </thead>
                      <tbody>
                         @foreach ($dataModul as $d)
                         <tr>
                          <td>{{$d->id}}</td>
                          @foreach ($dataMateri as $p)
                              @if ($p->id == $d->materi_id)
                              <td><a>{{$p->nama_materi}}</a></td>
                              @endif
                          @endforeach
                          <td><a>{{$d->nama_modul}}</a></td>
                          <td><a>{{$d->link_modul}}</a></td>
                          <td>{{$d->created_at}}</td> 
                            <td>
                             <!-- ini tombol edit -->
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit{{$d->id}}" data-formid="{{$d->id}}">Edit</button>
                      <div id="edit{{$d->id}}" class="modal fade" role="dialog" id="{{$d->id}}">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      
                                  </div>
                                  <form action="" method="post" enctype="multipart/from-data">
                                  @method('PUT')
                                  @csrf
                                  <input type="hidden" name="id" value="{{$d->id}}">
                                  <div class="modal-body">
                                    <div class="from-group">
                                        <label class="control-label" for="materi_id" style="color: black">Nama Materi: </label>
                                         <select class="from-control" name="materi_id" style="color: black">
                                            @foreach ($dataMateri as $l)
                                            <option value="{{$l->id}}" style="color: black">{{$l->nama_materi}}</option>
                                            @endforeach
                                         </select>
                                      </div>
                                    <div class="from-group">
                                        <label class="control-label" for="nm_brg" style="color: black"> Nama modul: </label>
                                        <input type="text" name="nama_modul" class="from-control" id="nm_brg" style="color: black" value="{{$d->nama_modul}}" required>
                                    </div>
                                    <div class="from-group">
                                        <label class="control-label" for="nm_brg" style="color: black"> link modul: </label>
                                        <input type="text" name="link_modul" class="from-control" id="nm_brg" style="color: black" value="{{$d->link_modul}}" required>
                                    </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <input type="submit" class="btn btn-success" value="Save">
                                </div>
                                      </div>
                                      </form>
                                      </div>
                                      </div>
                                      </div>
                                      {{-- end tombol edit --}}
                                      
                              <!-- ini tombol hapus -->
                       <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus{{$d->id}}" data-formid="{{$d->id}}">Hapus</button>
                      <div id="hapus{{$d->id}}" class="modal fade" role="dialog" id="{{$d->id}}">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                  <form action="" method="POST" enctype="multipart/from-data">
                                  @method('DELETE')
                                  @csrf
                                  <input type="hidden" name="id" value="{{$d->id}}">
                                  <h4 class="modal-title">yakin Hapus?</h4>
                                          <input type="submit" class="btn btn-success pull-right" value="Hapus">
                                    
                                      </form>
                                  </div>
                                      </div>
                                      </div>
                                      </div>
                                      {{-- end tombol hapus --}}
                          </td>
                      </tr>
                         @endforeach
                         
                      </tbody>
                  </table>
                  
              </div>
          </div>
      </div> 
        {{-- ini end isi list pengguna --}}
      </section>
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

</body>

</html>
