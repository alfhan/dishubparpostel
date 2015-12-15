@extends('admin.pendataan')

@section('content') 
<a href="{{URL::to('admin-page/wartel')}}"> &larr; Kembali </a>

 <h1>Edit wartel</h1>
 <hr>
 
  {{ Form::open(array('action' => 'wartelController@prosesEdit')) }}
  
  {{ Form::hidden('id', $datawartel->id) }}
  <div style="width: 30%">
  <div class="form-group">
    {{Form::label('kecamatan_id', 'Kecamatan') }}
    <select class="form-control" name="kecamatan_id" id="kecamatan_id">
      <option value="0">--Pilih Salah Satu--</option>
      @foreach($kecamatan as $kec)
        <?php $selected = $kec->id == $datawartel->kecamatan_id ? "selected='selected'":"";?>
        <option {{$selected}} value="{{$kec->id}}">{{$kec->name}}</option>
      @endforeach
    </select>
  </div>
  
  <div class="form-group">
  {{Form::label('nama_wartel', 'Nama Wartel') }}
  {{Form::text('nama_wartel', $datawartel->nama_wartel, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('jumlah_kbu', 'Jumlah KBU') }}
  {{Form::text('jumlah_kbu', $datawartel->jumlah_kbu, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('pemilik', 'Pemilik') }}
  {{Form::text('pemilik', $datawartel->pemilik, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('alamat', 'Alamat') }}
  {{Form::text('alamat', $datawartel->alamat, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('telepon', 'Telepon') }}
  {{Form::text('telepon', $datawartel->telepon, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('keterangan', 'Keterangan') }}
  {{Form::text('keterangan', $datawartel->keterangan, array('class' => 'form-control'))}}
  </div>
  
  {{Form::submit('Ubah', array('class' => 'btn btn-primary')) }}
  {{ Form::close() }}
  </div>
  
 @stop