@extends('admin.layout')

@include('admin.menupengaturan')

@section('content')

 <div class='container'>
 <? $i=1; ?>
 <h1>User</h1>
 <hr>
 <div><a href="{{URL::to('admin-page/user/tambah')}}" class="btn btn-info">Tambah data </a></div>
 <br>
 <table width="326" class="table table-striped table-bordered">
 
    <tr>
       <th>No</th>
       <th>Nama User</th>
       <th>Role</th>
       <th>Aksi</th>
    </tr>
    @foreach($datauser as $user)
      <tr>
         <td><? echo $i++; ?></td>
         <td>{{ $user->username }}</td>
         <td>{{ $user->role->nama }}</td>
         <td><a class="btn btn-small btn-info" {{link_to_action('userController@edit', 'Edit', array($user->id))}}</a>
         <a class="btn btn-small btn-danger" onclick="if (!confirm('Are you sure to delete this item?')) {return false;};" {{ link_to_action('userController@hapus', 'Hapus', array($user->id))}}</a></td>
      </tr>
    @endforeach
 </table>
 </div>
@stop