@extends('admin.layout')

@section('styleimport')
  
@endsection

@section('content') 
<a href="{{URL::to('admin-page/user')}}"> &larr; Kembali </a>

 <h1>Edit user</h1>
 <hr>
 
  {{ Form::open(array('action' => 'userController@prosesEdit')) }}
  
  {{ Form::hidden('id', $datauser->id) }}
  <div style="width: 30%">
  <div class="form-group">
  {{Form::label('user_role_id', 'Role') }}
    <select class="form-control input-sm" name="user_role_id" id="user_role_id">
      @foreach($role as $r)
        <?php  $select = $r->id == $datauser->user_role_id ? "selected='selected'":''; ?>
        <option {{$select}} value="{{$r->id}}">{{$r->nama}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
  {{Form::label('username', 'Username') }}
  {{Form::text('username', $datauser->username, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('password', 'Password') }}
  <input class="form-control" type="password" name="password" />
  </div>
  
      
  {{Form::submit('Ubah', array('class' => 'btn btn-primary')) }}
  {{ Form::close() }}
  </div>
  
 @stop
@section('scriptimport')
  
@endsection