@extends('admin.pendataan')

@section('content')

 <div class='container'>
 <? $i=1; ?>
 <h1>Article</h1>
 <hr>
 <div><a href="{{URL::to('article/form')}}" class="btn btn-info">Tambah data </a></div>
 <br>
 <table width="326" class="table table-striped table-bordered">
 
    <tr>
       <th width="25">No</th>
       <th>Title</th>
       <th width="150">Aksi</th>
    </tr>
    @foreach($list as $r)
      <tr>
         <td><? echo $i++; ?></td>
         <td>{{ $r->title }}</td>
         <td><a class="btn btn-small btn-info" href="{{URL::to('article/form/'.$r->id)}}">Edit</a>
         <a class="btn btn-small btn-danger" onclick="if (!confirm('Are you sure to delete this item?')) {return false;}" <a href="{{URL::to('article/hapus/'.$r->id)}}">Delete </a> </a></td>
      </tr>
    @endforeach
 </table>
 </div>
@stop