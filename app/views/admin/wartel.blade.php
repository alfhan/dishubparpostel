@extends('admin.pendataan')

@section('content')
 <div class='container'>
 <? $i=1; ?>
 <h1>Wartel</h1>
 <hr>
 <div><a href="{{URL::to('admin-page/wartel/tambah')}}" class="btn btn-info">Tambah data </a></div>
 <br>
 <table width="326" class="table table-striped table-bordered">
 
    <tr>
       <th>No</th>
       <th>Kecamatan</th>
       <th>Nama Wartel</th>
       <th>Jumlah KBU</th>
       <th>Pemilik</th>
       <th>Alamat</th>
       <th>Telepon</th>
       <th>Keterangan</th>
       <th>Aksi</th>
    </tr>
    <tbody>
    @foreach($datawartel as $wartel)
      <tr>
         <td><? echo $i++; ?></td>
         <td>{{ $wartel->kecamatan()->first()->name }}</td>
         <td>{{ $wartel->nama_wartel }}</td>
         <td>{{ $wartel->jumlah_kbu }}</td>
         <td>{{ $wartel->pemilik }}</td>
         <td>{{ $wartel->alamat }}</td>
         <td>{{ $wartel->telepon }}</td>
         <td>{{ $wartel->keterangan }}</td>
         <td><a class="btn btn-small btn-info" {{link_to_action('wartelController@edit', 'Edit', array($wartel->id))}}</a>
         <a class="btn btn-small btn-danger" onclick="if (!confirm('Are you sure to delete this item?')) {return false;};" {{ link_to_action('wartelController@hapus', 'Hapus', array($wartel->id))}}</a></td>
      </tr>
    @endforeach
    </tbody>
 </table>
 </div>
@stop