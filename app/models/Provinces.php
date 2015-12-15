<?php 
  class Provinces extends Eloquent {
    protected $table = 'provinces';
    protected $primaryKey = 'id';

    public function regencies()
    {
        return $this->hasMany('Regencies', 'province_id');
    }
}
