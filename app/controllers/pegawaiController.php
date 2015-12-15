<?php
 class pegawaiController extends BaseController {
 public function __construct(){
  $this->pegawai = new Pegawai();
 }

 public function admintampil(){
 $data = $this->pegawai->tampilData();
 return View::make('admin.pegawai')->with('datapegawai',$data);}
 
 public function simpan(){
 $input=Input::all();
 $this->pegawai->simpan($input);
 return Redirect::to('admin-page/pegawai');}
 
 public function edit($id){
 $data = $this->pegawai->tampilData($id);
 return View::make('admin.pegawaiedit')->with('datapegawai', $data);}
 
 public function prosesEdit(){
 $input=Input::all();
 $this->pegawai->prosesEdit($input);
 return Redirect::to('admin-page/pegawai');}

 public function hapus($id){
 $this->pegawai->hapus($id);
 return Redirect::to('admin-page/pegawai');}
 
 public function laporan(){
 $data = $this->pegawai->tampilDatakepala();
 return View::make('admin.laporan.wartel')->with('datapegawaikepala',$data);}



}



