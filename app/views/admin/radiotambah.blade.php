@extends('admin.pendataan')

@section('styleimport')

@endsection

@section('content')
 
<a href="{{URL::to('admin-page/radio')}}"> &larr; Kembali </a>

 <h1>Tambah data radio</h1>
 <hr>
 
  {{Form::open(array('url' => 'admin-page/radio/simpan'))}}
  
  <div style="width: 30%">
   
  <div class="form-group">
  {{Form::label('nama_radio', 'Nama Radio') }}
  {{Form::text('nama_radio', Input::old('nama_radio'), array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('frekuensi', 'Frekuensi') }}
  {{Form::text('frekuensi', Input::old('frekuensi'), array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('penanggung_jawab', 'Penanggung Jawab') }}
  {{Form::text('penanggung_jawab', Input::old('penanggung_jawab'), array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('alamat', 'Alamat') }}
  {{Form::text('alamat', Input::old('alamat'), array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('telepon', 'Telepon') }}
  {{Form::text('telepon', Input::old('telepon'), array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('tgl_proposal', 'Tgl Proposal') }}
  {{Form::text('tgl_proposal', Input::old('tgl_proposal'), array('class' => 'form-control','placeholder'=>'yyyy-mm-dd'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('atas_nama', 'Atas Nama') }}
  {{Form::text('atas_nama', Input::old('atas_nama'), array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('keterangan', 'Keterangan') }}
  {{Form::text('keterangan', Input::old('keterangan'), array('class' => 'form-control'))}}
  </div>
  
  {{Form::submit('Simpan', array('class' => 'btn btn-primary')) }}
  {{ Form::close() }}
  </div>
 @stop

 @section('scriptimport')

 @endsection