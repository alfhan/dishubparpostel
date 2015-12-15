@extends('admin.pengaturan')

@section('styleimport')
  
@endsection

@section('content') 
<a href="{{URL::to('pengaturan/data-pemilik')}}"> &larr; Kembali </a>

 <h1>Form Data Pemilik</h1>
 <hr />
 <form action="{{URL::to('pengaturan/save-data-pemilik')}}" method="post">
   <input type="hidden" value="{{isset($row)?$row->id:0}}" name="id">
   <div class="form-group">
     <label class="control-label" for="nama_perusahaan">Nama Perusahaan</label>
     <input class="form-control" name="nama_perusahaan" id="nama_perusahaan" value="{{isset($row)?$row->nama_perusahaan:''}}" />
   </div>
   <div class="form-group">
   	 <label class="control-label" for="alamat_perusahaan">Alamat Perusahaan</label>
     <input class="form-control" name="alamat_perusahaan" id="alamat_perusahaan" value="{{isset($row)?$row->alamat_perusahaan:''}}" />
   </div>
   {{Form::submit(isset($row)?'Ubah':'Simpan', array('class' => 'btn btn-primary')) }}
 </form>
  
 @stop

@section('scriptimport')
  
@endsection