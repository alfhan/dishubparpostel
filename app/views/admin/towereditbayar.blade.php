@extends('admin.layout')

@section('content') 
<a href="{{URL::to('admin-page/tower/tampilbayar')}}"> &larr; Kembali </a>

 <h1>Edit Pembayaran</h1>
 <h2>{{ $datatower->nama_perusahaan }}</h2>
 <hr>
 
  {{ Form::open(array('action' => 'towerController@prosesEditbayar')) }}
  
  {{ Form::hidden('id', $datatower->id) }}
  {{ Form::hidden('id_tower', $datatower->id_tower) }}
  {{ Form::hidden('desa', $datatower->desa) }}
  {{ Form::hidden('nama_perusahaan', $datatower->nama_perusahaan) }}
  {{ Form::hidden('status', $datatower->status) }}
  <div style="width: 30%">
    
    
  <div class="form-group">
  {{Form::label('tahun', 'Tahun') }}
  {{Form::text('tahun', $datatower->tahun, array('class' => 'form-control'))}}
  </div>

    
  <div class="form-group">
  {{Form::label('keterangan', 'Keterangan') }}
  {{Form::text('keterangan', $datatower->keterangan, array('class' => 'form-control'))}}
  </div>
  
  {{Form::submit('Ubah', array('class' => 'btn btn-primary')) }}
  {{ Form::close() }}
  </div>
  
 @stop