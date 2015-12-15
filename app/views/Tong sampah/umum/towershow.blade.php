@extends('umum.layout')
  
@section('content')
  
  <a href="{{URL::to('tower_bts')}}"> &larr; kembali </a>
  <h3>{{ $datatower->nama_perusahaan }}</h3>
  <hr>
 <table class="table table-striped table-bordered">
 <tr>
       <th>Zona</th>
       <th>Desa</th>
       <th>Jumlah Perusahaan</th>
       <th>Nama Perusahaan</th>
       <th>Alamat Perusahaan</th>
       <th>Alamat Lokasi</th>
       <th>Koordinat</th>
       <th>Tinggi Menara</th>
       <th>Dibangun Tahun</th>
       <th>No. SIMB</th>
       <th>Keterangan</th>
     </tr>
    
    
     <tr>
         <td>{{ $datatower->zona }}</td>
         <td>{{ $datatower->desa }}</td>
         <td>{{ $datatower->jumlah_perusahaan }}</td>
         <td>{{ $datatower->nama_perusahaan }}</td>
         <td>{{ $datatower->alamat_perusahaan }}</td>
         <td>{{ $datatower->lokasi }}</td>
         <td>{{ $datatower->kordinat }}</td>
         <td>{{ $datatower->tinggi_menara }}</td>
         <td>{{ $datatower->dibangun_tahun }}</td>
         <td>{{ $datatower->no_simb }}</td>
         <td>{{ $datatower->keterangan }}</td>
     </tr>
     </table>
@stop