@extends('umum.layout')

@section('content')

<div class='container'>
 <? $i=1; ?>
 <h1>Televisi</h1>
 <hr />
 <table width="326" class="table table-striped table-bordered">
 
    <tr>
       <th>No</th>
       <th>Nama Perusahaan</th>
       <th>Nama Pemilik</th>
       <th>Alamat Perusahaan</th>
       <th>Dibangun Tahun</th>
       <th>No. SIMB</th>
       <th>Keterangan</th>
    </tr>
    @foreach($datatelevisi as $televisi)
      <tr>
         <td><? echo $i++; ?></td>
         <td>{{ $televisi->nama_perusahaan }}</td>
         <td>{{ $televisi->pemilik }}</td>
         <td>{{ $televisi->alamat_perusahaan }}</td>
         <td>{{ $televisi->dibangun_tahun }}</td>
         <td>{{ $televisi->no_simb }}</td>
         <td>{{ $televisi->keterangan }}</td>
      </tr>
    @endforeach
 </table>
 </div>
@stop