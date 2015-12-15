<?php class TVKabel extends Eloquent {
 protected $table = 'tv_kabel'; //nama tabel yang mau diolah
 protected $primaryKey = 'id'; //isi dengan nama primary key dari tabel
  
 public function tampilData($id=null){
 if($id!=null)
 	{return self::find($id);}
 else
 {return self::all();}} 

 public function simpan($input){
  $this->nama_perusahaan = $input['nama_perusahaan'];
  $this->pemilik = $input['pemilik'];
  $this->alamat_perusahaan = $input['alamat_perusahaan'];
  $this->dibangun_tahun = $input['dibangun_tahun'];
  $this->no_simb = $input['no_simb'];
  $this->keterangan = $input['keterangan'];  
  $this->save(); //menjalankan perintah simpan
 }
 
 public function prosesEdit($input){
  $id = $input['id'];
  $data = self::find($id);
  $data->nama_perusahaan = $input['nama_perusahaan'];
  $data->pemilik = $input['pemilik'];
  $data->alamat_perusahaan = $input['alamat_perusahaan'];
  $data->dibangun_tahun = $input['dibangun_tahun'];
  $data->no_simb = $input['no_simb'];
  $data->keterangan = $input['keterangan'];
  $data->save();
 }
 
 public function hapus($id){
 self::find($id)->delete();
 }

}
