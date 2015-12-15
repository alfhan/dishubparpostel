@extends('admin.pendataan')

@section('styleimport')

@endsection

@section('content') 
<a href="{{URL::to('admin-page/wartel')}}"> &larr; Kembali </a>

 <h1>Tambah data wartel</h1>
 <hr>
 
  {{Form::open(array('url' => 'admin-page/wartel/simpan', 'enctype' => 'multipart/form-data')) }}

  <div style="width: 30%">
  <div class="form-group">
    {{Form::label('kecamatan_id', 'Kecamatan') }}
    <select class="form-control" name="kecamatan_id" id="kecamatan_id">
      <option value="0">--Pilih Salah Satu--</option>
      @foreach($kecamatan as $kec)
        <option value="{{$kec->id}}">{{$kec->name}}</option>
      @endforeach
    </select>
  </div>
  
  <div class="form-group">
  {{Form::label('nama_wartel', 'Nama Wartel') }}
  {{Form::text('nama_wartel', Input::old('nama_wartel'), array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('jumlah_kbu', 'Jumlah KBU') }}
  {{Form::text('jumlah_kbu', Input::old('jumlah_kbu'), array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('pemilik', 'Pemilik') }}
  {{Form::text('pemilik', Input::old('pemilik'), array('class' => 'form-control'))}}
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