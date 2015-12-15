@extends('admin.pendataan')

@section('content')
 <div class='container'>
 <? $i=1; ?>
 <h1>Jasa Pos</h1>
 <hr>
 <div><a href="{{URL::to('admin-page/pos/tambah')}}" class="btn btn-info">Tambah data </a></div>
 <br>
 <table width="326" class="table table-striped table-bordered">
 
    <tr>
       <th>No</th>
       <th>Nama Perusahaan</th>
       <th>Penanggung Jawab</th>
       <th>Alamat</th>
       <th>Telepon</th>
       <th>Keterangan</th>
       <th>Aksi</th>
    </tr>
    <tbody>
    @foreach($datapos as $pos)
      <tr>
         <td><? echo $i++; ?></td>
         <td>{{ $pos->nama_perusahaan }}</td>
         <td>{{ $pos->penanggung_jawab }}</td>
         <td>{{ $pos->alamat }}</td>
         <td>{{ $pos->telepon }}</td>
         <td>{{ $pos->keterangan }}</td>
         <td><a class="btn btn-small btn-info" {{link_to_action('posController@edit', 'Edit', array($pos->id))}}</a>
         <a class="btn btn-small btn-danger" onclick="if (!confirm('Are you sure to delete this item?')) {return false;};" {{ link_to_action('posController@hapus', 'Hapus', array($pos->id))}}</a></td>
      </tr>
    @endforeach
    </tbody>
 </table>
 </div>
@stop