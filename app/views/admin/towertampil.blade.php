<table class="table table-bordered" width="100%">
<tr>
	<td rowspan="12" align="center">{{ HTML::image('image/'.$datatower->gambar, 'gambar', array( 'width' => 500, 'height' => 400 )) }}</td>
	<td>Zona</td><td>{{ $datatower->zona }}</td>
</tr>
<tr><td>Kecamatan</td><td>{{ $datatower->kecamatan->name }}</td></tr>
<tr><td>Desa</td><td><?php $desa = $datatower->desa()->first();?>{{ $desa->name }}</td></tr>
<tr><td>Nama Perusahaan</td><td>{{ $datatower->nama_perusahaan }}</td></tr>
<tr><td>Alamat Perusahaan</td><td>{{ $datatower->alamat_perusahaan }}</td></tr>
<tr><td>Lokasi</td><td>{{ $datatower->lokasi }}</td></tr>
<tr><td>Kordinat</td><td>{{ $datatower->kordinat }}</td></tr>
<tr><td>Tinggi Menara</td><td>{{ $datatower->tinggi_menara }}</td></tr>
<tr><td>Dibangun Tahun</td><td>{{ $datatower->dibangun_tahun }}</td></tr>
<tr><td>No. SIMB</td><td>{{ $datatower->no_simb }}</td></tr>
<tr><td>Keterangan</td><td>{{ $datatower->keterangan }}</td></tr>
</table>