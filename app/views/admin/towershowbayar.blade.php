@extends('admin.layout')
  
@section('content')
<section class="container">
  
  <a href="{{URL::to('admin-page/tower_bts/tampilbayar')}}"> &larr; kembali </a>
  <hr>

<table class="table table-bordered">
<tr><td rowspan="11" align="center">{{ HTML::image('image/'.$datatower->bukti, 'bukti', array( 'width' => 500, 'height' => 400 )) }}</td>
<tr><td>Desa</td><td>{{ $datatower->desa }}</td></tr>
<tr><td>Nama Perusahaan</td><td>{{ $datatower->nama_perusahaan }}</td></tr>
<tr><td>Tahun</td><td>{{ $datatower->tahun }}</td></tr>
<tr><td>Status</td><td>{{ $datatower->status }}</td></tr>
<tr><td>Keterangan</td><td>{{ $datatower->keterangan }}</td></tr>

</table>
<hr>  
</section>    
@stop