@extends('admin.pendataan')

@section('content')
 <div class='container'>
 <? $i=1; ?>
 <h1>TV Kabel</h1>
 <hr>
 <div><a href="{{URL::to('admin-page/tvkabel/tambah')}}" class="btn btn-info">Tambah data </a></div>
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
    @foreach($datatvkabel as $tvkabel)
      <tr>
         <td><? echo $i++; ?></td>
         <td>{{ $tvkabel->nama_perusahaan }}</td>
         <td>{{ $tvkabel->pemilik }}</td>
         <td>{{ $tvkabel->alamat_perusahaan }}</td>
         <td>{{ $tvkabel->dibangun_tahun }}</td>
         <td>{{ $tvkabel->no_simb }}</td>
         <td>{{ $tvkabel->keterangan }}</td>
         <td><a class="btn btn-small btn-info" {{link_to_action('tvkabelController@edit', 'Edit', array($tvkabel->id))}}</a>
         <a class="btn btn-small btn-danger" onclick="if (!confirm('Are you sure to delete this item?')) {return false;};" {{ link_to_action('tvkabelController@hapus', 'Hapus', array($tvkabel->id))}}</a></td>
      </tr>
    @endforeach
    </tbody>
 </table>
 </div>
@stop