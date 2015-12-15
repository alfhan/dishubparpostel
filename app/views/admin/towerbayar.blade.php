@extends('admin.pendataan')

@section('styleimport')

@endsection

@section('content') 
  <a href="{{URL::to('admin-page/tower_bts/tampilbayar')}}"> &larr; Kembali </a>
  <?php 
    $pembayaran = $datatower->pembayaran()->whereTahun($tahun)->whereIdTower($datatower->id)->first();
    if(is_null($pembayaran)){
      $statusPembayaran = 'Baru';
      $id = 0;
      $noBuktiBayar = '';
      $keterangan = '';
    }else{
      $statusPembayaran = 'Ubah';
      $id = $pembayaran->id;
      $noBuktiBayar = $pembayaran->no_bukti_bayar;
      $keterangan = $pembayaran->keterangan;
    }
  ?>
  <h3>Pembayaran {{$statusPembayaran}}</h3>
  <hr>
  <div class="col-md-6">
    {{ Form::open(array('action' => 'towerController@prosesBayar', 'enctype' => 'multipart/form-data', 'class'=>'form-horizontal')) }}
    {{ Form::hidden('id_tower', $datatower->id) }}
    {{ Form::hidden('tahun', $tahun) }}
    {{ Form::hidden('id', $id) }}
    <div class="form-group">
      <label class="col-md-4 control-label">No SIMB</label>
      <div class="col-md-8">
        <input class="form-control"  value="{{$datatower->no_simb}}" readonly="true">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label">Perusahaan</label>
      <div class="col-md-8">
        <input class="form-control"  value="{{$datatower->nama_perusahaan}}" readonly="true">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label">Alamat Perusahaan</label>
      <div class="col-md-8">
        <input class="form-control"  value="{{$datatower->alamat_perusahaan}}" readonly="true">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label">No Bukti Bayar</label>
      <div class="col-md-8">
        <input class="form-control" name="no_bukti_bayar" value="{{$noBuktiBayar}}">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label">Keterangan</label>
      <div class="col-md-8">
        <input class="form-control" name="keterangan" value="{{$keterangan}}">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label">Upload Bukti</label>
      <div class="col-md-8">
        <input class="form-control" name="bukti" type="file">
      </div>
    </div>
    {{Form::submit('Simpan', array('class' => 'btn btn-primary')) }}
  {{ Form::close() }}
  </div>
@stop

@section('scriptimport')

@endsection