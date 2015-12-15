@extends('admin.layout')

@include('admin.menupengaturan')

@section('content')
  <div class="row">
    <div class="col-md-7">
      <form id="frm" class="form-horizontal" action="{{URL::to('pengaturan/save-data-instansi')}}" method="post">
        <input type="hidden" name="id" value="{{$data->id}}" />
        <div class="form-group">
          <label class="control-label col-md-2" for="kabkota_id">Nama Daerah</label>
          <div class="col-md-8">
            <select class="form-control" name="kabkota_id" id="kabkota_id">
              @foreach($provinces as $row)
                <optgroup label="{{$row->name}}">
                @foreach($row->regencies as $r)
                  <?php $selected = $r->id == $data->kabkota_id ? "selected='selected'":""; ?>
                  <option value="{{$r->id}}" {{$selected}}>{{$r->name}}</option>
                @endforeach
                </optgroup>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-2" for="kabkota_id">Nama Instansi</label>
          <div class="col-md-8">
            <input class="form-control" name="nama_instansi" id="nama_instansi" value="{{$data->nama_instansi}}">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-2" for="kabkota_id">Kepala Dinas</label>
          <div class="col-md-4">
            <input class="form-control" name="kepala_dinas" id="kepala_dinas" value="{{$data->kepala_dinas}}">
          </div>
          <div class="col-md-4">
            <input class="form-control" name="nip_kepala_dinas" id="nip_kepala_dinas" placeholder="NIP" value="{{$data->nip_kepala_dinas}}">
          </div>
          <div class="col-md-1">
            <input type="checkbox" name="is_kepala_dinas" id="is_kepala_dinas" value="1" class="form-control" 
              {{$data->is_kepala_dinas == 1 ? "checked='true'":""}} >
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-2" for="kepala_satu">Kepala</label>
          <div class="col-md-4">
            <input class="form-control" name="kepala_satu" id="kepala_satu" value="{{$data->kepala_satu}}">
          </div>
          <div class="col-md-4">
            <input class="form-control" name="nip_kepala_satu" id="nip_kepala_satu" placeholder="NIP" value="{{$data->nip_kepala_satu}}">
          </div>
          <div class="col-md-1">
            <input type="checkbox" name="is_kepala_satu" id="is_kepala_satu" value="1" class="form-control" 
              {{$data->is_kepala_satu == 1 ? "checked='true'":""}} >
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-2" for="kepala_dua">Kepala</label>
          <div class="col-md-4">
            <input class="form-control" name="kepala_dua" id="kepala_dua" value="{{$data->kepala_dua}}">
          </div>
          <div class="col-md-4">
            <input class="form-control" name="nip_kepala_dua" id="nip_kepala_dua" placeholder="NIP" value="{{$data->nip_kepala_dua}}">
          </div>
          <div class="col-md-1">
            <input type="checkbox" name="is_kepala_dua" id="is_kepala_dua" value="1" class="form-control" 
              {{$data->is_kepala_dua == 1 ? "checked='true'":""}} >
          </div>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
@stop