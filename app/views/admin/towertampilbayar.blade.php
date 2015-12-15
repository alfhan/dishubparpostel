@extends('admin.pendataan')

@section('styleimport')
  <link rel="stylesheet" type="text/css" href="{{URL::to('bootstrap/1.10.10/css/jquery.dataTables.min.css')}}">
@endsection

@section('content') 
<h1>Status Retribusi Menara</h1>
<hr />
<div class="col-md-12">
  <label class="col-md-2">Tahun</label>
  <div class="col-md-2">
    <select class="form-control input-sm" id="tahun">
    <?php for ($i=2010; $i <= date('Y') ; $i++) { ?>
      <option {{$tahun == $i ? "selected='selected'":""}} value="{{$i}}">{{$i}}</option>
    <?php } ?>
    </select>
  </div>

  <div class="btn-group pull-right" data-toggle="buttons">
    <button class="btn btn-default bukti-bayar">Bukti Bayar</button>
    <button class="btn btn-default bayar">Pembayaran</button>
  </div>

  <br /><br />
</div>
<div class="col-md-12">
  <div class="table-responsive">
    <table id="datatable" class="table">
      <thead>
        <tr>
         <th>Kecamatan</th>
         <th>Desa</th>
         <th>Nama Perusahaan</th>
         <th>Alamat Perusahaan</th>
         <th>Kordinat</th>
         <th>No SIMB</th>
         <th>Status Bayar</th>
        </tr>
      </thead>
      <tbody>
      @foreach($tower as $temp)
        <?php 
          $pembayaran = $temp->pembayaran()->whereTahun($tahun)->first();
          if(is_null($pembayaran)){
            $status =  "Belum Lunas";
            $img  = '';
          }else{
            $status =  "Lunas";
            $img  = $pembayaran->bukti;
          }
        ?>
        <tr data="{{$temp->id}}" image="{{$img}}">
          <td>{{ $temp->kecamatan->name }}</td>
          <td>{{$temp->desa()->first()->name}}</td>
          <td>{{ $temp->perusahaan()->first()->nama_perusahaan }}</td>
          <td>{{ $temp->perusahaan()->first()->alamat_perusahaan }}</td>
          <td>{{ $temp->kordinat }}</td>
          <td>{{ $temp->no_simb }}</td>
          <td>{{$status}}</td>
      </tr>
       @endforeach 
      </tbody>
      <tfoot>
        <tr>
         <th>Kecamatan</th>
         <th>Desa</th>
         <th>Nama Perusahaan</th>
         <th>Alamat Perusahaan</th>
         <th>Kordinat</th>
         <th>No SIMB</th>
         <th>Status Bayar</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
<div id="modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Bukti Bayar</h3>
      </div>
      <div class="modal-body">
        
      </div>
    </div>
  </div>
</div>
@stop

@section('scriptimport')
<script type="text/javascript" src="{{URL::to('bootstrap/1.10.10/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatable tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
    var table = $('#datatable').DataTable({
      'bSort':false,
    });
    table.columns().every( function () {
        var that = this;
        $('input', this.footer() ).on( 'keyup change', function () {
          if ( that.search() !== this.value ) {
            that.search( this.value ).draw();
          }
        });
    });
    var data = '';
    var image = '';
    $('#datatable tbody').on( 'click', 'tr', function () {
      if($(this).hasClass('info') ) {
        $(this).removeClass('info');
      }else{
        $('tr.info').removeClass('info');
        $(this).addClass('info');
        data = $(this).attr('data');
        image = $(this).attr('image');
      }
    });
    $(".bukti-bayar").click(function(){
      if(image){
        var pathImage = "{{URL::to('image')}}/"+image;
        $('.modal-body').html("<center><img src='"+pathImage+"' width='350' height='250'/></center>");
        $("#modal").modal('show');
      }
    });
    $(".bayar").click(function(){
      if(data > 0){
        var tahun = $("#tahun").val();
        window.open("{{URL::to('admin-page/tower_bts/bayar')}}/"+data+'/'+tahun,"_self");
      }
    });
    $("#tahun").change(function(){
      window.open("{{URL::to('admin-page/tower_bts/tampilbayar')}}/"+$(this).val(),"_self");
    });
  });
</script>
@endsection