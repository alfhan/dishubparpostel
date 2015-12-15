@extends('umum.layout')

@section('content')

 <div class='container'>
 <? $i=1; ?>
 <h1>Warnet</h1>
 <hr />
 <table width="326" class="table table-striped table-bordered">
 
    <tr>
       <th>No</th>
       <th>Nama Kecamatan</th>
       <th>Nama Wanet</th>
       <th>Type</th>
       <th>Jumlah Komputer</th>
       <th>Pemilik</th>
       <th>Alamat</th>
       <th>Telepon</th>
       <th>Keterangan</th>
    </tr>
    @foreach($datawarnet as $warnet)
      <tr>
         <td><? echo $i++; ?></td>
         <td>{{ $warnet->kecamatan }}</td>
         <td>{{ $warnet->nama_warnet }}</td>
         <td>{{ $warnet->type }}</td>
         <td>{{ $warnet->jumlah_komputer }}</td>
         <td>{{ $warnet->pemilik }}</td>
         <td>{{ $warnet->alamat }}</td>
         <td>{{ $warnet->telepon }}</td>
         <td>{{ $warnet->keterangan }}</td>
      </tr>
    @endforeach
 </table>
 </div>
@stop