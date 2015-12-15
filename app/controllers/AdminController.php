<?php

use app\models\Article;
use app\models\DataPemilik;
use app\models\DataInstansi;
  

  class AdminController extends BaseController {
    
    public function getIndex($value='', $grafik = null)
    {
      $data['title'] = is_null($grafik) ? ucwords('menara') : ucwords($grafik);
      $data['perusahaan']  = DataPemilik::all();
      //get kabkota
      $dataInstansi = DataInstansi::find(1);
      $kabKotaId = $dataInstansi->kabkota_id;
      $data['kabKotaId'] = $kabKotaId;
      $data['zona'] = ['Zona 1', 'Zona 2', 'Zona 3'];

      return View::make('admin.'.$value,$data);
    }
}