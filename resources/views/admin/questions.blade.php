<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>ADMIN - List</title>

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
  {{-- madfacking css nyolong --}}
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 34px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      .bisa {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px  #669999; 
      }
      .banner {
      position: relative;
      height: 300px;
      background-image: url("https://images.hdqwalls.com/download/the-mandalorian-minimalist-art-4k-kj-2560x1600.jpg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.2); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #669999;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #669999;
      color: #669999;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color:  #a3c2c2;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #669999;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #669999;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #669999;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #a3c2c2;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
  {{-- end madfacking css nyolong --}}
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
        <section class="wrapper">

            <div class="container" width="60%">
                <div class="testbox bisa">
                  
                        <p style="color: red">perhatikan peraturan quiz sebagai berikut!</p>
                        <p>jumlah soal diharuskan memiliki <a style="color: red">10</a> buah soal supaya bisa diakses oleh pengguna</p>
                        <p>Jika jumlah soal kurang dari yang ditentukan maka soal <a style="color: red">tidak akan bisa dikerjakan</a> oleh pengguna</p>
                          {{-- Ini Tombol Tambah --}}
                          <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#tambah"><span>Tambah Ujian Baru</span></button>
                          <div id="tambah" class="modal fade" role="dialog">
                       <div class="modal-dialog">
                           <div class="modal-content">
                               <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal">&times;</button>

                               </div>
                               <form action="/redirects/{{$id}}" method="POST" enctype="multipart/from-data">             
                               @csrf
                                   <div class="modal-body">
                                    <input type="hidden" name="exam_id" value="{{$id}}">
                                     <div class="from-group">
                                         <label class="control-label" for="nm_brg" style="color: black"> Soal: </label>
                                         <input type="text" name="soal" class="from-control" id="nm_brg" style="color: black" required>
                                     </div>
                                     <div class="from-group">
                                         <label class="control-label" for="nm_brg" style="color: black"> Jawaban A: </label>
                                         <input type="text" name="jawaban1" class="from-control" id="nm_brg" style="color: black" required>
                                     </div>
                                     <div class="from-group">
                                        <label class="control-label" for="nm_brg" style="color: black"> Jawaban B: </label>
                                        <input type="text" name="jawaban2" class="from-control" id="nm_brg" style="color: black" required>
                                    </div>
                                    <div class="from-group">
                                        <label class="control-label" for="nm_brg" style="color: black"> Jawaban C: </label>
                                        <input type="text" name="jawaban3" class="from-control" id="nm_brg" style="color: black" required>
                                    </div>
                                    <div class="from-group">
                                        <label class="control-label" for="nm_brg" style="color: black"> Jawaban D: </label>
                                        <input type="text" name="jawaban4" class="from-control" id="nm_brg" style="color: black" required>
                                    </div>
                                    <div class="from-group">
                                        <label class="control-label" for="jawaban_benar" style="color: black">Jawaban yang benar: </label>
                                         <select class="from-control" name="jawaban_benar" style="color: black">
                                            <option value="optionA" style="color: black">Jawaban A</option>
                                            <option value="optionB" style="color: black">Jawaban B</option>
                                            <option value="optionC" style="color: black">Jawaban C</option>
                                            <option value="optionD" style="color: black">Jawaban D</option>
                                         </select>
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
            @foreach ($dataQuestions as $question)
          <div class="container">
            <div class="testbox">
              <div class="bisa">
                  <div class="form-group">
                    <label for="nama">{{$question->soal}}</label>
                  </div>
                  <div class="form-group">
                  <p>A. {{$question->jawaban1}}</p>
                  <p>B. {{$question->jawaban2}}</p>
                  <p>C. {{$question->jawaban3}}</p>
                  <p>D. {{$question->jawaban4}}</p>
                  <br>
                  <p>{{$question->jawaban_benar}}</p>
                  </div>
                  <div class="form-group">
                      <!-- ini tombol edit -->
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit{{$question->id}}" data-formid="{{$question->id}}">Edit</button>
                      <div id="edit{{$question->id}}" class="modal fade" role="dialog" id="{{$question->id}}">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      
                                  </div>
                                  <form action="" method="POST" enctype="multipart/from-data">
                                  @method('PUT')
                                  @csrf
                                  <input type="hidden" name="id" value="{{$question->id}}">
                                  <input type="hidden" name="exam_id" value="{{$id}}">    
                                  <div class="modal-body">
                                        <div class="from-group">
                                            <label class="control-label" for="nm_brg" style="color: black"> Soal: </label>
                                            <input type="text" name="soal" class="from-control" id="nm_brg" style="color: black" value="{{$question->soal}}" required>
                                        </div>
                                        <div class="from-group">
                                            <label class="control-label" for="nm_brg" style="color: black"> Jawaban A: </label>
                                            <input type="text" name="jawaban1" class="from-control" id="nm_brg" style="color: black" value="{{$question->jawaban1}}" required>
                                        </div>
                                        <div class="from-group">
                                           <label class="control-label" for="nm_brg" style="color: black"> Jawaban B: </label>
                                           <input type="text" name="jawaban2" class="from-control" id="nm_brg" style="color: black" value="{{$question->jawaban2}}" required>
                                       </div>
                                       <div class="from-group">
                                           <label class="control-label" for="nm_brg" style="color: black"> Jawaban C: </label>
                                           <input type="text" name="jawaban3" class="from-control" id="nm_brg" style="color: black" value="{{$question->jawaban3}}" required>
                                       </div>
                                       <div class="from-group">
                                           <label class="control-label" for="nm_brg" style="color: black"> Jawaban D: </label>
                                           <input type="text" name="jawaban4" class="from-control" id="nm_brg" style="color: black" value="{{$question->jawaban4}}" required>
                                       </div>
                                       <div class="from-group">
                                           <label class="control-label" for="jawaban_benar" style="color: black">Jawaban yang benar: </label>
                                            <select class="from-control" name="jawaban_benar" style="color: black">
                                               <option value="optionA" style="color: black">Jawaban A</option>
                                               <option value="optionB" style="color: black">Jawaban B</option>
                                               <option value="optionC" style="color: black">Jawaban C</option>
                                               <option value="optionD" style="color: black">Jawaban D</option>
                                            </select>
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
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus{{$question->id}}" data-formid="{{$question->id}}">Hapus</button>
                      <div id="hapus{{$question->id}}" class="modal fade" role="dialog" id="{{$question->id}}">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                  <form action="" method="POST" enctype="multipart/from-data">
                                  @method('DELETE')
                                  @csrf
                                  <input type="hidden" name="id" value="{{$question->id}}">
                                  <h4 class="modal-title">yakin Hapus?</h4>
                                          <input type="submit" class="btn btn-success pull-right" value="Hapus">
                                    
                                      </form>
                                  </div>
                                      </div>
                                      </div>
                                      </div>
                                      {{-- end tombol hapus --}}
                  </div>
              </div>
              </div>
            </div>
            @endforeach
           
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
    </section>
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
