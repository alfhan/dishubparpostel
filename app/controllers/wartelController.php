<?php
use app\models\DataInstansi;
 class wartelController extends BaseController {
 public function __construct(){$this->wartel = new Wartel();}
 
 public function tampil(){
 $data = $this->wartel->tampilData();
 return View::make('umum.wartel')->with('datawartel',$data);}
 
public function admintampil(){
	$data['datawartel'] = $this->wartel->tampilData();
	return View::make('admin.wartel',$data);
}
 
 public function simpan(){
 $wartel = new Wartel;

    $wartel->kecamatan_id       = Input::get('kecamatan_id');
    $wartel->nama_wartel      = Input::get('nama_wartel');
    $wartel->jumlah_kbu    = Input::get('jumlah_kbu');
    $wartel->pemilik  = Input::get('pemilik');
    $wartel->alamat     = Input::get('alamat');
    $wartel->telepon     = Input::get('telepon');
    $wartel->keterangan     = Input::get('keterangan');
    $wartel->save();
 
 return Redirect::to('admin-page/wartel');}
 
 public function edit($id){
  $dataInstansi = DataInstansi::find(1);
  $kabKotaId = $dataInstansi->kabkota_id;
  $data['kecamatan'] = Districts::whereRegencyId($kabKotaId)->get();

  $data['datawartel'] = $this->wartel->tampilData($id);
  return View::make('admin.warteledit',$data);
 }
 
 public function prosesEdit(){
 $input=Input::all();
 $this->wartel->prosesEdit($input);
 return Redirect::to('admin-page/wartel');}
 
 public function show($id){
 $data = $this->wartel->tampilData($id);
 return View::make('admin.wartelshow')->with('datawartel',$data);}
 
 public function hapus($id){
 $this->wartel->hapus($id);
 return Redirect::to('admin-page/wartel');}
 
 public function laporan(){
  $data['datawartel'] = $this->wartel->tampilData();

  $dataInstansi = DataInstansi::find(1);
  $kabKotaId = $dataInstansi->kabkota_id;
  $tower = Tower::whereKabkotaId($kabKotaId)->get();
  $data['dataInstansi'] = DataInstansi::find(1);

  return View::make('admin.laporan.wartel',$data);
 }

}



