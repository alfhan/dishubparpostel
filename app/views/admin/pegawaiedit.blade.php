@extends('admin.layout')

@section('content') 
<a href="{{URL::to('admin-page/pegawai')}}"> &larr; Kembali </a>

 <h1>Edit pegawai</h1>
 <hr />
 
  {{ Form::open(array('action' => 'pegawaiController@prosesEdit')) }}
  
  {{ Form::hidden('id', $datapegawai->id) }}
  <div style="width: 30%">
  <div class="form-group">
  {{Form::label('nip', 'NIP') }}
  {{Form::text('nip', $datapegawai->nip, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('nama', 'Nama') }}
  {{Form::text('nama', $datapegawai->nama, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('jabatan', 'Jabatan') }}
  {{Form::text('jabatan', $datapegawai->jabatan, array('class' => 'form-control'))}}
  </div>
  
  {{Form::submit('Ubah', array('class' => 'btn btn-primary')) }}
  {{ Form::close() }}
  </div>
  
 @stop