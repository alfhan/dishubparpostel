@extends('admin.pendataan')

@section('styleimport')

@endsection

@section('content') 
<a href="{{URL::to('admin-page/warnet')}}"> &larr; Kembali </a>

 <h1>Edit warnet</h1>
 <hr>
 
  {{ Form::open(array('action' => 'warnetController@prosesEdit')) }}
  
  {{ Form::hidden('id', $datawarnet->id) }}
  <div style="width: 30%">
  <div class="form-group">
    {{Form::label('kecamatan_id', 'Kecamatan') }}
    <select class="form-control" name="kecamatan_id" id="kecamatan_id">
      <option value="0">--Pilih Salah Satu--</option>
      @foreach($kecamatan as $kec)
        <?php $selected = $kec->id == $datawarnet->kecamatan_id ? "selected='selected'":"";?>
        <option {{$selected}} value="{{$kec->id}}">{{$kec->name}}</option>
      @endforeach
    </select>
  </div>
  
  <div class="form-group">
  {{Form::label('nama_warnet', 'Nama warnet') }}
  {{Form::text('nama_warnet', $datawarnet->nama_warnet, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('type', 'Type') }}
  {{Form::text('type', $datawarnet->type, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('jumlah_komputer', 'Jumlah KBU') }}
  {{Form::text('jumlah_komputer', $datawarnet->jumlah_komputer, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('pemilik', 'Pemilik') }}
  {{Form::text('pemilik', $datawarnet->pemilik, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('alamat', 'Alamat') }}
  {{Form::text('alamat', $datawarnet->alamat, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('telepon', 'Telepon') }}
  {{Form::text('telepon', $datawarnet->telepon, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('keterangan', 'Keterangan') }}
  {{Form::text('keterangan', $datawarnet->keterangan, array('class' => 'form-control'))}}
  </div>
  
  {{Form::submit('Ubah', array('class' => 'btn btn-primary')) }}
  {{ Form::close() }}
  </div>
  
 @stop

 @section('scriptimport')
 
 @endsection