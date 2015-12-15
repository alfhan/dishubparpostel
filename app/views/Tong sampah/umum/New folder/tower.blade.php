@extends('umum.layout')

@section('content')

 <div class='container'>
 <? $i=1; ?>
 <h1>Tower BTS</h1>
 <hr />
 <table width="326" class="table table-striped table-bordered">
 
    <tr>
       <th rowspan="2">No</th>
       <th rowspan="2">Zona</th>
       <th rowspan="2">Desa</th>
       <th rowspan="2">Nama Perusahaan</th>
       <th colspan="3">Pembayaran</th>
    </tr>
    <tr><td>2014</td>
    	<td>2015</td>
        <td>2016</td>
    </tr>
    @foreach($datatower as $tower_bts)
      <tr>
         <td><? echo $i++; ?></td>
         <td>{{ $tower_bts->zona }}</td>
         <td>{{ $tower_bts->desa }}</td>
         <td>{{ $tower_bts->nama_perusahaan }}</td>
         <td></td>
         <td></td>
         <td></td>
      </tr>
    @endforeach
 </table>
 </div>
@stop