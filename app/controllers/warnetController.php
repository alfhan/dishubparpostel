<?php
use app\models\DataInstansi;
 class warnetController extends BaseController {
 public function __construct(){
  $this->warnet = new Warnet();
 }

 
 public function tampil(){
 $data = $this->warnet->tampilData();
 return View::make('umum.warnet')->with('datawarnet',$data);}

 public function admintampil(){
 $data = $this->warnet->tampilData();
 return View::make('admin.warnet')->with('datawarnet',$data);}
 
 public function simpan(){
 $input=Input::all();
 $this->warnet->simpan($input);
 return Redirect::to('admin-page/warnet');}
 
 public function edit($id){
  $dataInstansi = DataInstansi::find(1);
  $kabKotaId = $dataInstansi->kabkota_id;
  $data['kecamatan'] = Districts::whereRegencyId($kabKotaId)->get();
  
  $data['datawarnet'] = $this->warnet->tampilData($id);
  return View::make('admin.warnetedit',$data);
 }
 
 public function prosesEdit(){
 $input=Input::all();
 $this->warnet->prosesEdit($input);
 return Redirect::to('admin-page/warnet');}
 
 public function show($id){
 $data = $this->warnet->tampilData($id);
 return View::make('admin.warnetshow')->with('datawarnet',$data);}
 
 public function hapus($id){
 $this->warnet->hapus($id);
 return Redirect::to('admin-page/warnet');}

 public function laporan(){
  $data['datawarnet'] = $this->warnet->tampilData();

  $dataInstansi = DataInstansi::find(1);
  $kabKotaId = $dataInstansi->kabkota_id;
  $tower = Tower::whereKabkotaId($kabKotaId)->get();
  $data['dataInstansi'] = DataInstansi::find(1);
  return View::make('admin.laporan.warnet',$data);
}


}



