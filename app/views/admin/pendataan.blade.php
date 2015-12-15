@extends('admin.layout')

@section('pendataan')
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
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laporan <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{URL::to('admin-page/laporan_tower/')}}">Menara</a></li>
                    <li><a href="{{URL::to('admin-page/laporan_wartel/')}}">Wartel</a></li>
                    <li><a href="{{URL::to('admin-page/laporan_warnet/')}}">Warnet</a></li>
                    <li><a href="{{URL::to('admin-page/laporan_radio/')}}">Radio</a></li>
                    <li><a href="{{URL::to('admin-page/laporan_pos/')}}">Jasa Pos</a></li>
                    <li><a href="{{URL::to('admin-page/laporan_tvkabel/')}}">TV Kabel</a></li>
                    <li><a href="{{URL::to('admin-page/laporan_televisi/')}}">Televisi</a></li>
                    
                </ul>
            </li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menara <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{URL::to('admin-page/tower/')}}">Menara</a></li>
                <li><a href="{{URL::to('admin-page/tower_bts/tampilbayar')}}">Retribusi Menara</a></li>
              </ul>
            </li>
            <li><a href="{{URL::to('admin-page/wartel/')}}">Wartel</a></li>
            <li><a href="{{URL::to('admin-page/warnet/')}}">Warnet</a></li>
            <li><a href="{{URL::to('admin-page/radio/')}}">Radio</a></li>
            <li><a href="{{URL::to('admin-page/pos/')}}">Jasa Pos</a></li>
            <li><a href="{{URL::to('admin-page/tvkabel/')}}">TV Kabel</a></li>
            <li><a href="{{URL::to('admin-page/televisi/')}}">Televisi</a></li>
            <li><a href="{{URL::to('article')}}">Article</a></li>
        </ul>
    </div><!--/.nav-collapse -->
  </div>
@stop