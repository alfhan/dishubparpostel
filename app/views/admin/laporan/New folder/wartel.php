

 <div class='container'>
 <? 
 header("Content-Type: application/force-download");
 header("Cache-Control: no-cache, must-revalidate");
 header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); 
 header("content-disposition: attachment;filename=laporan_wartel".date('dmY').".xls");
 $i=1; 
 ?>
 <table width="326">
 <tr><td align="center" colspan="8">DINAS PERHUBUNGAN, KEBUDAYAAN, PARIWISATA, POS DAN TELEKOMUNIKASI</td></tr>
 <tr><td align="center" colspan="8">KABUPATEN PURWAKARTA</td></tr>
 <tr><td align="center" colspan="8">BULAN </td></tr>
 </table>
 <table width="326" border="1">
 
    <tr>
       <th>No</th>
       <th>Kecamatan</th>
       <th>Nama Wartel</th>
       <th>Jumlah KBU</th>
       <th>Pemilik</th>
       <th>Alamat</th>
       <th>Telepon</th>
       <th>Keterangan</th>
    </tr>
    @foreach($datawartel as $wartel)
      <tr>
         <td><? echo $i++; ?></td>
         <td>{{ $wartel->kecamatan }}</td>
         <td>{{ $wartel->nama_wartel }}</td>
         <td>{{ $wartel->jumlah_kbu }}</td>
         <td>{{ $wartel->pemilik }}</td>
         <td>{{ $wartel->alamat }}</td>
         <td>{{ $wartel->telepon }}</td>
         <td>{{ $wartel->keterangan }}</td>
      </tr>
    @endforeach
 </table>
 </div>
