<?php 
namespace app\models;
use Eloquent;
  class DataPemilik extends Eloquent {
    
    protected $table = 'data_pemilik';
    protected $primaryKey = 'id';

    public function tower() {
    	return $this->hasMany('Tower', 'perusahaan_id', 'id');
  	}
}