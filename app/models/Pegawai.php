<?php class Pegawai extends Eloquent {
 protected $table = 'pegawai'; //nama tabel yang mau diolah
 protected $primaryKey = 'id'; //isi dengan nama primary key dari tabel
 
 public function tampilData($id=null){
 if($id!=null)
 	{return self::find($id);}
 else
 {return self::all();}} 

 public function simpan($input){
  $this->nip = $input['nip'];
  $this->nama = $input['nama'];
  $this->jabatan = $input['jabatan'];
  $this->save(); //menjalankan perintah simpan
 }
 
 public function prosesEdit($input){
  $id = $input['id'];
  $data = self::find($id);
  $data->nip = $input['nip'];
  $data->nama = $input['nama'];
  $data->jabatan = $input['jabatan'];
  $data->save();
 }
 
 public function hapus($id){
 self::find($id)->delete();
 }
 
 public function pegawai1($jabatan='kepala dishubparpostel'){
 return self::find($jabatan);} 

 public function pegawai2($jabatan='Kepala Bidang Teknik Sarana dan Prasarana'){
 return self::find($jabatan);}

 public function pegawai3($jabatan='Kepala Seksi Pos dan Telekomunikasi'){
 return self::find($jabatan);}
}
