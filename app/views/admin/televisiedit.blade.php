@extends('admin.pendataan')

@section('styleimport')

@endsection

@section('content') 
<a href="{{URL::to('admin-page/televisi')}}"> &larr; Kembali </a>

 <h1>Edit televisi</h1>
 <hr>
 
  {{ Form::open(array('action' => 'televisiController@prosesEdit')) }}
  
  {{ Form::hidden('id', $datatelevisi->id) }}
  <div style="width: 30%">
  <div class="form-group">
  {{Form::label('nama_perusahaan', 'Nama Perusahaan') }}
  {{Form::text('nama_perusahaan', $datatelevisi->nama_perusahaan, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('pemilik', 'Pemilik') }}
  {{Form::text('pemilik', $datatelevisi->pemilik, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('alamat_perusahaan', 'Alamat Perusahaan') }}
  {{Form::text('alamat_perusahaan', $datatelevisi->alamat_perusahaan, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('dibangun_tahun', 'Dibangun Tahun') }}
  {{Form::text('dibangun_tahun', $datatelevisi->dibangun_tahun, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('no_simb', 'No. SIMB') }}
  {{Form::text('no_simb', $datatelevisi->no_simb, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('keterangan', 'Keterangan') }}
  {{Form::text('keterangan', $datatelevisi->keterangan, array('class' => 'form-control'))}}
  </div>
  
  {{Form::submit('Ubah', array('class' => 'btn btn-primary')) }}
  {{ Form::close() }}
  </div>
  
 @stop

 @section('scsriptimport')

@endsection