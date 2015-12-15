<?php
use app\models\DataInstansi;
 class radioController extends BaseController {
 public function __construct(){
  $this->radio = new radio();
 }

 
 public function tampil(){
 $data = $this->radio->tampilData();
 return View::make('umum.radio')->with('dataradio',$data);}

 public function admintampil(){
 $data = $this->radio->tampilData();
 return View::make('admin.radio')->with('dataradio',$data);}
 
 public function simpan(){
 $input=Input::all();
 $this->radio->simpan($input);
 return Redirect::to('admin-page/radio');}
 
 public function edit($id){
 $data = $this->radio->tampilData($id);
 return View::make('admin.radioedit')->with('dataradio', $data);}
 
 public function prosesEdit(){
 $input=Input::all();
 $this->radio->prosesEdit($input);
 return Redirect::to('admin-page/radio');}
 
 public function show($id){
 $data = $this->radio->tampilData($id);
 return View::make('admin.radioshow')->with('dataradio',$data);}
 
 public function hapus($id){
 $this->radio->hapus($id);
 return Redirect::to('admin-page/radio');}

 public function laporan(){
  $data['dataradio'] = $this->radio->tampilData();

  $dataInstansi = DataInstansi::find(1);
  $kabKotaId = $dataInstansi->kabkota_id;
  $tower = Tower::whereKabkotaId($kabKotaId)->get();
  $data['dataInstansi'] = DataInstansi::find(1);
  return View::make('admin.laporan.radio',$data);
 }


}