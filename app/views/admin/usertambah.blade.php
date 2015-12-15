@extends('admin.layout')

@section('styleimport')
  
@endsection

@section('content') 
<a href="{{URL::to('admin-page/user')}}"> &larr; Kembali </a>

 <h1>Tambah data user</h1>
 <hr />
 
  {{Form::open(array('url' => 'admin-page/user/simpan'))}}
  
  <div style="width: 30%">
      
  <div class="form-group">
  {{Form::label('user_role_id', 'Role') }}
    <select class="form-control input-sm" name="user_role_id" id="user_role_id">
      @foreach($role as $r)
        <option value="{{$r->id}}">{{$r->nama}}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
  {{Form::label('username', 'Username') }}
  {{Form::text('username', Input::old('username'), array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('password', 'Password') }} {{ $errors->first('password') }}
  <input class="form-control" type="password" name="password" />
  </div>
  
  {{Form::submit('Simpan', array('class' => 'btn btn-primary')) }}
  {{ Form::close() }}
  </div>
  
 @stop
 @section('scriptimport')
  
@endsection