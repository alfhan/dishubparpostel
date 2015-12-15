<?php class Pos extends Eloquent {
 protected $table = 'pos'; //nama tabel yang mau diolah
 protected $primaryKey = 'id'; //isi dengan nama primary key dari tabel
 
 public function tampilData($id=null){
 if($id!=null)
 	{return self::find($id);}
 else
 {return self::all();}} 

 public function simpan($input){
  $this->nama_perusahaan = $input['nama_perusahaan'];
  $this->penanggung_jawab = $input['penanggung_jawab'];
  $this->alamat = $input['alamat'];
  $this->telepon = $input['telepon'];
  $this->keterangan = $input['keterangan'];  
  $this->save(); //menjalankan perintah simpan
 }
 
 public function prosesEdit($input){
  $id = $input['id'];
  $data = self::find($id);
  $data->nama_perusahaan = $input['nama_perusahaan'];
  $data->penanggung_jawab = $input['penanggung_jawab'];
  $data->alamat = $input['alamat'];
  $data->telepon = $input['telepon'];
  $data->keterangan = $input['keterangan'];
  $data->save();
 }
 
 public function hapus($id){
 self::find($id)->delete();
 }

}
