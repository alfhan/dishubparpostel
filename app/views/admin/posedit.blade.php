@extends('admin.pendataan')

@section('styleimport')

@endsection

@section('content') 
<a href="{{URL::to('admin-page/pos')}}"> &larr; Kembali </a>

 <h1>Edit jasa pos</h1>
 <hr>
 
  {{ Form::open(array('action' => 'posController@prosesEdit')) }}
  
  {{ Form::hidden('id', $datapos->id) }}
  <div style="width: 30%">
  <div class="form-group">
  {{Form::label('nama_perusahaan', 'Nama Perusahaan') }}
  {{Form::text('nama_perusahaan', $datapos->nama_perusahaan, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('penanggung_jawab', 'Penanggung Jawab') }}
  {{Form::text('penanggung_jawab', $datapos->penanggung_jawab, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('alamat', 'Alamat') }}
  {{Form::text('alamat', $datapos->alamat, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('telepon', 'Telepon') }}
  {{Form::text('telepon', $datapos->telepon, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('keterangan', 'Keterangan') }}
  {{Form::text('keterangan', $datapos->keterangan, array('class' => 'form-control'))}}
  </div>
  
  {{Form::submit('Ubah', array('class' => 'btn btn-primary')) }}
  {{ Form::close() }}
  </div>
  
 @stop

 @section('scriptimport')

@endsection