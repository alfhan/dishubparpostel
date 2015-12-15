@extends('admin.layout')

@section('content')
 <meta charset='utf-8' />
    <meta http-equiv="X-UA-Compatible" content="chrome=1" />
    
    <link href="{{asset('bootstrap/filterable/src/bootstrap-combined.no-icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/filterable/fontawesome3/content/Content/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/filterable/test/libs/bootstrap-editable.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/filterable/src/bootstrap-filterable.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/filterable/src//main.css" rel="stylesheet">
 <div class='container'>
 <h1>Tower BTS</h1>
 <hr>
 <? $i=1; ?>
 <div><a href="{{URL::to('admin-page/tower_bts/tambah')}}" class="btn btn-info">Tambah data </a></div>
 <br>
 
 <table width="326" id="example-table" class="table table-striped table-hover table-condensed">
 
    <tr>
       <th rowspan="2">No</th>
       <th rowspan="2">Zona</th>
       <th rowspan="2">Desa</th>
       <th rowspan="2">Jumlah Perusahaan</th>
       <th rowspan="2">Nama Perusahaan</th>
       <th colspan="3">Pembayaran</th>
       <th rowspan="2">Aksi</th>
    </tr>
    <tr>
    <th>2014</th> 
    <th>2015</th>
    <th>2016</th> 
    </tr>
    <tbody>
    @foreach($tower as $temp)
      <tr>
         <td><? echo $i++; ?></td>
         <td>{{ $temp->zona }}</td>
         <td>{{ $temp->desa }}</td>
         <td>{{ $temp->jumlah_perusahaan }}</td>
         <td>{{ $temp->nama_perusahaan }}</td>
         <td></td>
         <td></td>
         <td></td>
         <td>
         <a class="btn btn-small btn-success" {{ link_to_action('towerController@show', 'Tampil', array($temp->id))}}</a>
         <a class="btn btn-small btn-info" {{link_to_action('towerController@edit', 'Edit', array($temp->id))}}</a>
         <a class="btn btn-small btn-danger" onclick="if (!confirm('Are you sure to delete this item?')) {return false;};" {{ link_to_action('towerController@hapus', 'Hapus', array($temp->id))}}</a></td>
         </td>
      </tr>
      
    @endforeach
  </tbody>
 </table>
 
 </div>
 <script src="{{asset('bootstrap/filterable/src/jquery.min.js')}}"></script>
  <script src="{{asset('bootstrap/filterable/src/bootstrap.min.js')}}"></script>
  <script src="{{asset('bootstrap/filterable/test/libs/bootstrap-editable.min.js')}}"></script>
  <script src="{{asset('bootstrap/filterable/src/filterable-utils.js')}}"></script>
  <script src="{{asset('bootstrap/filterable/src/filterable-cell.js')}}"></script>
  <script src="{{asset('bootstrap/filterable/src/filterable-row.js')}}"></script>
  <script src="{{asset('bootstrap/filterable/src/filterable.js')}}"></script>
  <script type="text/javascript">
    $('table').filterable();
  </script>
@stop