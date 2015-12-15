<?php class Radio extends Eloquent {
 protected $table = 'radio'; //nama tabel yang mau diolah
 protected $primaryKey = 'id'; //isi dengan nama primary key dari tabel
 
 public function tampilData($id=null){
 if($id!=null)
 	{return self::find($id);}
 else
 {return self::all();}} 

 public function simpan($input){
  $this->nama_radio = $input['nama_radio'];
  $this->frekuensi = $input['frekuensi'];
  $this->penanggung_jawab = $input['penanggung_jawab'];
  $this->alamat = $input['alamat'];
  $this->telepon = $input['telepon'];
  $this->tgl_proposal = $input['tgl_proposal'];
  $this->atas_nama = $input['atas_nama'];
  $this->keterangan = $input['keterangan'];  
  $this->save(); //menjalankan perintah simpan
 }
 
 public function prosesEdit($input){
  $id = $input['id'];
  $data = self::find($id);
  $data->nama_radio = $input['nama_radio'];
  $data->frekuensi = $input['frekuensi'];
  $data->penanggung_jawab = $input['penanggung_jawab'];
  $data->alamat = $input['alamat'];
  $data->telepon = $input['telepon'];
  $data->tgl_proposal = $input['tgl_proposal'];
  $data->atas_nama = $input['atas_nama'];
  $data->keterangan = $input['keterangan'];
  $data->save();
 }
 
 public function hapus($id){
 self::find($id)->delete();
 }

}
