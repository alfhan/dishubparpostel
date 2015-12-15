@extends('admin.pendataan')

@section('styleimport')

@endsection

@section('content') 
<a href="{{URL::to('admin-page/pos')}}"> &larr; Kembali </a>

 <h1>Tambah data jasa pos</h1>
 <hr>
 
  {{Form::open(array('url' => 'admin-page/pos/simpan'))}}
  
  <div style="width: 30%">
  <div class="form-group">
  {{Form::label('nama_perusahaan', 'Nama Perusahaan') }}
  {{Form::text('nama_perusahaan', Input::old('nama_perusahaan'), array('class' => 'form-control'))}}
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
  {{Form::label('keterangan', 'Keterangan') }}
  {{Form::text('keterangan', Input::old('keterangan'), array('class' => 'form-control'))}}
  </div>
  
  {{Form::submit('Simpan', array('class' => 'btn btn-primary')) }}
  {{ Form::close() }}
  </div>
  
 @stop

 @section('scriptimport')

@endsection