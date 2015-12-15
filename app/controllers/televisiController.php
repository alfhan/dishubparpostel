<?php
 use app\models\DataInstansi;

 class televisiController extends BaseController {
 public function __construct(){
  $this->televisi = new Televisi();
 }

 
 public function tampil(){
 $data = $this->televisi->tampilData();
 return View::make('umum.televisi')->with('datatelevisi',$data);}

 public function admintampil(){
 $data = $this->televisi->tampilData();
 return View::make('admin.televisi')->with('datatelevisi',$data);}
 
 public function simpan(){
 $input=Input::all();
 $this->televisi->simpan($input);
 return Redirect::to('admin-page/televisi');}
 
 public function edit($id){
 $data = $this->televisi->tampilData($id);
 return View::make('admin.televisiedit')->with('datatelevisi', $data);}
 
 public function prosesEdit(){
 $input=Input::all();
 $this->televisi->prosesEdit($input);
 return Redirect::to('admin-page/televisi');}
 
 public function show($id){
 $data = $this->televisi->tampilData($id);
 return View::make('admin.televisishow')->with('datatelevisi',$data);}
 
 public function hapus($id){
 $this->televisi->hapus($id);
 return Redirect::to('admin-page/televisi');}

 public function laporan(){
  $data['datatelevisi'] = $this->televisi->tampilData();
  $dataInstansi = DataInstansi::find(1);
  $kabKotaId = $dataInstansi->kabkota_id;
  $tower = Tower::whereKabkotaId($kabKotaId)->get();
  $data['dataInstansi'] = DataInstansi::find(1);
  return View::make('admin.laporan.televisi',$data);
}


}



