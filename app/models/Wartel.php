<?php class Wartel extends Eloquent {
 protected $table = 'wartel'; //nama tabel yang mau diolah
 protected $primaryKey = 'id'; //isi dengan nama primary key dari tabel
  
 public function tampilData($id=null){
 if($id!=null)
 	{return self::find($id);}
 else
 {return self::all();}} 

 public function simpan($input){
  $this->kecamatan_id = $input['kecamatan_id'];
  $this->nama_wartel = $input['nama_wartel'];
  $this->jumlah_kbu = $input['jumlah_kbu'];
  $this->pemilik = $input['pemilik'];
  $this->alamat = $input['alamat'];
  $this->telepon = $input['telepon'];
  $this->keterangan = $input['keterangan'];  
  $this->save(); //menjalankan perintah simpan
 }
 
 public function prosesEdit($input){
  $id = $input['id'];
  $data = self::find($id);
  $data->kecamatan_id = $input['kecamatan_id'];
  $data->nama_wartel = $input['nama_wartel'];
  $data->jumlah_kbu = $input['jumlah_kbu'];
  $data->pemilik = $input['pemilik'];
  $data->alamat = $input['alamat'];
  $data->telepon = $input['telepon'];
  $data->keterangan = $input['keterangan'];
  $data->save();
 }
 
 public function hapus($id){
 self::find($id)->delete();
 }
 public function kecamatan()
 {
  return $this->belongsTo('Districts', 'kecamatan_id', 'id');
 }
}