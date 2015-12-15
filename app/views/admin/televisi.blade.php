@extends('admin.pendataan')

@section('content')
 <div class='container'>
 <? $i=1; ?>
 <h1>Televisi</h1>
 <hr>
 <div><a href="{{URL::to('admin-page/televisi/tambah')}}" class="btn btn-info">Tambah data </a></div>
 <br>
 <table width="326" class="table table-striped table-bordered">
 
    <tr>
       <th>No</th>
       <th>Nama Perusahaan</th>
       <th>Pemilik</th>
       <th>Alamat Perusahaan</th>
       <th>Dibangun Tahun</th>
       <th>No. SIMB</th>
       <th>Keterangan</th>
       <th>Aksi</th>
    </tr>
    <tbody>
    @foreach($datatelevisi as $televisi)
      <tr>
         <td><? echo $i++; ?></td>
         <td>{{ $televisi->nama_perusahaan }}</td>
         <td>{{ $televisi->pemilik }}</td>
         <td>{{ $televisi->alamat_perusahaan }}</td>
         <td>{{ $televisi->dibangun_tahun }}</td>
         <td>{{ $televisi->no_simb }}</td>
         <td>{{ $televisi->keterangan }}</td>
         <td><a class="btn btn-small btn-info" {{link_to_action('televisiController@edit', 'Edit', array($televisi->id))}}</a>
         <a class="btn btn-small btn-danger" onclick="if (!confirm('Are you sure to delete this item?')) {return false;};" {{ link_to_action('televisiController@hapus', 'Hapus', array($televisi->id))}}</a></td>
      </tr>
    @endforeach
    </tbody>
 </table>
 </div>
@stop