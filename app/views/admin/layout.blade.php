<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dishubparpostel</title>
        <!-- Bootstrap core CSS -->
        <link href="{{asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet" />
        @section('styleimport')
        <link href="{{asset('bootstrap/filterable/src/bootstrap-combined.no-icons.min.css')}}" rel="stylesheet">
        <link href="{{asset('bootstrap/filterable/fontawesome3/content/Content/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('bootstrap/filterable/test/libs/bootstrap-editable.css')}}" rel="stylesheet">
        <link href="{{asset('bootstrap/filterable/src/bootstrap-filterable.css')}}" rel="stylesheet">
        <link href="{{asset('bootstrap/filterable/src//main.css')}}" rel="stylesheet">
        @show
        <style type="text/css">
        body{
          font-size: 13px;
        }
        </style>
       </head>
    <body>
      <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <?php
              $profile = app\models\DataInstansi::find(1);
            ?>  
            <a class="navbar-brand" href="#">{{$profile->kabkota()->first()->name}}</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="{{URL::to('/admin/dashboard')}}"> Dashboard</a></li>
              <li><a href="{{URL::to('/admin/pendataan')}}"> Pendataan</a></li>
              <li><a href="{{URL::to('/admin/pengaturan')}}"> Pengaturan</a></li>
              <li><a href="{{URL::to('logout')}}">Logout</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        @yield('pendataan')
        @yield('pengaturan')
      </nav>
      <div class="container">
          @yield('content')
      </div>
      <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="{{asset('bootstrap/1.10.10/jquery-1.11.3.min.js')}}" ></script>
      <script src="{{asset('bootstrap/css/bootstrap.js')}}" ></script>
      
      @section('scriptimport')
      <script src="{{asset('bootstrap/filterable/test/libs/bootstrap-editable.min.js')}}"></script>
      <script src="{{asset('bootstrap/filterable/src/filterable-utils.js')}}"></script>
      <script src="{{asset('bootstrap/filterable/src/filterable-cell.js')}}"></script>
      <script src="{{asset('bootstrap/filterable/src/filterable-row.js')}}"></script>
      <script src="{{asset('bootstrap/filterable/src/filterable.js')}}"></script>
      <script type="text/javascript">
        $('table').filterable();
      </script>
      @show

      @yield('script')
    </body>
</html>