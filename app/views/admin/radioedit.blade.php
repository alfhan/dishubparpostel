@extends('admin.pendataan')

@section('styleimport')

@endsection

@section('content') 
<a href="{{URL::to('admin-page/radio')}}"> &larr; Kembali </a>

 <h1>Edit radio</h1>
 <hr>
 
  {{ Form::open(array('action' => 'radioController@prosesEdit')) }}
  
  {{ Form::hidden('id', $dataradio->id) }}
  <div style="width: 30%">
  <div class="form-group">
  {{Form::label('nama_radio', 'Nama Radio') }}
  {{Form::text('nama_radio', $dataradio->nama_radio, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('frekuensi', 'Frekuensi') }}
  {{Form::text('frekuensi', $dataradio->frekuensi, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('penanggung_jawab', 'Penanggung Jawab') }}
  {{Form::text('penanggung_jawab', $dataradio->penanggung_jawab, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('alamat', 'Alamat') }}
  {{Form::text('alamat', $dataradio->alamat, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('telepon', 'Telepon') }}
  {{Form::text('telepon', $dataradio->telepon, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('tgl_proposal', 'Tgl Proposal') }}
  {{Form::text('tgl_proposal', $dataradio->tgl_proposal, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('atas_nama', 'Atas Nama') }}
  {{Form::text('atas_nama', $dataradio->atas_nama, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('keterangan', 'Keterangan') }}
  {{Form::text('keterangan', $dataradio->keterangan, array('class' => 'form-control'))}}
  </div>
  
  {{Form::submit('Ubah', array('class' => 'btn btn-primary')) }}
  {{ Form::close() }}
  </div>
  
 @stop

 @section('scriptimport')

@endsection