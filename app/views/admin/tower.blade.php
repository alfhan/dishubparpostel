@extends('admin.pendataan')

@section('styleimport')
  <link rel="stylesheet" type="text/css" href="{{URL::to('bootstrap/1.10.10/css/jquery.dataTables.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL::to('bootstrap/TableTools/css/dataTables.tableTools.css')}}">
@endsection

@section('content')
<div class='container'>
 <h1>Menara</h1>
 <hr>
 <? $i=1; ?>
 <? $a= date("Y");?>
 <? $b= $a-$i;?>
 <? $c= $a+$i;?>
 <div class="col-md-12">
  <div class="btn-group" data-toggle="buttons">
    <button class="btn btn-default tambah">Tambah Data</button>
    <button class="btn btn-default tampil">Tampil</button>
    <button class="btn btn-default edit">Edit</button>
    <button class="btn btn-default hapus">Hapus</button>
  </div>
 </div>
 <div class="col-md-12">
  <div class="table-responsive">
    <table id="datatable" class="table">
      <thead>
        <tr>
         <th>Zona</th>
         <th>Kecamatan</th>
         <th>Desa</th>
         <th>Nama Perusahaan</th>
         <th>Alamat Perusahaan</th>
         <th>Kordinat</th>
         <th>Tinggi Menara</th>
         <th>Tahun Dibangun</th>
         <th>No SIMB</th>
        </tr>
      </thead>
      <tbody>
      @foreach($tower as $temp)
        <tr data="{{$temp->id}}">
          <td>{{ $temp->zona }}</td>
          <td>{{ $temp->kecamatan->name }}</td>
          <td>{{$temp->desa()->first()->name}}</td>
          <td>{{ $temp->perusahaan()->first()->nama_perusahaan }}</td>
          <td>{{ $temp->perusahaan()->first()->alamat_perusahaan }}</td>
          <td>{{ $temp->kordinat }}</td>
          <td>{{ $temp->tinggi_menara }}</td>
          <td>{{ $temp->dibangun_tahun }}</td>
          <td>{{ $temp->no_simb }}</td>
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
         <th>Tinggi Menara</th>
         <th>Tahun Dibangun</th>
         <th>No SIMB</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
</div>
<div id="modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

    </div>
  </div>
</div>
@stop

@section('scriptimport')
<script type="text/javascript" src="{{URL::to('bootstrap/1.10.10/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('bootstrap/TableTools/js/dataTables.tableTools.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function(){
    $('#datatable tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
    var table = $('#datatable').DataTable({
      'bSort':false,
    });
  // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
    var tableTools = new $.fn.dataTable.TableTools(table,{
      'sSwfPath' : "{{URL::to('bootstrap/TableTools/swf/copy_csv_xls_pdf.swf')}}",
      'aButtons':[
        {
        'sExtends':'pdf',
        'bFooter':false,
        "sPdfOrientation": "landscape",
        "sTitle": "Data Menara",
        "oSelectorOpts": { filter: 'applied', order: 'current', page: 'all' },
        'sButtonText':'Export to PDF',
        }]
    });
    $(tableTools.fnContainer()).insertBefore("#datatable_wrapper");
    var data = '';
    $('#datatable tbody').on( 'click', 'tr', function () {
      if($(this).hasClass('info') ) {
        $(this).removeClass('info');
      }else{
        $('tr.info').removeClass('info');
        $(this).addClass('info');
        data = $(this).attr('data');
      }
    });
    $(".tampil").click(function(){
      if(data > 0){
        $.ajax({
          type:'get',
          data:{id:data},
          url:"{{URL::to('admin-page/tower_bts/tampil')}}",
          success:function(respon){
            $(".modal-content").html(respon);
            $('#modal').modal('show');
          }
        })
      }
    });
		$(".hapus").click(function(){
      if(data > 0){
        if (!confirm('Are you sure to delete this item?')) {
          return false;
        }else{
          window.open("{{URL::to('admin-page/tower_bts/hapus')}}/"+data,"_self");
        }
      }
		});
    $(".edit").click(function(){
      if(data > 0){
        window.open("{{URL::to('admin-page/tower_bts/edit')}}/"+data,"_self");
      }
    });
    $(".tambah").click(function(){
      window.open("{{URL::to('admin-page/tower_bts/tambah')}}","_self");
    });
	});
</script>
@endsection