@extends('admin.layout')

@section('content') 
<a href="{{URL::to('admin-page/pegawai')}}"> &larr; Kembali </a>

 <h1>Tambah data pegawai</h1>
 <hr>
 
  {{Form::open(array('url' => 'admin-page/pegawai/simpan'))}}
  
  <div style="width: 30%">
  <div class="form-group">
  {{Form::label('nip', 'NIP') }}
  {{Form::text('nip', Input::old('nip'), array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('nama', 'Nama') }}
  {{Form::text('nama', Input::old('nama'), array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('jabatan', 'Jabatan') }}
  {{Form::text('jabatan', Input::old('jabatan'), array('class' => 'form-control'))}}
  </div>
  
  {{Form::submit('Simpan', array('class' => 'btn btn-primary')) }}
  {{ Form::close() }}
  </div>
  
 @stop