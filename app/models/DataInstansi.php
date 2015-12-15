<?php 
namespace app\models;
use Eloquent;
  class DataInstansi extends Eloquent {

    protected $table = 'data_instansi';
    protected $primaryKey = 'id';
	
	public function kabkota()
  	{
    	return $this->belongsTo('Regencies', 'kabkota_id', 'id');
    }   
}
