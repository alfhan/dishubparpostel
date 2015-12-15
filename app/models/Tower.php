<?php class Tower extends Eloquent {
 protected $table = 'tower_bts'; //nama tabel yang mau diolah
 protected $primaryKey = 'id'; //isi dengan nama primary key dari tabel
 
 public function tampilData($id=null){
 if($id!=null)
 	{return self::find($id);} //edit
 else
 	{return self::all();} //menampilkan semua data
 } 

 public function simpan($input){
  $this->zona = $input['zona'];
  $this->desa = $input['desa'];
  $this->nama_perusahaan = $input['nama_perusahaan'];
  $this->alamat_perusahaan = $input['alamat_perusahaan'];
  $this->lokasi = $input['lokasi'];
  $this->kordinat = $input['kordinat'];
  $this->tinggi_menara = $input['tinggi_menara'];
  $this->dibangun_tahun = $input['dibangun_tahun'];
  $this->no_simb = $input['no_simb'];
  $this->keterangan = $input['keterangan'];
  $this->gambar = $input['gambar'];
    
  $this->save(); //menjalankan perintah simpan
 }

 public function prosesEdit($input){
  $id = $input['id'];
  $data = self::find($id);
  $data->zona = $input['zona'];
  $data->kecamatan_id = $input['kecamatan_id'];
  $data->desa_id = $input['desa_id'];
  $data->perusahaan_id = $input['nama_perusahaan_id'];
  /*$data->alamat_perusahaan = $input['alamat_perusahaan'];*/
  $data->lokasi = $input['lokasi'];
  $data->kordinat = $input['kordinat'];
  $data->tinggi_menara = $input['tinggi_menara'];
  $data->dibangun_tahun = $input['dibangun_tahun'];
  $data->no_simb = $input['no_simb'];
  $data->keterangan = $input['keterangan'];
  if (Input::hasFile('gambar'))
  {
   $file     = Input::file('gambar');
   $filename = str_random(5).'-'.$file->getClientOriginalName();

   $destinationPath = 'image/';
      $file->move($destinationPath, $filename);
      $data->gambar     = $filename;
  }
  $data->save();
 }

 public function hapus($id){
 self::find($id)->delete();
 }

 public function pembayaran() {
    return $this->hasMany('Pembayaran', 'id_tower');
  }
  public function kecamatan()
  {
    return $this->belongsTo('Districts', 'kecamatan_id', 'id');
  }
  public function desa()
  {
    return $this->belongsTo('Villages', 'desa_id', 'id');
  }
  public function perusahaan()
  {
    return $this->belongsTo('app\models\DataPemilik', 'perusahaan_id', 'id');
  }
}