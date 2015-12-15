<?php
 use app\models\DataInstansi;

 class posController extends BaseController {
 public function __construct(){
  $this->pos = new Pos();
 }

 
 public function tampil(){
 $data = $this->pos->tampilData();
 return View::make('umum.pos')->with('datapos',$data);}
 
 public function admintampil(){
 $data = $this->pos->tampilData();
 return View::make('admin.pos')->with('datapos',$data);}
 
 public function simpan(){
 $input=Input::all();
 $this->pos->simpan($input);
 return Redirect::to('admin-page/pos');}
 
 public function edit($id){
 $data = $this->pos->tampilData($id);
 return View::make('admin.posedit')->with('datapos', $data);}
 
 public function prosesEdit(){
 $input=Input::all();
 $this->pos->prosesEdit($input);
 return Redirect::to('admin-page/pos');}
 
 public function show($id){
 $data = $this->pos->tampilData($id);
 return View::make('admin.posshow')->with('datapos',$data);}
 
 public function hapus($id){
 $this->pos->hapus($id);
 return Redirect::to('admin-page/pos');}

 public function laporan(){
  $data['datapos'] = $this->pos->tampilData();

  $dataInstansi = DataInstansi::find(1);
  $kabKotaId = $dataInstansi->kabkota_id;
  $tower = Tower::whereKabkotaId($kabKotaId)->get();
  $data['dataInstansi'] = DataInstansi::find(1);
  return View::make('admin.laporan.pos',$data);
 }
}