@extends('admin.pendataan')

@section('styleimport')

@endsection

@section('content') 
<a href="{{URL::to('admin-page/tower')}}"> &larr; Kembali </a>

 <h1>Tambah data tower</h1>
 <hr>
   

  {{Form::open(array('url' => 'admin-page/tower_bts/simpan', 'enctype' => 'multipart/form-data')) }}
  
  <div style="width: 30%">
    <div class="form-group">
    {{Form::label('zona', 'Zona') }}
    <input class="form-control" name="zona">
    </div>

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
    {{Form::label('desa', 'Desa') }}
    <select class="form-control" name="desa_id" id="desa_id">
    </select>
    </div>
  
  <div class="form-group">
  {{Form::label('nama_perusahaan_id', 'Nama Perusahaan') }}
  <select class="form-control" name="nama_perusahaan_id" id="nama_perusahaan_id">
    <option value="0">--Pilih Salah Satu--</option>
    @foreach($datapemilik as $r)
      <option value="{{$r->id}}">{{$r->nama_perusahaan}}</option>
    @endforeach
  </select>
  </div>
  
  <div class="form-group">
  {{Form::label('alamat_perusahaan', 'Alamat Perusahaan') }}
  <input class="form-control" disabled="" id="alamat_perusahaan" />
  </div>
  
  <div class="form-group">
  {{Form::label('lokasi', 'Lokasi') }}
  {{Form::text('lokasi', Input::old('lokasi'), array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('kordinat', 'Kordinat') }}
  {{Form::text('kordinat', Input::old('kordinat'), array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('tinggi_menara', 'Tinggi Menara') }}
  {{Form::text('tinggi_menara', Input::old('tinggi_menara'), array('class' => 'form-control'))}}
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

  <div class="form-group">
  {{Form::label('gambar', 'Foto') }}
  {{Form::file('gambar', Input::old('gambar'), array('class' => 'form-control'))}}
  </div>

  {{Form::submit('Simpan', array('class' => 'btn btn-primary')) }}
  {{ Form::close() }}
  </div>
  
 @stop
 @section('scriptimport')
 <script type="text/javascript">
 $(document).ready(function(){
  $("#kecamatan_id").change(function(){
    getDesa();
  });
  $("#nama_perusahaan_id").change(function(){
    $.ajax({
      url:"{{URL::to('pengaturan/perusahaan')}}",
      type:'GET',
      data: {perusahaan_id :$(this).val()},
      success:function(respon){
        $("#alamat_perusahaan").val(respon);
      }
    });
  });
  getKecamatan();
  function getKecamatan() {
    var kabkota_id = $("#kabkota_id").val();
    $.ajax({
      url:"{{URL::to('pengaturan/kecamatan')}}",
      type:'GET',
      data: {kabkota_id:kabkota_id},
      success:function(respon){
        $("#kecamatan_id").html(respon);
      }
    });
  }
  function getDesa() {
    var kecamatan_id = $("#kecamatan_id").val();
    $.ajax({
      url:"{{URL::to('pengaturan/desa')}}",
      type:'GET',
      data: {kecamatan_id :kecamatan_id},
      success:function(respon){
        $("#desa_id").html(respon);
      }
    });
  }
 });
 </script>
 @endsection