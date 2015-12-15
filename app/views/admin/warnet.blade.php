@extends('admin.pendataan')

@section('content')
 <div class='container'>
 <? $i=1; ?>
 <h1>Warnet</h1>
 <hr>
 <div><a href="{{URL::to('admin-page/warnet/tambah')}}" class="btn btn-info">Tambah data </a></div>
 <br>
 <table width="326" class="table table-striped table-bordered">
 
    <tr>
       <th>No</th>
       <th>Kecamatan</th>
       <th>Nama Warnet</th>
       <th>Type</th>
       <th>Jumlah Komputer</th>
       <th>Pemilik</th>
       <th>Alamat</th>
       <th>Telepon</th>
       <th>Keterangan</th>
       <th>Aksi</th>
    </tr>
    <tbody>
    @foreach($datawarnet as $warnet)
      <tr>
         <td><? echo $i++; ?></td>
         <td>{{ $warnet->kecamatan()->first()->name }}</td>
         <td>{{ $warnet->nama_warnet }}</td>
         <td>{{ $warnet->type }}</td>
         <td>{{ $warnet->jumlah_komputer }}</td>
         <td>{{ $warnet->pemilik }}</td>
         <td>{{ $warnet->alamat }}</td>
         <td>{{ $warnet->telepon }}</td>
         <td>{{ $warnet->keterangan }}</td>
         <td><a class="btn btn-small btn-info" {{link_to_action('warnetController@edit', 'Edit', array($warnet->id))}}</a>
         <a class="btn btn-small btn-danger" onclick="if (!confirm('Are you sure to delete this item?')) {return false;};" {{ link_to_action('warnetController@hapus', 'Hapus', array($warnet->id))}}</a></td>
      </tr>
    @endforeach
    </tbody>
 </table>
 </div>
@stop