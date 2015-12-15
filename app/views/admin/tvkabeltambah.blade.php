@extends('admin.pendataan')

@section('styleimport')

@endsection

@section('content') 
<a href="{{URL::to('admin-page/tvkabel')}}"> &larr; Kembali </a>

 <h1>Tambah data tv kabel</h1>
 <hr>
 
  {{Form::open(array('url' => 'admin-page/tvkabel/simpan'))}}
  
  <div style="width: 30%">
   
  <div class="form-group">
  {{Form::label('nama_perusahaan', 'Nama Perusahaan') }}
  {{Form::text('nama_perusahaan', Input::old('nama_perusahaan'), array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('pemilik', 'Pemilik') }}
  {{Form::text('pemilik', Input::old('pemilik'), array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('alamat_perusahaan', 'Alamat Peusahaan') }}
  {{Form::text('alamat_perusahaan', Input::old('alamat_perusahaan'), array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('dibangun_tahun', 'Dibangun Tahun') }}
  {{Form::text('dibangun_tahun', Input::old('dibangun_tahun'), array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('no_simb', 'No. SIMB') }}
  {{Form::text('no_simb', Input::old('no_simb'), array('class' => 'form-control'))}}
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