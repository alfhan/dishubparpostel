@extends('admin.layout')
  
@section('content')
  
  <a href="{{URL::to('admin-page/tower')}}"> &larr; kembali </a>
  <h3>{{ $datatower->nama_perusahaan }}</h3>
  <hr>
 <table class="table table-striped table-bordered">
 <tr>
       <th>Zona</th>
       
       <th>gambar</th>
     </tr>
    
    
     <tr>
         <td>{{ $datatower->zona }}</td>
        
         <td><img src="{{ asset($datatower->gambar) }}" /></td>
     </tr>
     </table>
@stop