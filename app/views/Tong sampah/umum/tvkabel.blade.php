@extends('umum.layout')

@section('content')

<div class='container'>
 <? $i=1; ?>
 <h1>TV kabel</h1>
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
    @foreach($datatvkabel as $tvkabel)
      <tr>
         <td><? echo $i++; ?></td>
         <td>{{ $tvkabel->nama_perusahaan }}</td>
         <td>{{ $tvkabel->pemilik }}</td>
         <td>{{ $tvkabel->alamat_perusahaan }}</td>
         <td>{{ $tvkabel->dibangun_tahun }}</td>
         <td>{{ $tvkabel->no_simb }}</td>
         <td>{{ $tvkabel->keterangan }}</td>
      </tr>
    @endforeach
 </table>
 </div>
@stop