<?php
use app\models\DataInstansi;
use app\models\DataPemilik;

 class towerController extends BaseController {
 public function __construct(){
  $this->tower_bts = new Tower();
  $this->pembayaran = new Pembayaran();
 }

 
    public function tampilpembayaran($tahun=2010){
        //get kabkota
        $dataInstansi = DataInstansi::find(1);
        $kabKotaId = $dataInstansi->kabkota_id;

        $tower = Tower::whereKabkotaId($kabKotaId)->get();
        return View::make('admin.towertampilbayar', compact('tower','tahun'));
    }

 
 public function admintampil(){

    $dataInstansi = DataInstansi::find(1);
    $kabKotaId = $dataInstansi->kabkota_id;

	$tower = Tower::whereKabkotaId($kabKotaId)->get();

	# Kirim variabel ke View
	return View::make('admin.tower', compact('tower'));
}
 
 public function simpan(){
    //get kabkota
    $dataInstansi = DataInstansi::find(1);
    $kabKotaId = $dataInstansi->kabkota_id;

    $tower = new Tower;
    $tower->kabkota_id       = $kabKotaId;
    $tower->zona       = Input::get('zona');
    $tower->kecamatan_id       = Input::get('kecamatan_id');
    $tower->desa_id      = Input::get('desa_id');
    $tower->perusahaan_id  = Input::get('nama_perusahaan_id');
    $tower->lokasi     = Input::get('lokasi');
    $tower->kordinat     = Input::get('kordinat');
    $tower->tinggi_menara     = Input::get('tinggi_menara');
    $tower->dibangun_tahun     = Input::get('dibangun_tahun');
    $tower->no_simb     = Input::get('no_simb');
    $tower->keterangan     = Input::get('keterangan');
 
    if (Input::hasFile('gambar'))
    {
	   $file     = Input::file('gambar');
	   $filename = str_random(25).'-'.$file->getClientOriginalName();

	   $destinationPath = 'image/';
        $file->move($destinationPath, $filename);
        $tower->gambar     = $filename;
    }
    $tower->save();
 return Redirect::to('admin-page/tower');}

public function prosesBayar(){
    $pembayaran = new Pembayaran;
    if(Input::get('id') > 0){
        $pembayaran = Pembayaran::find(Input::get('id'));
    }
    $pembayaran->id_tower   = Input::get('id_tower');
    $pembayaran->tahun      = Input::get('tahun');
    $pembayaran->keterangan = Input::get('keterangan');
    $pembayaran->no_bukti_bayar = Input::get('no_bukti_bayar');
    if(Input::get('no_bukti_bayar')){
        $pembayaran->status = 'Lunas';
    }else{
        $pembayaran->status = 'Belum Lunas';
    }
    
    if (Input::hasFile('bukti')){
    	$file     = Input::file('bukti');
    	$filename = str_random(25).'-'.$file->getClientOriginalName();

    	$destinationPath = 'image/';
        $file->move($destinationPath, $filename);
        $pembayaran->bukti     = $filename;
    }
    $pembayaran->save();

    return Redirect::to('admin-page/tower_bts/tampilbayar/'.Input::get('tahun'));
}

  
 public function edit($id){
    $data['datatower'] = $this->tower_bts->tampilData($id);
    //kecamatan
    $dataInstansi = DataInstansi::find(1);
    $kabKotaId = $dataInstansi->kabkota_id;
    $data['kecamatan'] = Districts::whereRegencyId($kabKotaId)->get();
    $data['datapemilik'] = DataPemilik::all();
    return View::make('admin.toweredit',$data);
}

 public function editbayar($id){
    $data = $this->pembayaran->tampil($id);
    return View::make('admin.towereditbayar')->with('datatower', $data);
 }
 
 public function prosesEdit(){
 $input=Input::all();
 $this->tower_bts->prosesEdit($input);
 return Redirect::to('admin-page/tower');}

 public function prosesEditbayar(){
 $input=Input::all();
 $this->pembayaran->prosesEditbayar($input);
 return Redirect::to('admin-page/tower_bts/tampilbayar');
}

 public function show($id){
 $data = $this->tower_bts->tampilData($id);
 return View::make('admin.towershow')->with('datatower',$data);}

 public function showbayar($id){
 $data = $this->pembayaran->tampil($id);
 return View::make('admin.towershowbayar')->with('datatower',$data);}
 
 public function hapus($id){
 $this->tower_bts->hapus($id);
 return Redirect::to('admin-page/tower');}
 
 public function hapusbayar($id){
 $this->pembayaran->find($id)->delete();
 return Redirect::to('admin-page/tower_bts/tampilbayar');}
 
public function bayar($id,$tahun){
    $data['datatower'] = $this->tower_bts->tampilData($id);
    $data['tahun'] = $tahun;
    return View::make('admin.towerbayar',$data);
}

 public function bayar2($id){
 $data = $this->pembayaran->tampil($id);
 return View::make('admin.towerbayar')->with('datatower', $data);}

 public function laporan(){
    #old
    //$tower = tower::with('pembayaran')->get();
    # Kirim variabel ke View
    $dataInstansi = DataInstansi::find(1);
    $kabKotaId = $dataInstansi->kabkota_id;

    $tower = Tower::whereKabkotaId($kabKotaId)->get();
    $dataInstansi = DataInstansi::find(1);
	return View::make('admin.laporan.tower', compact('tower','dataInstansi'));
 }

 public function laporan3(){
 $data = $this->tower_bts->tampilData();
 return View::make('admin.laporan.tower')->with('datatower',$data);}

 public function laporan2(){
 $data = $this->tower_bts->tampilData();
 $pegawai = pegawai::with('datatower', $data ,'pegawai1','pegawai2','pegawai3')->get();
 return View::make('admin.laporan.tower', compact('pegawai')); }
//additional alfan
 public function tampil()
 {
    $id = Input::get('id');
    $data['datatower'] = tower::find($id);
    return View::make('admin.towertampil', $data);
 }
}