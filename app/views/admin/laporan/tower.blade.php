

 <div class='container'>
 <? 
 header("Content-Type: application/force-download");
 header("Cache-Control: no-cache, must-revalidate");
 header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); 
 header("content-disposition: attachment;filename=laporan_tower".date('dmY').".xls");

 $i=1;
// FUNGSI BULAN DALAM BAHASA INDONESIA
function bulan ($bln){
$bulan = $bln;
Switch ($bulan){
 case 1 : $bulan="JANUARI";
 Break;
 case 2 : $bulan="FEBRUARI";
 Break;
 case 3 : $bulan="MARET";
 Break;
 case 4 : $bulan="APRIL";
 Break;
 case 5 : $bulan="MEI";
 Break;
 case 6 : $bulan="JUNI";
 Break;
 case 7 : $bulan="JULI";
 Break;
 case 8 : $bulan="AGUSTUS";
 Break;
 case 9 : $bulan="SEPTEMBER";
 Break;
 case 10 : $bulan="OKTOBER";
 Break;
 case 11 : $bulan="NOVEMBER";
 Break;
 case 12 : $bulan="DESEMBER";
 Break;
 }
return $bulan;
}
$bulan = bulan(date("m")); ?>
<? $i=1; ?>
<? $a= date("Y");?>
 <? $b= $a-$i;?>
 <? $c= $a+$i;?>


 <table width="326">
 <tr><th colspan="14">DINAS PERHUBUNGAN, KEBUDAYAAN, PARIWISATA, POS DAN TELEKOMUNIKASI</th></tr>
 <tr><th colspan="14">{{$dataInstansi->kabkota()->first()->name}}</th></tr>
 <tr><th colspan="14">BULAN <? echo $bulan;?> <? echo date("Y");?></th></tr>
 <tr></tr>
 </table>
 <table border="1">
 
    <tr>
             <th>No</th>
			 <th>Zona</th>
			 <th>Kecamatan</th>
             <th>Desa</th>
             <th>Nama Perusahaan</th>
			 <th>Alamat Perusahaan</th>
			 <th>Lokasi</th>
             <th>Kordinat</th>
			 <th>Tinggi Menara</th>
			 <th>Dibangun Tahun</th>
			 <th>No. SIMB</th>
			 <th>Keterangan</th>
		  </tr>
          <tbody>
		  

              @foreach($tower as $temp)
          <tr>
             <td><? echo $i++; ?></td>
			 <td>{{ $temp->zona }}</td>
             <td>{{ $temp->kecamatan->name }}</td>
             <td>{{ $temp->desa()->first()->name }}</td>
             <td>{{ $temp->nama_perusahaan }}</td>
			 <td>{{ $temp->alamat_perusahaan }}</td>
			 <td>{{ $temp->lokasi }}</td>
             <td>{{ $temp->kordinat }}</td>
			 <td>{{ $temp->tinggi_menara }}</td>
			 <td>{{ $temp->dibangun_tahun }}</td>
			 <td>{{ $temp->no_simb }}</td>
			 <td>{{ $temp->keterangan }}</td>
          </tr>
           @endforeach 
          </tbody>
        </table>
     
 
 <table>
 <tr><td></td></tr>
 <tr><td></td></tr>
 <tr><td align="center" colspan="4">Mengetahui,</td></tr>
 <tr>
 @if($dataInstansi->is_kepala_dinas)
 <td align="center" colspan="4">Kepala Dishubparpostel</td>
 @endif
 @if($dataInstansi->is_kepala_satu)
 <td align="center" colspan="3">Kepala Bidang</td>
 @endif
 @if($dataInstansi->is_kepala_dua)
 <td align="center" colspan="4">Kepala Seksi</td>
 @endif
 </tr>
 <tr>
 @if($dataInstansi->is_kepala_dinas)
 <td align="center" colspan="4">{{$dataInstansi->kabkota()->first()->name}}</td>
 @endif
 @if($dataInstansi->is_kepala_satu)
 <td align="center" colspan="3">Teknik Sarana dan Prasarana</td>
 @endif
 @if($dataInstansi->is_kepala_dua)
 <td align="center" colspan="4">Pos dan Telekomunikasi</td>
 @endif
 </tr>
 <tr><td></td></tr>
 <tr>
 @if($dataInstansi->is_kepala_dinas)
 <th colspan="4"><u>{{$dataInstansi->kepala_dinas}}</u></th>
 @endif
 @if($dataInstansi->is_kepala_satu)
 <th colspan="3"><u>{{$dataInstansi->kepala_satu}}</u></th>
 @endif
 @if($dataInstansi->is_kepala_dua)
 <th colspan="4"><u>{{$dataInstansi->kepala_dua}}</u></th>
 @endif
 </tr>
 <tr>
 <td colspan="4" align="center">NIP. {{$dataInstansi->nip_kepala_dinas}}</td>
 <td colspan="3" align="center">NIP. {{$dataInstansi->nip_kepala_satu}}</td>
 <td colspan="4" align="center">NIP. {{$dataInstansi->nip_kepala_dua}}</td>
 </tr>
 </table>
 </div>
