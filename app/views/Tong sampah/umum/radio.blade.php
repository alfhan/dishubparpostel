@extends('umum.layout')

@section('content')

 <div class='container'>
 <? $i=1; ?>
 <h1>Radio</h1>
 <hr />
 <table width="326" class="table table-striped table-bordered">
 
    <tr>
       <th>No</th>
       <th>Nama Radio Siaran</th>
       <th>Frekuensi</th>
       <th>Penanggung Jawab</th>
       <th>Alamat</th>
       <th>Telepon</th>
       <th>Tgl Lampiran Proposal</th>
       <th>A/NA</th>
       <th>Keterangan</th>
    </tr>
    @foreach($dataradio as $radio)
      <tr>
         <td><? echo $i++; ?></td>
         <td>{{ $radio->nama_radio }}</td>
         <td>{{ $radio->frekuensi }}</td>
         <td>{{ $radio->penanggung_jawab }}</td>
         <td>{{ $radio->alamat }}</td>
         <td>{{ $radio->telepon }}</td>
         <td>{{ $radio->tgl_proposal }}</td>
         <td>{{ $radio->atas_nama }}</td>
         <td>{{ $radio->keterangan }}</td>
      </tr>
    @endforeach
 </table>
 </div>
@stop