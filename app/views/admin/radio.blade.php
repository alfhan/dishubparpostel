@extends('admin.pendataan')

@section('content')
 <div class='container'>
 <? $i=1; ?>
 <h1>Radio</h1>
 <hr>
 <div><a href="{{URL::to('admin-page/radio/tambah')}}" class="btn btn-info">Tambah data </a></div>
 <br>
 <table width="326" class="table table-striped table-bordered">
 
    <tr>
       <th>No</th>
       <th>Nama Radio</th>
       <th>Frekuensi</th>
       <th>Penanggung Jawab</th>
       <th>Alamat</th>
       <th>Telepon</th>
       <th>Tgl Proposal</th>
       <th>Atas Nama</th>
       <th>Keterangan</th>
       <th>Aksi</th>
    </tr>
    <tbody>
    @foreach($dataradio as $radio)
      <tr>
         <td><? echo $i++; ?></td>
         <td>{{ $radio->nama_radio }}</td>
         <td>{{ $radio->frekuensi }}</td>
         <td>{{ $radio->penanggung_jawab }}</td>
         <td>{{ $radio->alamat }}</td>
         <td>{{ $radio->telepon }}</td>
         <td>{{ $radio->tgl_proposal }}</td>
         <td>{{ $radio->atas_nama }}</td>
         <td>{{ $radio->keterangan }}</td>
         <td><a class="btn btn-small btn-info" {{link_to_action('radioController@edit', 'Edit', array($radio->id))}}</a>
         <a class="btn btn-small btn-danger" onclick="if (!confirm('Are you sure to delete this item?')) {return false;};" {{ link_to_action('radioController@hapus', 'Hapus', array($radio->id))}}</a></td>
      </tr>
    @endforeach
    </tbody>
 </table>
 </div>
@stop