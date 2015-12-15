@extends('umum.layout')

@section('content')

<div class='container'>
 <? $i=1; ?>
 <h1>Jasa pos</h1>
 <hr />
 <table width="326" class="table table-striped table-bordered">
 
    <tr>
       <th>No</th>
       <th>Nama Perusahaan</th>
       <th>Penanggung Jawab</th>
       <th>Alamat</th>
       <th>Telepon</th>
       <th>Keterangan</th>
    </tr>
    @foreach($datapos as $pos)
      <tr>
         <td><? echo $i++; ?></td>
         <td>{{ $pos->nama_perusahaan }}</td>
         <td>{{ $pos->penanggung_jawab }}</td>
         <td>{{ $pos->alamat }}</td>
         <td>{{ $pos->telepon }}</td>
         <td>{{ $pos->keterangan }}</td>
      </tr>
    @endforeach
 </table>
 </div>
@stop