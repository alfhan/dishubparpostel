@extends('admin.pendataan')

@section('styleimport')

@endsection

@section('content') 
<a href="{{URL::to('admin-page/tvkabel')}}"> &larr; Kembali </a>

 <h1>Edit tv kabel</h1>
 <hr>
 
  {{ Form::open(array('action' => 'tvkabelController@prosesEdit')) }}
  
  {{ Form::hidden('id', $datatvkabel->id) }}
  <div style="width: 30%">
  <div class="form-group">
  {{Form::label('nama_perusahaan', 'Nama Perusahaan') }}
  {{Form::text('nama_perusahaan', $datatvkabel->nama_perusahaan, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('pemilik', 'Pemilik') }}
  {{Form::text('pemilik', $datatvkabel->pemilik, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('alamat_perusahaan', 'Alamat Perusahaan') }}
  {{Form::text('alamat_perusahaan', $datatvkabel->alamat_perusahaan, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('dibangun_tahun', 'Dibangun Tahun') }}
  {{Form::text('dibangun_tahun', $datatvkabel->dibangun_tahun, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('no_simb', 'No. SIMB') }}
  {{Form::text('no_simb', $datatvkabel->no_simb, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('keterangan', 'Keterangan') }}
  {{Form::text('keterangan', $datatvkabel->keterangan, array('class' => 'form-control'))}}
  </div>
  
  {{Form::submit('Ubah', array('class' => 'btn btn-primary')) }}
  {{ Form::close() }}
  </div>
  
 @stop

 @section('scriptimport')

@endsection