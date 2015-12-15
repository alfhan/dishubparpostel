@extends('umum.layout')

@section('content')

 <div class='container'>
 <? $i=1; ?>
 <h1>Wartel</h1>
 <hr />
 <table width="326" class="table table-striped table-bordered">
 
    <tr>
       <th>No</th>
       <th>Nama Kecamatan</th>
       <th>Nama Wartel</th>
       <th>Jumlah KBU</th>
       <th>Pemilik</th>
       <th>Alamat</th>
       <th>Telepon</th>
       <th>Keterangan</th>
    </tr>
    @foreach($datawartel as $wartel)
      <tr>
         <td><? echo $i++; ?></td>
         <td>{{ $wartel->kecamatan }}</td>
         <td>{{ $wartel->nama_wartel }}</td>
         <td>{{ $wartel->jumlah_kbu }}</td>
         <td>{{ $wartel->pemilik }}</td>
         <td>{{ $wartel->alamat }}</td>
         <td>{{ $wartel->telepon }}</td>
         <td>{{ $wartel->keterangan }}</td>
      </tr>
    @endforeach
 </table>
 </div>
 @stop