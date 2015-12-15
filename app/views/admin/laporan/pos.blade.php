

 <div class='container'>
 <? 
 header("Content-Type: application/force-download");
 header("Cache-Control: no-cache, must-revalidate");
 header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); 
 header("content-disposition: attachment;filename=laporan_jasapos".date('dmY').".xls");

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
$bulan = bulan(date("m"));

?>

 <table width="326">
 <tr><th colspan="6">DINAS PERHUBUNGAN, KEBUDAYAAN, PARIWISATA, POS DAN TELEKOMUNIKASI</th></tr>
 <tr><th colspan="6">{{$dataInstansi->kabkota()->first()->name}}</th></tr>
 <tr><th colspan="6">BULAN <? echo $bulan;?> <? echo date("Y");?></th></tr>
 <tr></tr>
 </table>
 <table border="1">
 
    <tr>
       <th>No</th>
       <th>Nama Perusahaan</th>
       <th>Penanggung Jawab</th>
       <th>Alamat</th>
       <th>Telepon</th>
       <th>Keterangan</th>
    </tr>
    @foreach($datapos as $pos)
      <tr>
         <td align="center"><? echo $i++; ?></td>
         <td>{{ $pos->nama_perusahaan }}</td>
         <td>{{ $pos->penanggung_jawab }}</td>
         <td>{{ $pos->alamat }}</td>
         <td>{{ $pos->telepon }}</td>
         <td>{{ $pos->keterangan }}</td>
      </tr>
    @endforeach
 </table>
 
 <table>
 <tr><td></td></tr>
 <tr><td></td></tr>
 <tr><td align="center" colspan="2">Mengetahui,</td></tr>
 <tr>
 @if($dataInstansi->is_kepala_dinas)
 <td align="center" colspan="2">Kepala Dishubparpostel</td>
 @endif
 @if($dataInstansi->is_kepala_satu)
 <td align="center" colspan="1">Kepala Bidang</td>
 @endif
 @if($dataInstansi->is_kepala_dua)
 <td align="center" colspan="3">Kepala Seksi</td>
 @endif
 </tr>
 <tr>
 @if($dataInstansi->is_kepala_dinas)
 <td align="center" colspan="2">{{$dataInstansi->kabkota()->first()->name}}</td>
 @endif
 @if($dataInstansi->is_kepala_satu)
 <td align="center" colspan="1">Teknik Sarana dan Prasarana</td>
 @endif
 @if($dataInstansi->is_kepala_dua)
 <td align="center" colspan="3">Pos dan Telekomunikasi</td>
 @endif
 </tr>
 <tr><td></td></tr>
 <tr>
 @if($dataInstansi->is_kepala_dinas)
 <th colspan="2"><u>{{$dataInstansi->kepala_dinas}}</u></th>
 @endif
 @if($dataInstansi->is_kepala_satu)
 <th colspan="1"><u>{{$dataInstansi->kepala_satu}}</u></th>
 @endif
 @if($dataInstansi->is_kepala_dua)
 <th colspan="3"><u>{{$dataInstansi->kepala_dua}}</u></th>
 @endif
 </tr>
 <tr>
 @if($dataInstansi->is_kepala_dinas)
 <td colspan="2" align="center">NIP. {{$dataInstansi->nip_kepala_dinas}}</td>
 @endif
 @if($dataInstansi->is_kepala_satu)
 <td colspan="1" align="center">NIP. {{$dataInstansi->nip_kepala_satu}}</td>
 @endif
 @if($dataInstansi->is_kepala_dua)
 <td colspan="3" align="center">NIP. {{$dataInstansi->nip_kepala_dua}}</td>
 @endif
 </tr>
 </table>
 </div>
