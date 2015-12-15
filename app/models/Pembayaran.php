<?php 
 class Pembayaran extends Eloquent {
 
 protected $table = 'pembayaran'; //nama tabel yang mau diolah
 protected $primaryKey = 'id'; //isi dengan nama primary key dari tabel
 

 public function tampil2()
 {
 return self::find($id);
 }

  
 public function tampil($id=null){
 if($id!=null)
 	{return self::find($id);}
 else
 {return self::all();}} 

 public function prosesEditbayar($input){
  $id = $input['id'];
  $data = self::find($id);
  $data->id_tower = $input['id_tower'];
  $data->desa = $input['desa'];
  $data->nama_perusahaan = $input['nama_perusahaan'];
  $data->tahun = $input['tahun'];
  $data->status = $input['status'];
  $data->keterangan = $input['keterangan'];
  $data->save();
 }


 
 public function tower() {
		return $this->belongsTo('Tower', 'id_tower');
	}

}