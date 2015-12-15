@extends('admin.layout')

@section('content')
 <div class='container'>
 <h1>Tower BTS</h1>
 <hr>
 <? $i=1; ?>
 <? $a= date("Y");?>
 <? $b= $a-$i;?>
 <? $c= $a+$i;?>
 <div><a href="{{URL::to('admin-page/tower_bts/tambah')}}" class="btn btn-info">Tambah data </a> --
 <a href="{{URL::to('admin-page/tower_bts/tampilbayar')}}" class="btn btn-info">Pembayaran </a></div>
 
 <br>
        <table id="example-table" class="table table-striped table-bordered">
          <tr>
             <th rowspan=2>No</th>
             <th rowspan=2>Nama Perusahaan</th>
             <th rowspan=2>Desa</th>
             <th rowspan=2>Kordinat</th>
			       <th colspan=3>Pembayaran</th>
             <th rowspan=2>Aksi</th>
		  </tr>
		  <tr>
		  <td><? echo $b;?></td><td><? echo $a;?></td><td><? echo $c;?></td>
		  </tr>
          <tbody>
		  

              @foreach($tower as $temp)
          <tr>
             <td><? echo $i++; ?></td>
             <td>{{ $temp->nama_perusahaan }}</td>
             <td>{{ $temp->desa }}</td>
             <td>{{ $temp->kordinat }}</td>
			 
			 <td>
			 <? $pembayaran1 = DB::table('pembayaran')->where('id_tower',$temp->id)->where('tahun',$b)->first();
			 if (!empty($pembayaran1))
			 {echo $pembayaran1->status;} 
			 else
			 {echo "-";} ?>
			 </td>
			 <td>
			 <? $pembayaran2 = DB::table('pembayaran')->where('id_tower',$temp->id)->where('tahun',$a)->first();
			 if (!empty($pembayaran2))
			 {echo $pembayaran2->status;} 
			 else
			 {echo "-";} ?>
			 </td>
			 <td>
			 <? $pembayaran3 = DB::table('pembayaran')->where('id_tower',$temp->id)->where('tahun',$c)->first();
			 if (!empty($pembayaran3))
			 {echo $pembayaran3->status;} 
			 else
			 {echo "-";} ?>
			 </td>
             <td>
                <a class="btn btn-small btn-success" {{ link_to_action('towerController@show', 'Tampil', array($temp->id))}}</a>
                <a class="btn btn-small btn-info" {{link_to_action('towerController@edit', 'Edit', array($temp->id))}}</a>
                <a class="btn btn-small btn-danger" onclick="if (!confirm('Are you sure to delete this item?')) {return false;};" {{ link_to_action('towerController@hapus', 'Hapus', array($temp->id))}}</a>
                <a class="btn btn-small btn-info" {{link_to_action('towerController@bayar', 'Bayar', array($temp->id))}}</a>
			</td>
          </tr>
           @endforeach 
          </tbody>
        </table>
</div>
@stop