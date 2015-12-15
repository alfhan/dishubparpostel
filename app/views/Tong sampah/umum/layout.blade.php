<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>Dishubparpostel</title>
        <!-- Bootstrap core CSS -->
         <link href="{{asset('bootstrap/css/jquery.min.css')}}" rel="stylesheet" />
        <link href="{{asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet" />
        <link href="{{asset('bootstrap/css/navbar-fixed-top.css')}}" rel="stylesheet" />
        
        <script src="css/ie-emulation-modes-warning.js"></script>

       </head>
    <body>
        <!-- Static navbar -->
        <div class="navbar navbar-default navbar-fixed-top" >
            <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{URL::to('/')}}">Dishubparpostel</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{URL::to('tower_bts/')}}">Tower BTS</a></li>
                        <li><a href="{{URL::to('wartel/')}}">Wartel</a></li>
                        <li><a href="{{URL::to('warnet/')}}">Warnet</a></li>
                        <li><a href="{{URL::to('radio/')}}">Radio</a></li>
                        <li><a href="{{URL::to('pos/')}}">Jasa Pos</a></li>
                        <li><a href="{{URL::to('tv_kabel/')}}">TV Kabel</a></li>
                        <li><a href="{{URL::to('televisi/')}}">Televisi</a></li>
                        </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ URL::to('login') }}"><i class="fa fa-fw fa-power-off"></i> Login </a></li>
                    </ul>
                    
                    
                </div><!--/.nav-collapse -->
            </div>
        </div>
        <div class="container">
            @yield('content')
        </div>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="{{asset('bootstrap/css/jquery.min.js')}}" ></script>
        <script src="{{asset('bootstrap/css/bootstrap.js')}}" ></script>
        <script src="{{asset('bootstrap/css/ie10-viewport-bug-workaround.js')}}"></script>
    </body>
</html>