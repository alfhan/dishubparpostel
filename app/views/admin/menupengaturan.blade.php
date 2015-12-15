@section('pengaturan')
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="{{URL::to('admin-page/user/')}}">Pengguna</a></li>
        <li><a href="{{URL::to('pengaturan/data-instansi/')}}">Data Instansi</a></li>
        <li><a href="{{URL::to('pengaturan/data-pemilik/')}}">Daftar Pemilik</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
@stop