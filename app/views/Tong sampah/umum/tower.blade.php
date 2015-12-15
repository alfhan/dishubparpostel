@extends('umum.layout')

@section('content')

 <div class='container'>
 <h1>Tower BTS</h1>
 <hr>
 <? $i=1; ?>
 
 <table width="326" class="table table-striped table-bordered">
 
    <tr>
       <th>No</th>
       <th>Zona</th>
       <th>Desa</th>
       <th>Jumlah Perusahaan</th>
       <th>Nama Perusahaan</th>
       <th>Aksi</th>
       <th colspan="5">Pembayaran</th>
    </tr>
    
    @foreach($tower as $temp)
      <tr>
         <td rowspan="3"><? echo $i++; ?></td>
         <td rowspan="3">{{ $temp->zona }}</td>
         <td rowspan="3">{{ $temp->desa }}</td>
         <td rowspan="3">{{ $temp->jumlah_perusahaan }}</td>
         <td rowspan="3">{{ $temp->nama_perusahaan }}</td>
         <td rowspan="3"><a class="btn btn-small btn-success" {{ link_to_action('towerController@showumum', 'Tampil', array($temp->id))}}</a>
         </tr>
      <tr>
      @foreach($temp->pembayaran as $tampung)
      <td>{{ $tampung->tahun }}</td>
      @endforeach
      </tr>
      <tr>
      @foreach($temp->pembayaran as $tampung)
      <td>{{ $tampung->status }}</td>
      @endforeach
      </tr>
    @endforeach
 </table>
 </div>
@stop