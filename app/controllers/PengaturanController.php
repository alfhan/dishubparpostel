<?php
use app\models\DataPemilik;
use app\models\DataInstansi;

  class PengaturanController extends BaseController {
    
    public function getDataInstansi($value='')
    {
      $data = [
        'provinces'=>Provinces::all(),
        'data'=>DataInstansi::find(1),
      ];
      return View::make('admin.datainstansi',$data);
    }
    public function getDataPemilik($value='')
    {
      $data = [
        'list'=>DataPemilik::all(),
      ];
      return View::make('admin.datapemilik',$data);
    }
    public function getDataPemilikForm($id=0)
    {
      $data = [];
      if($id > 0)
        $data = ['row'=>DataPemilik::find($id)];

      return View::make('admin.datapemilikform',$data);
    }
    public function postSaveDataPemilik()
    {
      $id = Input::get('id');
      if($id > 0)
        $data = DataPemilik::find($id);
      else
        $data = new DataPemilik();

      $data->nama_perusahaan = Input::get('nama_perusahaan');
      $data->alamat_perusahaan= Input::get('alamat_perusahaan');
      $data->save();
      return Redirect::to('pengaturan/data-pemilik');
    }
    public function getHapusDataPemilik($id=0)
    {
      DataPemilik::find($id)->delete();
      return Redirect::to('pengaturan/data-pemilik');
    }
    public function postSaveDataInstansi()
    {
      $data = DataInstansi::find(1);
      $data->kabkota_id = Input::get('kabkota_id');
      $data->nama_instansi= Input::get('nama_instansi');
      $data->kepala_dinas = Input::get('kepala_dinas');
      $data->nip_kepala_dinas = Input::get('nip_kepala_dinas');
      $data->is_kepala_dinas = Input::get('is_kepala_dinas');
      $data->kepala_satu = Input::get('kepala_satu');
      $data->nip_kepala_satu = Input::get('nip_kepala_satu');
      $data->is_kepala_satu = Input::get('is_kepala_satu');
      $data->kepala_dua = Input::get('kepala_dua');
      $data->nip_kepala_dua = Input::get('nip_kepala_dua');
      $data->is_kepala_dua = Input::get('is_kepala_dua');
      $data->save();
      return Redirect::to('pengaturan/data-instansi');
    }
    public function getKecamatan()
    {
      $dataInstansi = DataInstansi::find(1);
      $kabKotaId = $dataInstansi->kabkota_id;
      $data = ['list'=>Districts::whereRegencyId($kabKotaId)->get()];
      return View::make('admin.option',$data);
    }
    public function getDesa($param=0)
    {
    	$kecamatanId = Input::get('kecamatan_id');
      $data = [
        'list'  =>  Villages::whereDistrictId($kecamatanId)->get(),
        'param' =>  $param
        ];
      return View::make('admin.option',$data);
    }
    public function getPerusahaan($value='')
    {
      $id = Input::get('perusahaan_id');
      $data = DataPemilik::find($id);
      // echo json_encode(array('data'=>$data));
      echo $data->alamat_perusahaan;
    }
}