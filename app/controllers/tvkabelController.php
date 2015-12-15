<?php
 use app\models\DataInstansi;

 class tvkabelController extends BaseController {
 public function __construct(){
  $this->tvkabel = new TVKabel();
 }

 
 public function tampil(){
 $data = $this->tvkabel->tampilData();
 return View::make('umum.tvkabel')->with('datatvkabel',$data);}
 
 public function admintampil(){
 $data = $this->tvkabel->tampilData();
 return View::make('admin.tvkabel')->with('datatvkabel',$data);}
 
 public function simpan(){
 $input=Input::all();
 $this->tvkabel->simpan($input);
 return Redirect::to('admin-page/tvkabel');}
 
 public function edit($id){
 $data = $this->tvkabel->tampilData($id);
 return View::make('admin.tvkabeledit')->with('datatvkabel', $data);}
 
 public function prosesEdit(){
 $input=Input::all();
 $this->tvkabel->prosesEdit($input);
 return Redirect::to('admin-page/tvkabel');}
 
 public function show($id){
 $data = $this->tvkabel->tampilData($id);
 return View::make('admin.tvkabelshow')->with('datatvkabel',$data);}
 
 public function hapus($id){
 $this->tvkabel->hapus($id);
 return Redirect::to('admin-page/tvkabel');}

 public function laporan(){
  $data['datatvkabel'] = $this->tvkabel->tampilData();
  $dataInstansi = DataInstansi::find(1);
  $kabKotaId = $dataInstansi->kabkota_id;
  $tower = Tower::whereKabkotaId($kabKotaId)->get();
  $data['dataInstansi'] = DataInstansi::find(1);
  return View::make('admin.laporan.tvkabel',$data);
 }


}



