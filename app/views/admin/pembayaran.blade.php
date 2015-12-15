@extends('admin.layout')

@section('content')

 <div class='container'>
 <? $i=1; ?>
 <h1>Pembayaran</h1>
 <hr>
 <table width="326" class="table table-striped table-bordered">
 
    <tr>
       <th>No</th>
       <th>ID Tower</th>
       <th>Desa</th>
       <th colspan="5">Pembayaran</th>
    </tr>
   @foreach($tower as $temp)
      <tr>
         <td rowspan="3"><? echo $i++; ?></td>
         <td rowspan="3">{{ $temp->id }}</td>
         <td rowspan="3">{{ $temp->desa }}</td>
      </tr>
    <tr>
    @foreach($temp->pembayaran as $tampung)
    <td>{{ $tampung->tahun }}</td>
    @endforeach
    </tr>
    <tr>
    @foreach($temp->pembayaran as $tampung)
    <td>{{ $tampung->status }}</td>
    @endforeach
    </tr>
    @endforeach
 </table>
 </div>
@stop