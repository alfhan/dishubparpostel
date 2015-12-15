@extends('admin.pendataan')

@section('styleimport')

@endsection

@section('content') 
<a href="{{URL::to('admin-page/tower')}}"> &larr; Kembali </a>

 <h1>Edit tower</h1>
 <hr>
 
  {{Form::open(array('action' => 'towerController@prosesEdit', 'enctype' => 'multipart/form-data')) }}
  
  {{ Form::hidden('id', $datatower->id) }}
  <div style="width: 30%">
    <div class="form-group">
    {{Form::label('zona', 'Zona') }}
    <input class="form-control" name="zona" value="{{$datatower->zona}}">
    </div>

    <div class="form-group">
      {{Form::label('kecamatan_id', 'Kecamatan') }}
      <select class="form-control" name="kecamatan_id" id="kecamatan_id">
        <option value="0">--Pilih Salah Satu--</option>
        @foreach($kecamatan as $kec)
          <?php $selected = $kec->id == $datatower->kecamatan_id ? "selected='selected'":"";?>
          <option {{$selected}} value="{{$kec->id}}">{{$kec->name}}</option>
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
      <?php $selected = $r->id == $datatower->perusahaan_id ? "selected='selected'":"";?>
      <option {{$selected}} value="{{$r->id}}">{{$r->nama_perusahaan}}</option>
    @endforeach
  </select>
  </div>
  
  <div class="form-group">
  {{Form::label('alamat_perusahaan', 'Alamat Perusahaan') }}
  <input class="form-control" disabled="" id="alamat_perusahaan" value="{{$datatower->perusahaan()->first()->alamat_perusahaan}}" />
  </div>
  
  <div class="form-group">
  {{Form::label('lokasi', 'Lokasi') }}
  {{Form::text('lokasi', $datatower->lokasi, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('kordinat', 'Kordinat') }}
  {{Form::text('kordinat', $datatower->kordinat, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('tinggi_menara', 'Tinggi Menara') }}
  {{Form::text('tinggi_menara', $datatower->tinggi_menara, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('dibangun_tahun', 'Dibangun Tahun') }}
  {{Form::text('dibangun_tahun', $datatower->dibangun_tahun, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('no_simb', 'No. SIMB') }}
  {{Form::text('no_simb', $datatower->no_simb, array('class' => 'form-control'))}}
  </div>
  
  <div class="form-group">
  {{Form::label('keterangan', 'Keterangan') }}
  {{Form::text('keterangan', $datatower->keterangan, array('class' => 'form-control'))}}
  </div>
  <div class="form-group">
    {{Form::label('gambar', 'Gambar') }}
    <input name="gambar" id="gambar" type="file" class="form-control" />
  </div>
  
  {{Form::submit('Ubah', array('class' => 'btn btn-primary')) }}
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
  getDesa();
  function getDesa() {
    var kecamatan_id = $("#kecamatan_id").val();
    $.ajax({
      url:"{{URL::to('pengaturan/desa/'.$datatower->desa_id)}}",
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