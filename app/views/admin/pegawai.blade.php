@extends('admin.layout')

@section('content')

 <div class='container'>
 <? $i=1; ?>
 <h1>Pegawai</h1>
 <hr>
 <div><a href="{{URL::to('admin-page/pegawai/tambah')}}" class="btn btn-info">Tambah data </a></div>
 <br>
 <table width="326" class="table table-striped table-bordered">
 
    <tr>
       <th>No</th>
       <th>NIP</th>
       <th>Nama</th>
       <th>Jabatan</th>
       <th>Aksi</th>
    </tr>
    @foreach($datapegawai as $pegawai)
      <tr>
         <td><? echo $i++; ?></td>
         <td>{{ $pegawai->nip }}</td>
         <td>{{ $pegawai->nama }}</td>
         <td>{{ $pegawai->jabatan }}</td>
         <td><a class="btn btn-small btn-info" {{link_to_action('pegawaiController@edit', 'Edit', array($pegawai->id))}}</a>
         <a class="btn btn-small btn-danger" onclick="if (!confirm('Are you sure to delete this item?')) {return false;};" {{ link_to_action('pegawaiController@hapus', 'Hapus', array($pegawai->id))}}</a></td>
      </tr>
    @endforeach
 </table>
 </div>
@stop